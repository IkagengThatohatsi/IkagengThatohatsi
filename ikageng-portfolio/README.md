# Ikageng Monyanyedi — Portfolio

A responsive, static-content portfolio built with PHP, HTML, CSS, JavaScript and Google Charts.

## Run locally with XAMPP

1. Copy the `ikageng-portfolio` folder into `C:\xampp\htdocs\`.
2. Start **Apache** in the XAMPP Control Panel. MySQL is not required.
3. Visit `http://localhost/ikageng-portfolio/`.

PHP is used to render reusable/static content and pass the chart's hard-coded data to Google Charts. There is **no database**, no login and no form processing. Google Charts and Google Fonts require an internet connection.

## Included

- `index.php` — portfolio sections and PHP-rendered skills/projects/chart data
- `assets/css/style.css` — responsive styling and visual design
- `assets/js/main.js` — mobile navigation, project filters, reveal effects and Google Charts rendering
- `assets/docs/Ikageng-Monyanyedi-CV.pdf` — CV PDF linked from the site

## Before publishing

- Check all contact and social links.
- Keep the CV current before replacing the PDF.
- Add real screenshots/demo links to projects when available. Do not imply that planned projects are already complete.
- Review which contact details you want public before deploying the site.
- The chart counts listed tools by category; it is not a skills proficiency rating.

## Publish

For a live site, use a host that supports PHP. A static-only host that serves HTML but does not execute PHP will not run `index.php` as intended. GitHub Pages does not execute PHP; for that option, the site would need to be converted to HTML and the chart data embedded in JavaScript.
