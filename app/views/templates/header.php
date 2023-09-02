<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/style.css">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <!-- REMIX ICON -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- LINK ANIMATE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- LINK ANIMATE SAAT SCROLL -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Halaman <?php echo $data['judul']; ?></title>
</head>

<body>
    <header>
        <!-- AWAL NAVIGAITON -->
        <section class="navigation">
            <div class="container">
                <div class="box-navigation animate_animated animate__bounceIn">
                    <div class="box">
                        <h1>Logo</h1>
                    </div>
                    <div class="box menu-navigation">
                        <ul>
                            <li>
                                <i class="ri-home-3-line"></i>
                                <a href="http://localhost/phpmvc/public/home/index.php">Beranda</a>
                            </li>
                            <li>
                                <i class="ri-information-line"></i>
                                <a href="http://localhost/phpmvc/public/about/pages">About</a>
                            </li>
                            <li>
                                <i class="ri-dashboard-line"></i>
                                <a href="#">Famous</a>
                            </li>
                            <li>
                                <i class="ri-image-line"></i>
                                <a href="#">Gallery</a>
                            </li>
                            <li>
                                <i class="ri-phone-line"></i>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="box menu-bar">
                        <i class="ri-menu-3-line" style="color: white;"></i>
                    </div>
                </div>
            </div>
        </section>
        <!-- AKHIR NAVIGATION -->

        <!-- AWAL CAROUSEL -->
        <section class="carousel">
            <h1 class="animate__bounceIn">Amazing Mountain yang ada di seluruh Indonesia</h1>
        </section>
        <!-- AKHIR CARAOUSEL -->
    </header>