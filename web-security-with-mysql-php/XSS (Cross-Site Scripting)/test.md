# Demo XSS (Cross-Site Scripting)

1. Tạo dữ liệu
2. Tạo file `index.php`
3. Tạo file `reslove.php`
4. Truy cập `index.php` để test XSS
```
<script>alert("Hello! I am an alert box!")</script>
```
5. Truy cập `reslove.php` để xem cách giải quyết XSS