<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,regular,500,600,700,800,300italic,italic,500italic,600italic,700italic,800italic" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" />
    <!-- Local CSS -->
    <link rel="stylesheet" href="{{ asset('css/styledb.css') }}"/>
    <title>Skill Forge</title>
</head>
<body>
    <header id="header" class="header sticky-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <h3 class="nav-title">Skill Forge</h3>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav-link" href="#">Tentang</a></li>
                    <li><a class="nav-link" href="#">Keunggulan</a></li>
                    <li><a class="nav-link" href="#">Testimoni</a></li>
                    <li><a class="nav-link" href="#">Mulai Diskusi</a></li>
                    <li class="d-flex align-items-center">
                        <a class="nav-link" href="{{ url('login') }}">LOGIN</a>
                        <a class="getstarted" href="{{ url('register') }}">SIGN UP</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1>Mulailah Berdiskusi bersama SkillForge</h1>
                    <p class="hero-paragraph text-muted">Diskusi seputar hard skill & soft skill dari para expert jadi lebih mudah</p>
                    <div>
                        <div class="cta-btn-container align-items-center text-center text-lg-start">
                            <a href="#" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">Mulai Diskusi</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img">
                    <img src="{{ asset('img/img-banner.svg') }}" class="img-fluid" alt="Vector Hero"/>
                </div>
            </div>
        </div>
    </section>

    <section class="facts">
        <div class="container d-flex justify-content-center flex-column align-items-center">
            <h1>What is SkillForge</h1>
            <hr class="line line-tertiary" />
            <p class="text-center">
                SkillForge adalah platform diskusi yang dapat menghubungkan mahasiswa
                yang ingin mengembangkan <span class="fw-bold text-tertiary">hard skill</span> &
                <span class="fw-bold text-primary">soft skill</span> dengan para ahli
                sehingga dapat meningkatkan skill yang dimiliki
            </p>
        </div>
    </section>

    <section id="problem" class="problem">
        <div class="container d-flex justify-content-center flex-column align-items-center">
            <h1>Benefit</h1>
            <hr class="line line-secondary" />
            <div class="d-flex justify-content-center">
                <div class="box">
                    <img src="{{ asset('simg/comment-discussion.svg') }}" class="img-fluid" style="width: 108px" alt=""/>
                    <h5 class="fw-bold fs-3">Diskusi</h5>
                    <p>dengan sesama mahasiswa yang memiliki minat yang sama</p>
                </div>

                <div class="box">
                    <img src="{{ asset('img/group.svg') }}" class="img-fluid" style="width: 108px" alt="Diskusi"/>
                    <h5 class="fw-bold fs-3">Komunikasi dengan Expert</h5>
                    <p>Berinteraksi dengan expert di bidangnya untuk memperoleh informasi yang dalam dan relevan dengan dunia nyata</p>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial">
        <div class="d-flex align-items-center flex-column mb-5">
            <h1>Testimoni</h1>
            <hr class="line line-primary" />
        </div>
        <div class="bg-testimonial">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow-sm p-3 rounded-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('img/profile.jpg') }}" class="img-fluid rounded-circle" style="width: 80px" alt="Avatar"/>
                                <div>
                                    <p class="my-0" style="font-weight: 700">Billy</p>
                                    <p class="my-0 fst-italic" style="font-weight: 700">24 tahun, Mahasiswa</p>
                                </div>
                            </div>
                            <p class="card-text fst-italic mt-3">
                                Saya benar-benar mendapat banyak sekali insight ketika berdiskusi di SkillForge. Website yang mudah digunakan, membuat saya semangat
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm p-3 rounded-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('img/profile.jpg') }}" class="img-fluid rounded-circle" style="width: 80px" alt="Avatar"/>
                                <div>
                                    <p class="my-0" style="font-weight: 700">Rudy</p>
                                    <p class="my-0 fst-italic" style="font-weight: 700">20 tahun, Mahasiswa</p>
                                </div>
                            </div>
                            <p class="card-text fst-italic mt-3">
                                Senang sekali bisa berdiskusi bersama teman-teman yang memiliki minat yang sama dengan saya, sehingga saya dapat memperoleh ilmu baru
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="discussion">
        <div class="container d-flex justify-content-center flex-column align-items-center">
            <h1>Mulai Diskusi di <span class="text-primary">Skill Forge</span></h1>
            <button class="btn-discussion">Mulai Diskusi</button>
        </div>
    </section>

    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3 col-7 footer-info">
                        <div class="col-lg-10 col-md-5 mx-auto footer-left">
                            <a href="{{ url('/') }}" class="nav-title">Skill Forge</a>
                            <p>Platform diskusi hard skill & soft skill.</p>
                            <p>&copy; 2024 - Skill Forge Company</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Tentang</h4>
                        <ul>
                            <li><a href="#">Tentang kami</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Alamat</a></li>
                            <li><a href="#">Kebijakan Privasi</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Fitur</h4>
                        <ul>
                            <li><a href="#">Komunitas</a></li>
                            <li><a href="#">Pertanyaan</a></li>
                            <li><a href="#">Jawaban</a></li>
                            <li><a href="#">Artikel</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Kerja Sama</h4>
                        <ul>
                            <li><a href="#">Skillshare</a></li>
                            <li><a href="#">Hacktiv8</a></li>
                            <li><a href="#">Coding Studio</a></li>
                            <li><a href="#">Dicoding</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-lg-start">
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
