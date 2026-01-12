# QA Checklist

This document outlines the quality assurance steps I performed to review, test, and validate the frontend implementation against the provided Figma design and project requirements.

---

## 1. Pixel Alignment & Spacing (Figma Comparison)

- [x] Compared layout with Figma at 100% zoom
- [x] Checked grid alignment across sections
- [x] Verified icon, image, and button alignment
- [x] Confirmed border radius, shadows, and gradients
- [x] Ensured no layout shift on initial load

**Tools used:** Figma, Chrome DevTools

---

## 2. Typography Accuracy

- [x] Verified correct font family
- [x] Checked font sizes, weights, and line heights against Figma
- [x] Ensured correct heading hierarchy (H1–H6)
- [x] Verified text alignment and letter spacing

---

## 3. Responsive Behaviour

- [x] Tested layout on desktop (≥1200px)
- [x] Tested tablet breakpoint (~768px)
- [x] Tested mobile breakpoint (≤576px)
- [x] Confirmed no horizontal scrolling
- [x] Verified responsive images and flexible layout
- [x] Tested form usability on mobile

**Tools used:** Chrome DevTools

---

## 4. Cross-Browser Compatibility

- [x] Google Chrome (latest)
- [x] Mozilla Firefox (latest)
- [x] Safari

---

## 5. SEO Validation (Metadata, Headings, Alt Tags)

- [x] Page includes a meaningful and unique `<title>`
- [x] Meta description is present and relevant
- [x] Semantic HTML elements used (`header`, `main`, `section`, `footer`)
- [x] All images include descriptive `alt` attributes

---

## 6. Core Web Vitals Considerations

- [x] Optimized hero section for fast rendering
- [x] Defined width and height for images
- [x] Prevented layout movement during load
- [x] Minimized JavaScript execution on load
- [x] Avoided unnecessary third-party scripts

---

## 7. Lighthouse Checks

- [x] Ran Lighthouse audit using Chrome DevTools
- [x] Reviewed Performance score
- [x] Reviewed Accessibility report
- [x] Reviewed SEO recommendations
- [x] Reviewed Best Practices warnings

**Result:** No critical Lighthouse issues identified

---

## 8. Accessibility (Basic)

- [x] Verified sufficient color contrast
- [x] Tested keyboard navigation
- [x] Ensured visible focus states for interactive elements

---
