project-root/
│
├── 📁 app/
│ ├── 📁 controllers/ ← Logika aplikasi (Controller)
│ │ └── HomeController.php
│ │ └── UserController.php
│ │
│ ├── 📁 models/ ← Akses database & logika bisnis (Model)
│ │ └── User.php
│ │
│ ├── 📁 views/ ← Halaman tampilan (View)
│ │ ├── layouts/
│ │ │ └── header.php
│ │ │ └── footer.php
│ │ └── home/index.php
│ │ └── user/profile.php
│ │
│ └── 📁 core/ ← Class inti MVC (router, controller base, dll)
│ └── App.php ← Routing utama
│ └── Controller.php ← Base Controller
│ └── Model.php ← Base Model
│ └── Database.php ← Koneksi database (PDO)
│
├── 📁 public/ ← Root akses publik (document root)
│ ├── 📁 css/
│ ├── 📁 js/
│ ├── 📁 images/
│ └── index.php ← Entry point aplikasi
│
├── 📁 config/ ← Konfigurasi global
│ └── config.php ← Konfigurasi database, base URL, dll
│
├── 📁 storage/ ← Tempat file upload atau cache
│ └── logs/
│
├── 📁 routes/ ← Jika pakai file routing terpisah (opsional)
│ └── web.php
│
└── .htaccess ← Redirect semua ke `public/index.php` (untuk Apache)
