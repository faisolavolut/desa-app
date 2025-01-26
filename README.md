# Desa App

Aplikasi berbasis Laravel untuk pengelolaan UMKM.

## Langkah Instalasi

1. **Download dan Instal Laragon**
   - Unduh Laragon [di sini](https://laragon.org/download/index.html).
   - Jalankan Laragon, kemudian tambahkan Laragon ke `PATH` sistem Windows agar dapat diakses melalui terminal.

2. **Pergi ke Direktori Laragon**
   Buka terminal dan navigasikan ke direktori:
   ```
   cd C:\laragon\www
   ```

3. **Clone Repositori**
   Clone repositori menggunakan Git:
   ```bash
   git clone https://github.com/faisolavolut/desa-app.git
   cd desa-app
   ```

4. **Install Dependencies**
   Jalankan perintah berikut untuk menginstal semua dependency Laravel:
   ```bash
   composer install
   ```

5. **Konfigurasi File `.env`**
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```

   Edit file `.env` dengan konfigurasi berikut:
   ```
   APP_NAME=Desa
   APP_ENV=local
   APP_DEBUG=true
   APP_TIMEZONE=UTC
   APP_URL=http://127.0.0.1:8000

   MONEY_DEFAULT_LOCALE=id_ID
   MONEY_DEFAULT_CURRENCY=IDR
   MONEY_DECIMAL_DIGITS=2
   MONEY_USE_INPUT_MASK=true 

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=desa
   DB_USERNAME=root
   DB_PASSWORD=root
   ```

6. **Generate Key Aplikasi**
   Jalankan perintah berikut untuk membuat `APP_KEY`:
   ```bash
   php artisan key:generate
   ```

7. **Setup Database**
   - Buka database MySQL.
   - Buat schema baru dengan nama `desa`.
   - Import file `desa.sql` ke dalam schema menggunakan phpMyAdmin atau perintah MySQL.

8. **Jalankan Server**
   Jalankan server Laravel menggunakan:
   ```bash
   php artisan serve
   ```

9. **Akses Aplikasi**
   Akses aplikasi melalui browser di alamat:
   ```
   http://127.0.0.1:8000
   

```

---

## Notes
- Ensure that you have PHP, Composer, and MySQL installed and properly configured.
- If using Laragon, ensure Laragon is running before starting the server.

---

### Common Issues
1. **Missing Dependencies**:
   - Run `composer install` again to ensure all dependencies are installed.
2. **Database Connection Errors**:
   - Verify the `.env` file has the correct database credentials.
3. **Permission Issues**:
   - Ensure proper write permissions for the `storage` and `bootstrap/cache` directories:
     ```bash
     chmod -R 775 storage bootstrap/cache
     
