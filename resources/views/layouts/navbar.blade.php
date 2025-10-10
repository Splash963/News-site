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

            .nav-link {
                color: black;
                font-size: 15px;
            }

            .navbar-nav .nav-item .nav-link:hover {
                color: black;
            }

            .navbar-nav .nav-item {
                text-align: left;
                display: block;
                padding-left: 1rem;
            }

        }
    </style>
</head>

<div class="sticky-top">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid justify-content-center">
            <span class="navbar-brand mb-0 fs-1">News.lk</span>
        </div>
        @include('layouts.line')
    </nav>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid navbar-bg">
            <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 d-flex justify-content-between text-center">
                    <li class="nav-item flex-fill">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link {{ Request::is('news') ? 'active' : '' }}" href="{{ route('news') }}">News</a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link {{ Request::is('politics') ? 'active' : '' }}" href="{{ route('politics.index') }}">Politics</a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link {{ Request::is('crime') ? 'active' : '' }}" href="{{ route('crime.index') }}">Crime</a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link {{ Request::is('sports') ? 'active' : '' }}" href="{{ route('sports.index') }}">Sports</a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link" href="#">World News</a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link" href="#">Education</a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link" href="#">Health</a>
                    </li>
                    <!-- <li class="nav-item flex-fill">
                        <a class="nav-link {{ Request::is('admin-dashboard') ? 'active' : '' }}" href="{{ route('admin-dashboard') }}">Admin</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</div>