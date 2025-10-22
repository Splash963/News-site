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
            <div class="mt-5">
                <div class="row">

                    <!-- Main News Section (1st on mobile, center on large screens) -->
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="card mb-3">
                            <img src="{{ asset($main_news->image_path) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">{{ $main_news->title }}</h5>
                                <p class="card-text">
                                    <small class="text-body-secondary">Added : {{$main_news->created_at}}</small>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Recent News Section (2nd on mobile, left on large screens) -->
                    <div class="col-lg-4 order-2 order-lg-1">
                        @include('layouts.recent-news')
                    </div>

                    <!-- Special Announcements Section (3rd on mobile, right on large screens) -->
                    <div class="col-lg-3 order-3">
                        <div>
                            <p class="fs-2">Special Announcements</p>
                            @include('layouts.line')
                        </div>
                        @foreach($announcements as $newsItem)
                        <div class="card mb-3" style="max-width: 640px;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <p class="fw-semibold fs-5">{{ $newsItem->title }}</p>
                                        <p class="fs-6">{{ $newsItem->description }}</p>
                                        <p class="card-text">
                                            <small class="text-body-secondary">Added : {{$newsItem->created_at}}</small>
                                        </p>
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
                    <p class="fs-1">Recent Politics News</p>
                    @include('layouts.line')
                </div>

                <!-- Horizontal scroll container -->
                <div class="d-flex flex-nowrap overflow-auto py-3" style="gap: 1rem;">
                    @forEach($recent_politics as $news)
                    <a href="{{route('news.show', $news->id)}}" style="text-decoration: none; color: inherit;">
                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="{{ asset($news->image_path) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fw-semibold">{{ $news->title }}</p>
                        </div>
                    </div>
                    </a>
                    @endforEach
                </div>
            </div>

            <!-- Sports News Section -->
            <div class="mt-5">
                <div class="col-md-3">
                    <p class="fs-1">Recent Sports News</p>
                    @include('layouts.line')
                </div>

                <!-- Horizontal scroll container -->
                <div class="d-flex flex-nowrap overflow-auto py-3" style="gap: 1rem;">
                    @forEach($recent_sports as $news)
                    <a href="{{route('news.show', $news->id)}}" style="text-decoration: none; color: inherit;">
                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="{{ asset($news->image_path) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fw-semibold">{{ $news->title }}</p>
                        </div>
                    </div>
                    </a>
                    @endforEach
                </div>
            </div>

            <!-- World News Section -->
            <div class="mt-5">
                <div class="col-md-3">
                    <p class="fs-1">Recent World News</p>
                    @include('layouts.line')
                </div>

                <!-- Horizontal scroll container -->
                <div class="d-flex flex-nowrap overflow-auto py-3" style="gap: 1rem;">
                    @foreach($recent_world as $news)
                    <a href="{{route('news.show', $news->id)}}" style="text-decoration: none; color: inherit;">
                    <div class="card" style="max-width: 20rem; min-width: 20rem;">
                        <img src="{{ asset($news->image_path) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fw-semibold">{{ $news->title }}</p>
                        </div>
                    </div>
                    </a>
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