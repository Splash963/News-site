<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
                    <div class="col-lg-7 order-1 order-lg-1">
                        <div class="card mb-3" style="border-radius: 0;">
                            <img src="{{ asset($main_news->image_path) }}" class="card-img-top" style="border-radius: 0;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">{{ $main_news->title }}</h5>
                                <p class="card-text">
                                    <small class="text-body-secondary">Added : {{$main_news->created_at}}</small>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Recent News Section (2nd on mobile, left on large screens) -->
                    <div class="col-lg-5 order-2 order-lg-2">
                        @include('layouts.recent-news')
                    </div>

                </div>
            </div>

            <div class="row">
                <div>
                    <p class="fs-2">Special Announcements</p>
                    @include('layouts.line')
                </div>
                @foreach($announcements as $newsItem)
                <div class="col-lg-4">
                    <div class="card border-warning shadow-sm mb-4" style="max-width: 640px; border: 1px solid #ffc107; border-radius: 8px;">
                        <div class="card-header bg-warning-subtle text-dark fw-bold d-flex align-items-center" style="font-size: 1.1rem;">
                            <i class="bi bi-megaphone-fill me-2"></i> <!-- Bootstrap icon -->
                            {{ $newsItem->title }}
                        </div>
                        <div class="card-body" style="background-color: #fffef5;">
                            <h5 class="card-title fw-semibold mb-3" style="text-align: left; line-height: 1.5;">
                                {{ $newsItem->description }}
                            </h5>
                            <p class="card-text mb-0">
                                <small class="text-muted">📅 Added: {{ $newsItem->created_at->format('F j, Y') }}</small>
                            </p>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

            <!-- Political News Section -->
            <div class="mt-5">
                <div class="col-md-3">
                    <p class="fs-1">Recent Politics News</p>
                    @include('layouts.line')
                </div>

                <!-- Horizontal scroll container -->
                <div class="d-flex flex-nowrap overflow-auto py-3" style="gap: 1rem; scrollbar-width: thin;">
                    @forEach($recent_politics as $news)
                    <a href="{{route('news.show', $news->id)}}" style="text-decoration: none; color: inherit;">
                        <div class="card" style="max-width: 20rem; min-width: 20rem; border-radius: 0; min-height: 22rem;">
                            <img src="{{ asset($news->image_path) }}" class="card-img-top" style="border-radius: 0;" alt="...">
                            <div class="card-body">
                                <p class="card-text fw-semibold" style="text-align: center;">{{ $news->title }}</p>
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
                <div class="d-flex flex-nowrap overflow-auto py-3" style="gap: 1rem; scrollbar-width: thin;">
                    @forEach($recent_sports as $news)
                    <a href="{{route('news.show', $news->id)}}" style="text-decoration: none; color: inherit;">
                        <div class="card" style="max-width: 20rem; min-width: 20rem; border-radius: 0; min-height: 22rem;">
                            <img src="{{ asset($news->image_path) }}" class="card-img-top" style="border-radius: 0;" alt="...">
                            <div class="card-body">
                                <p class="card-text fw-semibold" style="text-align: center;">{{ $news->title }}</p>
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
                <div class="d-flex flex-nowrap overflow-auto py-3" style="gap: 1rem; scrollbar-width: thin;">
                    @foreach($recent_world as $news)
                    <a href="{{route('news.show', $news->id)}}" style="text-decoration: none; color: inherit;">
                        <div class="card" style="max-width: 20rem; min-width: 20rem; border-radius: 0; min-height: 22rem;">
                            <img src="{{ asset($news->image_path) }}" class="card-img-top" style="border-radius: 0;" alt="...">
                            <div class="card-body">
                                <p class="card-text fw-semibold" style="text-align: center;">{{ $news->title }}</p>
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