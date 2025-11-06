<head>
    <style>
        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        .card img {
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
            height: 100%;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .fw-medium {
            font-weight: 500;
        }

        .fs-6 {
            font-size: 1rem;
        }

        .fs-1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .text-body-secondary {
            color: #6c757d;
        }
    </style>
</head>


<div>
    <p class="fs-1" style="display: flex; align-self: flex-start;">Recent News</p>
    @include('layouts.line')
</div>
<div class="overflow-y-scroll" style="max-height: 602px; scrollbar-width: thin;">
    @foreach($recent_news as $news)
    <a href="{{route('news.show', $news->id)}}" style="text-decoration: none; color: inherit;">
        <div class="card mb-3" style="max-width: 540px; border-radius: 0;">
            <div class="row g-0">
                <div class="col">
                    <img class="img-fluid" src="{{ asset('news_images/' . $news->image_path) }}" style="border-radius: 0;" alt="{{ $news->title }}">
                </div>
                <div class="col">
                    <div class="card-body">
                        <div class="overflow-hidden">
                            <p class="fw-semibold" style="max-height: 115px;">{{ $news->title }}</p>
                        </div>
                        <p class="card-text">
                            <small class="text-body-secondary ">Added: {{ $news->created_at->format('M d, Y') }}</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach
</div>