Nette Web Project
=================

Requirements
------------

This Web Project is compatible with Nette 3.2 and requires PHP 8.1.


Installation
------------

Ensure the `temp/` and `log/` directories are writable.

./vendor/nittro/*/NitroUI/Presenter make afterRender(): void

Web Server Setup
----------------

To quickly dive in, use PHP's built-in server:

	php -S localhost:8000 -t www

Then, open `http://localhost:8000` in your browser to view the welcome page.

For Apache or Nginx users, configure a virtual host pointing to your project's `www/` directory.

**Important Note:** Ensure `app/`, `config/`, `log/`, and `temp/` directories are not web-accessible.
Refer to [security warning](https://nette.org/security-warning) for more details.


Minimal Skeleton
----------------

For demonstrating issues or similar tasks, rather than starting a new project, use
this [minimal skeleton](https://github.com/nette/web-project/tree/minimal).
