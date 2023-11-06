<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/profileETS/styleETS.css')}}">
    <link class="logoweb" rel="shortcut icon" type="x-icon" href="{{asset('assets/profileETS/logoweb1.png')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter&family=IBM+Plex+Sans&family=Nunito:wght@500&display=swap" rel="stylesheet">

    <title>WEB-NYA WEDE</title>
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand mb-0 h1 fw-bold" href="#home">
                    <img class="d-inline-block align-top" src="{{asset('assets/profileETS/logoweb.png')}}" width="30" height="30">
                    Wede
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutme">About Me </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#galleryofme" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Gallery
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#elementarysch">Elementary</a></li>
                                <li><a class="dropdown-item" href="#juniorsch">Junior High</a></li>
                                <li><a class="dropdown-item" href="#seniorsch">Senior High</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactme">Contact Me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- homepage -->
    <div class="homepage" id="home">
        <div class="overlay d-flex flex-column justify-content-center align-items-center">
            <h1>Selamat datang guys di <span class="fw-bolder">WebDe,</span></h1>
            <h2> Let's get to know me! </h2>
        </div>
    </div>

    <!-- aboutme -->
    <div class="row AboutMe bg-dark-subtle" id="aboutme">
        <div class="col-sm-5 aboutmephoto text-center">
            <img src="{{asset('assets/profileETS/aboutme1.png')}}" alt="Foto Kang Vila" title="Foto Kang Vila">
        </div>
        <div class="col-sm-6 kontenaboutme">
            <h2> About Moiself</h2>
            <p>
                Hi, I'm Muhammad Rafi Widya Danendra, a 19-year-old soon to be 20 based in Kos Darrell.
                I'm passionate about having a carefree life a.k.a. goofing off.
            </p>
            <p>
                I'm college student from Institut Teknologi Sepuluh Nopember with a major in Information Systems.
            </p>
            <h3>Here's a little bit of personal information of me :</h3>

            <ul class="list-group">
                <li class="list-group-item">
                    Nickname : Wede
                </li>
                <li class="list-group-item">
                    Birthday : 25th October 2003
                </li>
                <li class="list-group-item">
                    Birthplace : Jakarta
                </li>
                <li class="list-group-item">
                    Recent Most Enjoyable Song :
                </li>
                <iframe style="border-radius:12px"
                    src="https://open.spotify.com/embed/track/7J0isBrUxhIYZVdrBOOlIh?utm_source=generator" width="100%"
                    height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
            </ul>
        </div>
        <div class="col-sm-1"></div>
    </div>

    <!-- gallery -->
    <div class="gallery container-fluid row" id="galleryofme">

        <div class="col-sm-2"></div>

        <div class="col-sm-8">
            <div>
                <h2 class="bgh2">Gallery of My Memories</h2>
            </div>

            <div>
                <h2>Elementary School</h2>
            </div>

            <div id="demo" class="carousel slide carouselcustom " data-bs-ride="carousel">
                <div id="elementarysch">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('assets/profileETS/parcel.jpg')}}" alt="Bikin Parcel" title="Bikin Parcel" class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>Bikin Parcel pas Ramadhan</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/profileETS/taekwondokebali.jpg')}}" alt="Lomba Taekwondo ke Bali"
                                title="Lomba Taekwondo ke Bali" class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>Juara 3 Lomba Taekwondo di Bali</h3>
                                <p>Harusnya bisa juara 1 kalo ngga karena mual makan ayam betutu yang pedes banget</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/profileETS/nontonsoekarno.jpg')}}" alt="Nonton Bareng Soekarno"
                                title="Nonton Bareng Soekarno" class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>Nonton Bareng Film Soekarno</h3>
                                <p>Sedih harus balik di tengah film karena ada les</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/profileETS/pramukasd.jpg')}}" alt="Pramuka Camping" title="Pramuka Camping"
                                class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>Perkemahan Pramuka SD</h3>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <div>
                <h2>Junior High School</h2>
            </div>

            <div id="demo1" class="carousel slide" data-bs-ride="carousel">
                <div id="juniorsch">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo1" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo1" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo1" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#demo1" data-bs-slide-to="3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('assets/profileETS/pameranlukisan1.jpg')}}" alt="Pameran Lukisan SMP" title="Pameran Lukisan SMP"
                                class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>Pameran Lukisan Kelas 7</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/profileETS/foto kelas 8.jpg')}}" alt="Foto Kelas 8" title="Foto Kelas 8"
                                class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>Foto Kelas 8</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/profileETS/yearbooksmp1.jpg')}}" alt="Yearbook SMP" title="Yearbook SMP"
                                class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>Yearbook SMP</h3>
                                <p>Temanya colorful jadi warna warni lucu tapi struggle banget nyari baju colorful</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/profileETS/gowessmp.jpg')}}" alt="Wisuda SMP" title="Wisuda SMP" class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>Wisuda SMP</h3>
                                <p>Foto wisuda bareng temen-temen sepedaan pas smp</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#demo1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo1" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <div>
                <h2>Senior High School</h2>
            </div>

            <div id="demo2" class="carousel slide" data-bs-ride="carousel">
                <div id="seniorsch">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo2" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#demo2" data-bs-slide-to="3"></button>
                        <button type="button" data-bs-target="#demo2" data-bs-slide-to="4"></button>
                        <button type="button" data-bs-target="#demo2" data-bs-slide-to="5"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('assets/profileETS/mplsmht.jpg')}}" alt="MPLS MHT" title="MPLS MHT" class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>Masa Pengenalan Lingkungan Sekolah di MHT</h3>
                                <p>Ini foto setelah selesai MPLS dan Athallah jadi peserta terbaik</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/profileETS/sertijabmht.jpg')}}" alt="Pembawa Bendera Sertijab OSISPK"
                                title="Pembawa Bendera Sertijab OSISPK" class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>Sertijab OSISPK MHT</h3>
                                <p>Jadi pembawa pendera saat pelantikan OSISPK baru di MHT</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/profileETS/leobaskettoc.jpg')}}" alt="LO & EO Basket TOC" title="LO & EO Basket TOC"
                                class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>LO & EO Basket TOC</h3>
                                <p>Di sini aku jadi LO basket putra, Kina jadi LO basket putri, Yafi jadi EO-nya</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/profileETS/pbb.jpg')}}" alt="PBB" title="PBB" class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>Persekutuan &lt;redacted&gt; </h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/profileETS/fotoangkatanmht.jpg')}}" alt="Foto Angkatan pas COVID"
                                title="Foto Angkatan pas COVID" class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>Foto Angkatan MHT 11</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/profileETS/pbb lulus.jpg')}}" alt="PBB pas Wisuda" title="PBB pas Wisuda"
                                class="d-block w-100">
                            <div class="carousel-caption carouseloverlay">
                                <h3>PBB Wisuda</h3>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-sm-2"></div>

    </div>

    <!-- contactform -->
    <div class="container contactform" id="contactme">
        <form action="" onSubmit="sendMessage(); reset(); return false">
            <h2>Contact Me!</h2>
            <h3>Name :</h3>
            <input type="text" id="name" placeholder="Your Name Here">
            <h3>NRP :</h3>
            <input type="number" id="nrp" placeholder="Your NRP Here">
            <h3>E-mail :</h3>
            <input type="text" id="email" placeholder=" Your E-mail Here">
            <h3>Phone Number :</h3>
            <input type="number" id="numphone" placeholder=" Your Phone Number Here">
            <h3>Message :</h3>
            <textarea type="text" id="message" rows="4" placeholder="Your Message Here"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- footer -->
    <div class="container-fluid footerstyle pt-3">
        <div class="container row">
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <h4>Jalan Marina Emas Barat VII No.33, Keputih, Kecamatan Sukolilo, Surabaya, Jawa Timur 60111
            </div>

            <div class="col-sm-6 text-end">
                <a style="text-decoration: none;" href="https://www.instagram.com/rafiwd/" target="_blank">
                    <img src="{{asset('assets/profileETS/instagram.svg')}}" width="30" height="30" style="margin-right: 30px;">
                </a>
                <a style="text-decoration: none;"
                    href="https://api.whatsapp.com/send/?phone=6281219181920&text&type=phone_number&app_absent=0" target="_blank">
                    <img src="{{asset('assets/profileETS/whatsapp.svg')}}" width="30" height="30" style="margin-right: 30px;">
                </a>
                <a style="text-decoration: none;"
                    href="https://open.spotify.com/user/085774006694?si=ee45a9cfca3a49c9" target="_blank">
                    <img src="{{asset('assets/profileETS/spotify.svg')}}" width="30" height="30" style="margin-right: 30px;">
                </a>

                <div class="col-sm-1"></div>
            </div>
        </div>
        <div class="container-fluid copyright text-center" style="padding: 30px;">
            <h6 class="text-dark">Copyright&copy; 2023. Muhammad Rafi Widya Danendra</h6>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/profileETS/scriptETS.js')}}"></script>
</body>






</html>
