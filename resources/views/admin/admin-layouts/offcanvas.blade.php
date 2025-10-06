<head>
    <style>
        .nav-link {
            color: black;
            font-family: Arimo, sans-serif;
            font-weight: 100;
            font-size: 16px;
        }

        .navbar-nav .nav-item .nav-link:hover {
            background-color: #E50046;
            color: white;
        }

        .navbar-nav .nav-link.active {
            color: white !important;
            background-color: #C7253E;
        }

        .navbar-nav .nav-link:hover {
            color: white !important;
        }

        .navbar-brand {
            padding: 20px;
            font-weight: bold;
            font-family: 'Arimo', sans-serif;
        }

        @media (max-width: 768px) {

            .offcanvas.half-screen {
                width: 60% !important;
            }

        }
    </style>
</head>

<body>
    <div>
        <div style="height: 50px;">
        </div>
        <div>
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start half-screen" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dashboard</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('admin-dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('admin-dashboard') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('add-news') ? 'active' : '' }}" href="{{ route('add-news') }}">Add News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('news.politics') ? 'active' : '' }}" href="{{ route('news.politics') }}">Politic News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Crime News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sports News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">World News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Business News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Education News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Health News</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>