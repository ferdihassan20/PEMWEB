<!DOCTYPE html>
<html lang="id">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- Google Font -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link
			href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
			rel="stylesheet"
		/>
		<!-- Bootstrap CSS -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css"
		/>
		<!-- Local CSS -->
        <link rel="stylesheet" href="{{ asset('css/styleCommunity.css') }}" />
		<title>Community | Skill Forge</title>
	</head>
	<body>
		<header class="header sticky-top">
			<div class="container-fluid container-xl d-flex align-items-center gap-3">
				<a href="." class="logo d-flex align-items-center">
					<h3 class="nav-title">Skill Forge</h3>
				</a>
				<nav id="navbar" class="navbar">
					<ul>
                        <li>
                            <a href="{{route('home')}}">
                                <img src="{{ asset('img/icon_home_.svg') }}" alt="" class="icon" />
                            </a>    
                        </li>
                        <li>
                            <a href="">
                                <img src="{{ asset('img/quill_paper.svg') }}" alt="" class="icon" />
                            </a>
                        </li>
                        <li>
                            <a href="{{route('community')}}">
                                <img src="{{ asset('img/iconoir_community.svg') }}" alt="" class="icon" />
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="{{ asset('img/clarity_notification-solid.svg') }}" alt="" class="icon" />
                            </a>
                        </li>
					</ul>
					<div class="search-container">
						<img src="{{ asset('img/mingcute_search-3-line.svg') }}" class="icon-search" />
						<input type="text" placeholder="Jelajahi" />
					</div>
					<ul>
						<li>
							<img src="{{ asset('img/user_icon.svg') }}" class="icon" />
						</li>
						<li>
							<button class="btn-question">Tambahkan Pertanyaan</button>
						</li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</nav>
			</div>
		</header>
		<section class="my-4">
			<div class="container px-5 bg-white py-4 rounded-3">
				<h1 class="fs-2 fw-bold">Selamat Datang di Komunitas!</h1>
				<p class="fw-light fs-5">
					Jadikan komunitas sebagai ruang untuk eksplorasi dan meningkatkan
					pengetahuan serta keahlianmu dengan berbagi cerita di Komunitas
					SkillForge.
				</p>
				<div class="d-flex gap-3">
					<button class="btn btn-community join">Buat Komunitas</button>
					<button class="btn btn-community search">Cari Komunitas</button>
				</div>
			</div>
		</section>
		<section class="community my-4">
			<div class="container">
				<h1 class="fs-3">Rekomendasi Komunitas Untukmu!</h1>
				<div class="card-container">
					<p class="fw-bold fs-5">SoftSkills - Keterampilan Intrapersonal</p>
					<div class="d-flex gap-3">
						<div class="card bg-tertiary" style="width: 18rem">
							<p class="card-header mx-auto">Public Speaking</p>
							<img src="{{ asset('img/img-card-1.png') }}" class="card-img-top" alt="SoftSkills - Keterampilan Intrapersonal" />
							<div class="card-body">
								<h5 class="card-title">Lorem Ipsum</h5>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Ipsum facilis eveniet ab, et at iure?
								</p>
								<div class="d-flex justify-content-end">
									<button class="btn btn-join">Bergabung</button>
								</div>
							</div>
						</div>
						<div class="card bg-primary" style="width: 18rem">
							<p class="card-header mx-auto">Communication</p>
							<img src="{{ asset('img/img-card-2.png') }}" class="card-img-top" alt="SoftSkills - Keterampilan Intrapersonal" />
							<div class="card-body">
								<h5 class="card-title">Lorem Ipsum</h5>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Ipsum facilis eveniet ab, et at iure?
								</p>
								<div class="d-flex justify-content-end">
									<button class="btn btn-join">Bergabung</button>
								</div>
							</div>
						</div>
						<div class="card bg-tertiary" style="width: 18rem">
							<p class="card-header mx-auto">Leadership</p>
							<img src="{{ asset('img/img-card-3.png') }}" class="card-img-top" alt="SoftSkills - Keterampilan Intrapersonal" />
							<div class="card-body">
								<h5 class="card-title">Lorem Ipsum</h5>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Ipsum facilis eveniet ab, et at iure?
								</p>
								<div class="d-flex justify-content-end">
									<button class="btn btn-join">Bergabung</button>
								</div>
							</div>
						</div>
						<div class="card bg-primary" style="width: 18rem">
							<p class="card-header mx-auto">Life & Lessons</p>
							<img src="{{ asset('img/img-card-4.png') }}" class="card-img-top" alt="SoftSkills - Keterampilan Intrapersonal" />
							<div class="card-body">
								<h5 class="card-title">Lorem Ipsum</h5>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Ipsum facilis eveniet ab, et at iure?
								</p>
								<div class="d-flex justify-content-end">
									<button class="btn btn-join">Bergabung</button>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-center gap-1 my-3">
						<p class="m-0">View More</p>
						<i class="bi bi-chevron-down"></i>
					</div>
				</div>
				<div class="card-container">
					<p class="fw-bold fs-5">HardSkills - Keterampilan Diri</p>
					<div class="d-flex gap-3">
						<div class="card bg-tertiary" style="width: 18rem">
							<p class="card-header mx-auto">UI/UX Design</p>
							<img src="{{ asset('img/img-card-5.png') }}" class="card-img-top" alt="HardSkills - Keterampilan Diri" />
							<div class="card-body">
								<h5 class="card-title">Lorem Ipsum</h5>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Ipsum facilis eveniet ab, et at iure?
								</p>
								<div class="d-flex justify-content-end">
									<button class="btn btn-join">Bergabung</button>
								</div>
							</div>
						</div>
						<div class="card bg-primary" style="width: 18rem">
							<p class="card-header mx-auto">Programming</p>
							<img src="{{ asset('img/img-card-6.png') }}" class="card-img-top" alt="HardSkills - Keterampilan Diri" />
							<div class="card-body">
								<h5 class="card-title">Lorem Ipsum</h5>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Ipsum facilis eveniet ab, et at iure?
								</p>
								<div class="d-flex justify-content-end">
									<button class="btn btn-join">Bergabung</button>
								</div>
							</div>
						</div>
						<div class="card bg-tertiary" style="width: 18rem">
                        <p class="card-header mx-auto">Data Science</p>
							<img src="{{ asset('img/img-card-7.png') }}" class="card-img-top" alt="HardSkills - Keterampilan Diri" />
							<div class="card-body">
								<h5 class="card-title">Lorem Ipsum</h5>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Ipsum facilis eveniet ab, et at iure?
								</p>
								<div class="d-flex justify-content-end">
									<button class="btn btn-join">Bergabung</button>
								</div>
							</div>
						</div>
						<div class="card bg-primary" style="width: 18rem">
							<p class="card-header mx-auto">Digital Marketing</p>
							<img src="{{ asset('img/img-card-8.png') }}" class="card-img-top" alt="HardSkills - Keterampilan Diri" />
							<div class="card-body">
								<h5 class="card-title">Lorem Ipsum</h5>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Ipsum facilis eveniet ab, et at iure?
								</p>
								<div class="d-flex justify-content-end">
									<button class="btn btn-join">Bergabung</button>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-center gap-1 my-3">
						<p class="m-0">View More</p>
						<i class="bi bi-chevron-down"></i>
					</div>
				</div>
			</div>
		</section>
		<footer class="footer mt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
						<h5 class="text-uppercase">Skill Forge</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="col-lg-2 col-md-6 mb-4 mb-md-0">
						<h5 class="text-uppercase">Company</h5>
						<ul class="list-unstyled mb-0">
							<li><a href="#!" class="text-dark">About Us</a></li>
							<li><a href="#!" class="text-dark">Careers</a></li>
							<li><a href="#!" class="text-dark">Blog</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 mb-4 mb-md-0">
						<h5 class="text-uppercase">Support</h5>
						<ul class="list-unstyled mb-0">
							<li><a href="#!" class="text-dark">Help Center</a></li>
							<li><a href="#!" class="text-dark">Contact Us</a></li>
							<li><a href="#!" class="text-dark">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 mb-4 mb-md-0">
						<h5 class="text-uppercase">Community</h5>
						<ul class="list-unstyled mb-0">
							<li><a href="#!" class="text-dark">Forums</a></li>
							<li><a href="#!" class="text-dark">Events</a></li>
							<li><a href="#!" class="text-dark">Partners</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
						<h5 class="text-uppercase">Follow Us</h5>
						<ul class="list-unstyled d-flex">
							<li><a href="#!" class="text-dark me-4"><i class="bi bi-facebook"></i></a></li>
							<li><a href="#!" class="text-dark me-4"><i class="bi bi-twitter"></i></a></li>
							<li><a href="#!" class="text-dark me-4"><i class="bi bi-instagram"></i></a></li>
							<li><a href="#!" class="text-dark"><i class="bi bi-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="text-center p-3">
				&copy; 2024 Skill Forge. All Rights Reserved.
			</div>
		</footer>
		<!-- Optional JavaScript -->
		<!-- Bootstrap Bundle with Popper -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-gtEjrD/SeCtmAMyLCJp3IVhU52eDcmF/Zxp5YYmWZkNRxS9rvEnjIlbz7BrxE/N"
			crossorigin="anonymous"
		></script>
	</body>
</html>

