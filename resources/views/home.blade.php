<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
		rel="stylesheet" />
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
	<link rel="stylesheet" href="{{ asset('css/styleHome.css') }}" />
	<title>Home | Skill Forge</title>
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
					<img src="{{ asset('img/mingcute_search-3-line.svg') }}" alt="" class="icon-search" />
					<input type="text" placeholder="Jelajahi" />
				</div>
				<ul>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ asset('img/user_icon.svg') }}" alt="" class="icon" />
						</a>
						<ul class="dropdown-menu text-center" aria-labelledby="userDropdown">
							<li><a class="dropdown-item" href="#">Profile</a></li>
							<li>
								<hr class="dropdown-divider" />
							</li>
							<form action="{{ route('logout') }}" method="GET">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
						</ul>
					</li>
					<li>
						<button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-question">
							Tambahkan Pertanyaan
						</button>
					</li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>
		</div>
	</header>
	<section class="container my-4">
		<div class="d-flex">
			<span class="badge badge-active rounded-pill fs-6">Programming</span>
			<span class="badge badge-inactive rounded-pill fs-6">Data Science</span>
			<span class="badge badge-inactive rounded-pill fs-6">UI/UX</span>
			<span class="badge badge-inactive rounded-pill fs-6">Software Engineering</span>
			<span class="badge badge-inactive rounded-pill fs-6">Artificial Intelligence</span>
			<span class="badge badge-inactive rounded-pill fs-6">Game Development</span>
		</div>
	</section>
	<section class="my-4">
		<div class="container px-5 bg-white py-4 rounded-3">
			<div class="d-flex gap-4 align-items-center">
				<img src="{{ asset('img/user_icon_purple.svg') }}" alt="User" class="icon-post" />
				<input type="text" class="feed" placeholder="Apa yang ingin anda bagi atau tanyakan?" />
			</div>
			<div class="d-flex justify-content-end mt-2 gap-4">
				<div class="btn-tanya" data-bs-toggle="modal" data-bs-target="#exampleModal">
					<div class="icon-question-container">
						<img src="{{ asset('img/icon_question.svg') }}" alt="" width="10px" />
					</div>
					<span>Tanya</span>
				</div>
				<div class="btn-tanya" data-bs-toggle="modal" data-bs-target="#exampleModal">
					<div class="icon-question-container">
						<img src="{{ asset('img/icon_pencil.svg') }}" alt="" width="15px" />
					</div>
					<span>Unggah</span>
				</div>
			</div>
		</div>
	</section>
	<section class="post my-4">
		<div class="container px-5 bg-white py-4 rounded-3">
			<div class="d-flex justify-content-start align-items-center gap-3">
				<img src="{{ asset('img/user_icon_purple.svg') }}" alt="User" class="icon-post" />
				<div class="d-flex flex-column text-primary">
					<span class="fs-6 fw-bold">Dipper Pines</span>
					<span class="fs-7">Senior Programmer · April 2024</span>
				</div>
			</div>
			<h1 class="text-primary fw-bold fs-5 mt-3">
				How can I become a very good programmer?
			</h1>
			<p>
				<span class="fw-bold">1. Dive deep into details.</span> If you learn
				Java, try to understand not only syntax of the language, but also how
				it works under the hood - how JVM works, how objects are represented
				in memory, how code is translated into machine commands, how CPU (or
				something else?) handles I/O operations. Working on web application -
				tend to learn not only framework, but also protocols, how packages are
				exchanged between client and server, how encryption algorithms work.
				However, don't try to get all in once...
				<span class="text-primary">(more)</span>
			</p>
			<img src="{{ asset('img/img-post.png') }}" class="img-fluid my-3" alt="" />
			<div class="d-flex justify-content-between align-items-center">
				<div class="d-flex gap-3 align-items-center">
					<div class="btn-upvote">
						<div class="icon-upvote-container left">
							<i class="bi bi-chevron-up"></i>
						</div>
						<span>Upvote ・ 20</span>
						<div class="icon-upvote-container right active">
							<i class="bi bi-chevron-down"></i>
						</div>
					</div>
					<a href="#">
						<i class="bi bi-chat-square-fill fs-2 text-primary"></i>
					</a>
					<a href="#">
						<i class="bi bi-share-fill fs-2 text-primary"></i>
					</a>
				</div>
				<a href="#">
					<i class="bi bi-three-dots fs-2 text-primary"></i>
				</a>
			</div>
		</div>
		<div class="container px-5 bg-white py-4 rounded-3">
			<div class="d-flex justify-content-start align-items-center gap-3">
				<img src="{{ asset('img/user_icon_purple.svg') }}" alt="User" class="icon-post" />
				<div class="d-flex flex-column text-primary">
					<span class="fs-6 fw-bold">Lamine Yamal</span>
					<span class="fs-7">Senior Programmer · April 2024</span>
				</div>
			</div>
			<h1 class="text-primary fw-bold fs-5 mt-3">
				How one should be a programmer without CS background?
			</h1>
			<p>
				1.Most companies don't need to see the degree. I'm a very successful
				developer, and I don't have a computer science degree.
				<br />
				2.Now I have taken most of the computer science classes, and I do have
				a degree (in cognitive science), but the point is no one even asks any
				more. They throw computer science questions at me in interviews, which
				I usually do well on, and that's that.
				<br />
				3.So learn the core computer science concepts, and practice coding...
				<span class="text-primary">(more)</span>
			</p>
			<img src="{{ asset('img/img-post.png') }}" class="img-fluid my-3" alt="" />
			<div class="d-flex justify-content-between align-items-center">
				<div class="d-flex gap-3 align-items-center">
					<div class="btn-upvote">
						<div class="icon-upvote-container left">
							<i class="bi bi-chevron-up"></i>
						</div>
						<span>Upvote ・ 20</span>
						<div class="icon-upvote-container right active">
							<i class="bi bi-chevron-down"></i>
						</div>
					</div>
					<a href="#">
						<i class="bi bi-chat-square-fill fs-2 text-primary"></i>
					</a>
					<a href="#">
						<i class="bi bi-share-fill fs-2 text-primary"></i>
					</a>
				</div>
				<a href="#">
					<i class="bi bi-three-dots fs-2 text-primary"></i>
				</a>
			</div>
		</div>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
						<i class="bi bi-x fs-2 text-white"></i>
					</button>
					<div class="container-menu">
						<div class="container-question">
							<p>Buat Pertanyaan</p>
							<hr />
						</div>
						<div class="container-question">
							<p>Buat Postingan</p>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="container">
						<input type="text" class="input-question" placeholder="Masukkan Pertanyaaan Anda" />
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn cancel" data-bs-dismiss="modal">
						Batal
					</button>
					<button type="button" class="btn btn-submit">Tanya</button>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
	<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
