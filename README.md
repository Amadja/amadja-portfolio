# Amadja Makutsa David — Portfolio Website

A responsive, single-page PHP portfolio using PHP, MySQL, HTML, CSS and vanilla JavaScript.

## Included
- Responsive corporate design (white, navy and blue)
- About, expertise, projects, experience, education and contact sections
- Mobile navigation and subtle scroll reveal effects
- Contact form with server-side validation, CSRF token, honeypot and PDO prepared statement
- MySQL table for storing enquiries

## Requirements
- PHP 8.0+ (PHP 8.1+ recommended)
- MySQL 5.7+ / MariaDB
- PHP PDO MySQL extension
- Apache hosting (e.g. Namecheap cPanel)

## Local setup (XAMPP)
1. Extract the folder into `C:\xampp\htdocs\amadja-portfolio`.
2. Start Apache and MySQL from XAMPP.
3. Open phpMyAdmin and create a database, for example `amadja_portfolio`.
4. Select the database and import `database.sql`.
5. Copy `config.php` to `config.local.php`.
6. Edit `config.local.php` with your local database name, username and password. For a standard XAMPP installation, the username is often `root` and the password is blank.
7. Visit `http://localhost/amadja-portfolio/`.

## Deploy to Namecheap cPanel
1. In cPanel, create a MySQL database, database user and password. Assign the user **all privileges** to that database.
2. Open phpMyAdmin, select the new database and import `database.sql`.
3. On your computer, copy `config.php` to `config.local.php` and enter the cPanel database host, database name, username and password.
4. Upload the project files and folders into the domain's document root (commonly `public_html/`).
5. Upload `config.local.php` into the project root. Keep it private; the supplied `.htaccess` blocks direct web access to configuration files.
6. Enable SSL/HTTPS in cPanel and test the site and contact form.
7. Delete any temporary setup files after deployment.

## Important personalization checks
- Confirm the phone numbers and email address are current.
- Confirm the exact official titles and dates for each role.
- Confirm the degree title and institution details match your certificates.
- Project descriptions are based on the supplied CV. Keep planned features clearly marked as in development until implemented.
- The contact form saves messages in the database; it does not send email notifications. Add SMTP integration if you want notifications in your inbox.
- Add a PDF CV and update the hero button if you want a direct CV download.
- Consider adding a privacy notice if you collect and retain enquiries.

## Project structure
```text
amadja-portfolio/
├── assets/
│   ├── script.js
│   └── style.css
├── includes/
│   └── bootstrap.php
├── config.php
├── contact.php
├── database.sql
├── index.php
├── .htaccess
└── README.md
```
