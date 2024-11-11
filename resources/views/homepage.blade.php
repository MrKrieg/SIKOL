<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Kedai Omah Londo</title>
    <link rel="stylesheet" href="css/homepage.css">
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <div class="navbar">
            <img src="img/logo.png" alt="Kedai Omah Londo" class="logo">
            <button class="menu-toggle" onclick="toggleMenu()">☰</button>
            <nav class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#login">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="text-overlay">
            <h1>Kedai Omah Londo</h1>
            <p>Kedai bernuansa penjajahan belanda terbaik di kota Malang</p>
            <a href="#order" class="order-button">Order Here</a>
        </div>
    </section>
    <div id="overlay" onclick="toggleMenu()"></div>
    <div class="carousel rounded-box w-64">
        <div class="carousel-item w-full">
          <img
            src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp"
            class="w-full"
            alt="Tailwind CSS Carousel component" />
        </div>
        <div class="carousel-item w-full">
          <img
            src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp"
            class="w-full"
            alt="Tailwind CSS Carousel component" />
        </div>
        <div class="carousel-item w-full">
          <img
            src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp"
            class="w-full"
            alt="Tailwind CSS Carousel component" />
        </div>
        <div class="carousel-item w-full">
          <img
            src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp"
            class="w-full"
            alt="Tailwind CSS Carousel component" />
        </div>
        <div class="carousel-item w-full">
          <img
            src="https://img.daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.webp"
            class="w-full"
            alt="Tailwind CSS Carousel component" />
        </div>
        <div class="carousel-item w-full">
          <img
            src="https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.webp"
            class="w-full"
            alt="Tailwind CSS Carousel component" />
        </div>
        <div class="carousel-item w-full">
          <img
            src="https://img.daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.webp"
            class="w-full"
            alt="Tailwind CSS Carousel component" />
        </div>
      </div>

</body>
</html>
