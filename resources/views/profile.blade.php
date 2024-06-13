<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/styleHome.css') }}" />
    <style>
        /* Custom CSS */
        .table-responsive {
            overflow-x: auto;
        }
        .table th,
        .table td {
            white-space: nowrap;
        }
    </style>
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
							<form action="{{ route('logout') }}" method="POST">
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
	<section class="post my-4">
    <div class="container px-5 bg-white py-4 rounded-3">
        <div class="d-flex justify-content-start align-items-center gap-3">
            <img src="{{ asset('img/user_icon_purple.svg') }}" alt="User" class="icon-post" />
            <div class="d-flex flex-column text-primary">
                <span class="fs-6 fw-bold">Profile</span>
                <span class="fs-7">Profile information</span>
            </div>
        </div>
        
        <div class="mt-3"> <!-- Container untuk setiap item profile -->
            <h1 class="text-primary fw-bold fs-5 mb-0">
                Email
            </h1>
            <hr class="mt-1 mb-2"> <!-- Garis bawah untuk Email -->

            <p class="fs-6 mb-0">{{ $user-> email}}</p> <!-- Contoh email, ganti dengan data dinamis dari backend -->
            
        </div>

        <div class="mt-3"> <!-- Container untuk setiap item profile -->
            <h1 class="text-primary fw-bold fs-5 mb-0">
                Username
            </h1>
            <hr class="mt-1 mb-2"> <!-- Garis bawah untuk Username -->

            <p class="fs-6 mb-0">{{ $user-> username}}</p> <!-- Contoh username, ganti dengan data dinamis dari backend -->
     
        </div>

        <div class="mt-3"> <!-- Container untuk setiap item profile -->
            <h1 class="text-primary fw-bold fs-5 mb-0">
                Password
            </h1>
            <hr class="mt-1 mb-2"> <!-- Garis bawah untuk Role -->

            <p class="fs-6 mb-0">••••••••</p> <!-- Contoh role, ganti dengan data dinamis dari backend -->
            <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#edit" style="background-color: #6258dc; padding: 5px 30px;">Edit</button>

        </div>
        </div>

    </div>
</section>


<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('updateAsUser', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password (leave blank to keep current password)</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Update User</button>
                </form>
            </div>
        </div>
    </div>
</div>

                                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
