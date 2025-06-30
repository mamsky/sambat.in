# Sambat.in

sambat.in is a web-based Q&A platform to accommodate complaints (sambatan) about the world of coding, and provide space for others to answer or respond. Similar to Stack Overflow, but more focused on emotional support and solving everyday life problems while coding.

## 📁 Project Structure

```bash
sambat-in/
│
├── 📁 app/
│ ├── 📁 controllers/ ← Logika aplikasi (Controller)
│ │ └── login.controller.php
│ │ └── register.controller.php
│ │
│ ├── 📁 models/ ← Akses database
│ │ └── auth.model.php
│ │
│ ├── 📁 views/ ← Halaman tampilan (View)
│ │ ├── layouts/
│ │ │ └── footer.php
│ │ │ └── navbar.php
│ │ └── home/index.php
│ │ └── auth/login.php
│ │ └── auth/register.php
│ │
│
├── 📁 public/ ← Root akses publik (document root)
│ ├── 📁 images/
│
├── 📁 config/ ← Konfigurasi global
│ └── db.config.php ← Koneksi database (mysql)
│
├── 📁 routes/ ← Jika pakai file routing terpisah (opsional)
│ └── web.php
│
└── index.php ← Root Halaman tampilan

```
