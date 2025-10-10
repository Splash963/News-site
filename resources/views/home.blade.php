<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <head>
        @include('layouts.navbar')
    </head>

    <body>
        <div style="width: 90%; align-items: center; margin: auto;">
            <div class=" mt-5">
                <div class="row">

                    <!-- Recent News Section -->
                    <div class="col-lg-3">
                        @include('layouts.recent-news')
                    </div>

                    <!-- Main News Section -->
                    <div class="col-lg-6">
                        <div class="card mb-3">
                            <img src="{{ asset($main_news->image_path) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $main_news->title }}</h5>
                                <p class="card-text"><small class="text-body-secondary">Added : {{$main_news->created_at}}</small></p>
                            </div>
                        </div>
                    </div>

                    <!-- Special Announcements Section -->
                    <div class="col-lg-3">
                        <div>
                            <p class="fs-3">Special Announcements</p>
                            @include('layouts.line')
                        </div>
                        @foreach($announcements as $newsItem)
                        <div class="card mb-3" style="max-width: 640px;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $newsItem->title }}</h5>
                                        <p class="card-text">{{ $newsItem->description }}</p>
                                        <p class="card-text"><small class="text-body-secondary">Added : {{$newsItem->created_at}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Political News Section -->
            <div class="mt-5">
                <div class="col-md-3">
                    <p class="fs-3">Recent Politics News</p>
                    @include('layouts.line')
                </div>

                <!-- Horizontal scroll container -->
                <div class="d-flex flex-nowrap overflow-auto py-3" style="gap: 1rem;">
                    @forEach($recent_politics as $newsItem)
                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="{{ asset($newsItem->image_path) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">{{ $newsItem->title }}</p>
                        </div>
                    </div>
                    @endforEach
                </div>
            </div>

            <!-- Sports News Section -->
            <div class="mt-5">
                <div class="col-md-3">
                    <p class="fs-3">Recent Sports News</p>
                    @include('layouts.line')
                </div>

                <!-- Horizontal scroll container -->
                <div class="d-flex flex-nowrap overflow-auto py-3" style="gap: 1rem;">
                    @forEach($recent_sports as $newsItem)
                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="{{ asset($newsItem->image_path) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">{{ $newsItem->title }}</p>
                        </div>
                    </div>
                    @endforEach
                </div>
            </div>

            <!-- World News Section -->
            <div class="mt-5">
                <div class="col-md-3">
                    <p class="fs-3">Recent World News</p>
                    @include('layouts.line')
                </div>

                <!-- Horizontal scroll container -->
                <div class="d-flex flex-nowrap overflow-auto py-3" style="gap: 1rem;">
                    @foreach($recent_world as $newsItem)
                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="{{ asset($newsItem->image_path) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">{{ $newsItem->title }}</p>
                        </div>
                    </div>
                    @endforeach
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