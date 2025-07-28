# Amazin – Vulnerable E-commerce Web App

**Amazin** is a deliberately insecure PHP-based storefront built for hands-on security testing and learning.

It mimics a real online store and includes common web vulnerabilities:

- SQL Injection (SQLi)
- Cross-Site Scripting (XSS)
- Insecure Direct Object References (IDOR)
- Broken Access Control
- CSRF
- Weak authentication

> ⚠️ This app is intentionally vulnerable. Do **not** expose it to the internet or use it in production.

---

## 🔧 Setup (PHP + SQLite)

1. Install PHP for your OS.
2. Enable SQLite extensions:
   - Open `php.ini` (e.g. `C:\php\php.ini`)
   - Uncomment or add:

     ```
     extension=pdo_sqlite
     extension=sqlite3
     ```

3. Run the app locally:

```bash
php -S localhost:8000

Then open http://localhost:8000 in your browser.


🧪 Default Credentials

Admin: admin
Password: admin

User1: micheal
Password: micheal

User2: john
Password: john


⚠️ Known Limitations
• The UI is not responsive.
• Works properly only on 1920x1080 (Full HD) screens.
• May break on smaller or mobile displays.


📛 Legal
• This project is not affiliated with Amazon.
• Logos, names, and branding have been replaced with parody versions.
• For ethical, educational use only.
