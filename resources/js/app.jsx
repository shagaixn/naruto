import React from 'react';
import { createRoot } from 'react-dom/client';
import Testimonial from './components/Testimonial';

if (document.getElementById('react-testimonials')) {
    createRoot(document.getElementById('react-testimonials')).render(<Testimonial />);
}