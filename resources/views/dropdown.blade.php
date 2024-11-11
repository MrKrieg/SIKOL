<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Kedai Omah Londo</title>
    <link rel="stylesheet" href="css/home.css"> <!-- Linking the CSS file -->
</head>

<body>
    <header>
        <div class="hamburger" id="hamburger-menu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="dropdown-menu" id="dropdown-menu">
            <a href="#">Home</a>
            <a href="#">Menu</a>
            <a href="#">About Us</a>
            <a href="#">Log in</a>
        </div>
    </header>

    <script>
        // JavaScript untuk toggle menu dropdown
        const hamburgerMenu = document.getElementById('hamburger-menu');
        const dropdownMenu = document.getElementById('dropdown-menu');

        // Pastikan menu tersembunyi saat halaman dimuat pertama kali
        dropdownMenu.style.display = 'none';

        hamburgerMenu.addEventListener('click', () => {
            // Toggle antara 'block' dan 'none'
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        // Menutup menu jika pengguna mengklik di luar area menu
        document.addEventListener('click', (event) => {
            if (!hamburgerMenu.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.style.display = 'none';
            }
        });
    </script>
</body>
</html>
