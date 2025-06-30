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
