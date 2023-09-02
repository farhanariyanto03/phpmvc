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
    <title><?php echo $data['judul']; ?></title>
</head>

<body>
    <!-- AWAL ABOUT -->
    <section class="about">
        <div class="container">
            <div class="box-about">
                <div class="box" data-aos="fade-right" data-aos-duration="1000">
                    <h1>Gunung di Duni</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa consectetur ex accusamus
                        perferendis laudantium eligendi labore ducimus,
                        quos quae cumque officiis minima magni, a laboriosam id odit, nostrum fugiat similique?
                    </p>
                </div>
                <div class="box">
                    <img src="http://localhost/phpmvc/public/image/1.jpg" alt="" data-aos="fade-left" data-aos-duration="1000">
                </div>
            </div>
        </div>
    </section>
    <!-- AKHIR ABOUT -->

    <!-- AWAL FAMOUS -->
    <section class="famous">
        <div class="container">
            <div class="box-famous">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <img src="http://localhost/phpmvc/public/image/everest-famous.jpg" alt="">
                    <h1>Everest Mountain</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio labore maxime sint earum ea!
                    </p>
                </div>
                <div class="box" data-aos="zoom-in" data-aos-delay="300">
                    <img src="http://localhost/phpmvc/public/image/fuji-famous.jpg" alt="">
                    <h1>Everest Mountain</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio labore maxime sint earum ea!
                    </p>
                </div>
                <div class="box" data-aos="zoom-in" data-aos-delay="500">
                    <img src="http://localhost/phpmvc/public/image/k2-famous.jpg" alt="">
                    <h1>Everest Mountain</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio labore maxime sint earum ea!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- AKHIR FAMOUS -->

    <!-- AWAL GALLERY -->
    <section class="gallery">
        <div class="container">
            <div class="box-gallery">
                <img src="http://localhost/phpmvc/public/image/1.jpg" alt="" data-aos="zoom-in" data-aos-delay="100">
                <img src="http://localhost/phpmvc/public/image/2.jpg" alt="" data-aos="zoom-in" data-aos-delay="300">
                <img src="http://localhost/phpmvc/public/image/3.jpg" alt="" data-aos="zoom-in" data-aos-delay="500">
                <img src="http://localhost/phpmvc/public/image/4.jpg" alt="" data-aos="zoom-in" data-aos-delay="700">
                <img src="http://localhost/phpmvc/public/image/5.jpg" alt="" data-aos="zoom-in" data-aos-delay="900">
                <img src="http://localhost/phpmvc/public/image/6.jpg" alt="" data-aos="zoom-in" data-aos-delay="1100">
            </div>
        </div>
    </section>
    <!-- AKHIR GALLERY -->

    <!-- AWAL CONTACT -->
    <section class="contact">
        <div class="container">
            <div class="box-contact">
                <h1 data-aos="fade-right" data-aos-duration="1000">CONTACT</h1>
                <form action="" data-aos="zoom-in-left" data-aos-duration="1000">
                    <table>
                        <tr>
                            <td><label for="nama">Nama Lengkap</label></td>
                            <td><input type="text" name="" id="nama" placeholder="Masukkan Nama" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td><input type="text" name="" id="Email" placeholder="Masukkan Email" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="pesan">Pesan</label></td>
                            <td><textarea name="" id="pesan" placeholder="Masukkan Pesan"
                                    autocapitalize="off"></textarea></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
    <!-- AKHIR CONTACT -->

    <!-- AWAL FOOTER -->
    <footer>
        <p>&copy; 2023 by Farhan Ariyanto</p>
    </footer>
    <!-- AKHIR FOOTER -->