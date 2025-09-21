<head>
    @vite('resources/css/home.css')
    <style>
        .navbar-bg {
            background-color: white;
        }

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



        @media (max-width: 768px) {
            .navbar-bg {
                background-color: white;
            }

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

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid navbar-bg">
        <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav w-100 d-flex justify-content-between text-center">
                <li class="nav-item flex-fill">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item flex-fill">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item flex-fill">
                    <a class="nav-link" href="#">Politics</a>
                </li>
                <li class="nav-item flex-fill">
                    <a class="nav-link" href="#">Crime</a>
                </li>
                <li class="nav-item flex-fill">
                    <a class="nav-link" href="#">Sports</a>
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
            </ul>
        </div>
    </div>
</nav>