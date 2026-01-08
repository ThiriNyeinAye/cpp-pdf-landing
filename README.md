# A Brief Product Landing Page for IronPDF

## Getting Started

This project is a responsive landing page built from a Figma design using CodeIgniter 4, Bootstrap 5, and modular custom CSS.
Dynamic page content is loaded from a JSON file and passed to views via the controller.

## Tech Stack

- PHP (CodeIgniter 4)
- Bootstrap 5
- Custom CSS

## Features

- Pixel-aligned layout based on Figma
- Responsive across mobile/tablet/desktop
- JSON-driven content (simulated data source)
- Semantic HTML + accessibility improvements (skip link, labels, alt text)

## Project Structure

- `app/Controllers` - controllers (routing + data)
- `app/Views` - layouts and pages
- `app/Data/page.json` - simulated content source
- `public/assets` - CSS/JS/images

## Setup Instructions

1.  **Clone the Repository:**

```bash
git clone https://github.com/ThiriNyeinAye/cpp-pdf-landing.git
cd cpp-pdf-landing
```

2. Install dependencies (if using Composer):
   - `composer install`
3. Start local server:
   - `php spark serve`
4. Open in browser:
   - `http://localhost:8080/`

## QA Notes

See `QA_CHECKLIST.md` for validation steps (Figma match, responsiveness, Lighthouse, SEO, etc.).
