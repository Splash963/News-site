<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/home.css')
</head>

<body>

    <head>
        @include('layouts.navbar')
    </head>

    <body>
        <div class="container">
            <div class="container mt-5">
                <div class="row">

                    <!-- Recent News Section -->
                    <div class="col-lg-3">
                        @include('layouts.recent-news')
                    </div>

                    <!-- Main News Section -->
                    <div class="col-lg-6">
                        <div class="card mb-3">
                            <img src="https://www.news.lk/images/2025/09/22/WhatsApp%20Image%202025-09-22%20at%2012.31.31_large.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">President Anura to Undertake Official Visit to Japan from Sept. 27–30</h5>
                                <p class="card-text"><small class="text-body-secondary">2025/09/23</small></p>
                            </div>
                        </div>
                    </div>

                    <!-- Special Announcements Section -->
                    <div class="col-lg-3">
                        <div>
                            <p class="fs-3">Special Announcements</p>
                            @include('layouts.line')
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Political News Section -->
            <div class="container mt-5">
                <div class="col-md-3">
                    <p class="fs-3">Recent World News</p>
                    @include('layouts.line')
                </div>

                <!-- Horizontal scroll container -->
                <div class="d-flex flex-nowrap overflow-auto py-3" style="gap: 1rem;">
                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/08/05/91_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sports News Section -->
            <div class="container mt-5">
                <div class="col-md-3">
                    <p class="fs-3">Recent World News</p>
                    @include('layouts.line')
                </div>

                <!-- Horizontal scroll container -->
                <div class="d-flex flex-nowrap overflow-auto py-3" style="gap: 1rem;">
                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/08/08/SL-Cricket_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/08/08/SL-Cricket_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/08/08/SL-Cricket_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/08/08/SL-Cricket_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/08/08/SL-Cricket_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/08/08/SL-Cricket_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- World News Section -->
            <div class="container mt-5">
                <div class="col-md-3">
                    <p class="fs-3">Recent World News</p>
                    @include('layouts.line')
                </div>

                <!-- Horizontal scroll container -->
                <div class="d-flex flex-nowrap overflow-auto py-3" style="gap: 1rem;">
                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/09/09/94_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/09/09/94_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/09/09/94_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/09/09/94_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/09/09/94_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="https://www.news.lk/images/2025/09/09/94_large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>

    <footer>
        @include('layouts.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>