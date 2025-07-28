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


See [Vulnerabilities Included](#vulnerabilities-included) for payloads, example URLs, and how to prevent each flaw.


🧪 Default Credentials

Admin: admin
Password: admin

User1: michael
Password: michael

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



## 🔍 Vulnerabilities Included

This app includes several intentionally insecure features for training purposes. Here are examples, how to trigger them, and how to prevent them:

### 1. SQL Injection
- **Example Payload:** `admin' --`
- **Prevention:** Use prepared statements with parameterized queries to sanitize inputs and block SQL injection.

### 2. Stored Cross-Site Scripting (XSS)
- **Payload:** `<script>alert("XSS");</script>`
- **Prevention:** Escape output with `htmlspecialchars()` and validate/sanitize inputs to reject scripts.

### 3. Broken Access Control
- **Example:** Visit `http://localhost:8000/users.php` without logging in.
- **Bonus:** `robots.txt` exposes paths like `/users.php`, `/uploads/`
- **Prevention:** Add session checks to protect sensitive pages. Avoid listing sensitive routes in `robots.txt`.

### 4. Unrestricted File Upload
- **Example Upload:** `info.php`
- **Test URL:** `http://localhost:8000/uploads/info.php`
- **Prevention:** Validate file types, use `basename()` to block directory traversal, and store uploads outside the web root.

### 5. Remote Code Execution (RCE)
- **Example Upload:** `shell.php`
- **Test URL:** `http://localhost:8000/uploads/shell.php?cmd=dir`
- **Prevention:** Disable PHP execution in upload folders (e.g. via `.htaccess`), sanitize user input, and avoid using `eval()` or `system()` on raw data.

### 6. Insecure Direct Object Reference (IDOR)
- **Example:** `http://localhost:8000/profile.php?id=1`
- **Prevention:** Verify user ownership with session checks before exposing data tied to IDs. Prefer indirect references.

### 7. Sensitive Data Exposure
- **Example:** `http://localhost:8000/login.php?username=admin&password=admin`
- **Prevention:** Use `method="POST"` instead of GET for forms. Never log plaintext passwords. Hash with `password_hash()`.
