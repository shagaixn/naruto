import React, { useState } from 'react';

const data = [
  {
    text: "“Номоо их сайн, бас сонсож хэлбэрээр ч сонсдог болсонд баяртай байна.”",
    name: "Сараа"
  },
  {
    text: "“Амьдралыг минь өөрчилсөн хүчирхэг ном оруулсан Mbook-д баярлалаа.”",
    name: "Мөнхсайхан"
  },
  {
    text: "“Үнэхээр гоё апп байна, хэрэглэхэд амархан.”",
    name: "Амаа"
  }
];

export default function Testimonial() {
  const [current, setCurrent] = useState(0);
  return (
    <section id="testimonials">
      <h2>Хэрэглэгчдийн <strong>сэтгэгдэл</strong></h2>
      <div className="testimonial-container">
        {data.map((item, i) => (
          <div key={i} className={`testimonial ${i === current ? 'active' : ''}`}>
            <p>{item.text}</p>
            <h4>{item.name}</h4>
          </div>
        ))}
      </div>
      <div className="controls">
        <button onClick={() => setCurrent((current - 1 + data.length) % data.length)}>←</button>
        <button onClick={() => setCurrent((current + 1) % data.length)}>→</button>
      </div>
    </section>
  );
}