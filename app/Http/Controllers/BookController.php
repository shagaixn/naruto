<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookCategory;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->paginate(10);
        return view('layouts.admin.books.index', compact('books'));
    }

    public function create()
    {
        $categories = BookCategory::all();
        return view('layouts.admin.books.create', compact('categories'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('layouts.admin.books.show', compact('book'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category_name' => 'required|string|max:255',
            'published_date' => 'required|date',
            'price' => 'required|numeric',
            'pages' => 'required|numeric',
            'description' => 'required|string',
            'cover_image' => 'nullable|image|max:2048',
        ]);

        // Категорийг үүсгэх буюу авах
        $category = BookCategory::firstOrCreate([
            'name' => $request->category_name
        ]);

        $validated['category_id'] = $category->id;
        unset($validated['category_name']); // category_name-г массив-аас хасна

        // Зураг upload хийж байгаа бол
        if ($request->hasFile('cover_image')) {
            $validated['cover'] = $this->handleImageUpload($request);
            unset($validated['cover_image']); // cover_image-г cover болгож өөрчилнө
        }

        Book::create($validated);

        return redirect()->route('admin.books.index')->with('success', 'Ном амжилттай нэмэгдлээ!');
    }

    public function edit(Book $book)
    {
        $categories = BookCategory::all();
        return view('layouts.admin.books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category_id' => 'required|exists:book_categories,id',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'published_date' => 'nullable|date',
            'price' => 'required|integer|min:0',
            'pages' => 'nullable|integer|min:1',
            'description' => 'nullable|string',
        ]);

        // Зураг upload хийх, хуучин зураг устгах
        if ($request->hasFile('cover_image')) {
            $validated['cover'] = $this->handleImageUpload($request, $book);
        }
        unset($validated['cover_image']); // cover_image field-ийг хас

        $book->update($validated);

        return redirect()->route('admin.books.index')->with('success', 'Ном шинэчлэгдлээ!');
    }

    public function destroy(Book $book)
    {
        // Зураг устгах (хэрвээ байгаа бол)
        if ($book->cover_image && Storage::disk('public')->exists($book->cover_image)) {
            Storage::disk('public')->delete($book->cover_image);
        }
        $book->delete();
        return redirect()->route('admin.books.index')->with('success', 'Ном устгагдлаа!');
    }

    /**
     * Зураг upload хийх, update үед хуучин зургийг устгах
     */
    protected function handleImageUpload(Request $request, Book $book = null)
    {
        if ($request->hasFile('cover_image')) {
            // Хэрвээ update бол хуучин зураг устгах
            if ($book && $book->cover && Storage::disk('public')->exists($book->cover)) {
                Storage::disk('public')->delete($book->cover);
            }
            return $request->file('cover_image')->store('books', 'public');
        }
        // Update үед зураггүй бол хуучин зургийг хадгална
        return $book ? $book->cover : null;
    }
}