# PHP Routes

A minimal, file-based PHP routing example for small static-like sites.

## Overview

This project demonstrates a simple routing pattern using a single entry point (`index.php`) that includes page files (e.g. `home.php`, `about.php`, `contact.php`) and falls back to `404.php` when a route is not found. Shared helpers live in `fonctions.php`.

## Requirements

- PHP 7.4 or newer

## Quick start

From the project root run the built-in PHP server for local testing:

```bash
php -S localhost:8000
```

Then open http://localhost:8000 in your browser.

## Files

- `index.php` — central router / front controller
- `home.php` — homepage
- `about.php` — about page
- `contact.php` — contact page
- `404.php` — not-found page
- `fonctions.php` — shared helper functions

## Routing behavior

`index.php` examines the request URI and maps it to a corresponding PHP file in the project root. Examples:

- `/` or `/home` -> `home.php`
- `/about` -> `about.php`
- unknown paths -> `404.php`

To add a new page, create a new PHP file (for example `blog.php`) and update the routing logic in `index.php` to include it for the desired path.

## Helpers

Use `fonctions.php` for reusable functions like rendering templates, sanitizing output, or loading partials. Include or require it from `index.php` or from individual page files as needed.

## Deployment notes

- For production, serve the site with Apache or Nginx and point the document root at the project folder (or route all requests to `index.php` via rewrite rules).
- Disable display_errors and enable appropriate error logging in `php.ini`.

## Contributing

Small improvements are welcome — open an issue or submit a PR.

## License

This repository is provided under the MIT License (or change to your preferred license).

---

If you want this README in French or want me to add example code snippets from `index.php`, tell me which language and I’ll update it.
