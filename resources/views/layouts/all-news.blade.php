<head>
    <style>
        .title {
            font-size: 21px;
        }

        @media(max-width:900px) {
            .title {
                font-size: 13px;
            }

            .date {
                font-size: 8px;
            }
        }
    </style>
</head>


<div class="text-center">
    <div class="row">
        <div class="col-md-8">
            <div>
                <p class="fs-1" style="display: flex; align-self: flex-start;">All News</p>
                @include('layouts.line')
            </div>
            @foreach($all_news as $news)
            <a href="{{route('news.show', $news->id)}}" style="text-decoration: none; color: inherit;">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-4">
                            <img class="img-fluid" src="{{ asset($news->image_path) }}" alt="{{ $news->title }}">
                        </div>
                        <div class="col-8">
                            <div class="card-body d-flex flex-column justify-content-between text-center" style="height: 120px;">
                                <div class="d-flex align-items-center justify-content-center flex-grow-1">
                                    <p class="fw-semibold title" style="max-height: 115px;">{{ $news->title }}</p>
                                </div>
                                <p class="card-text mb-0">
                                    <small class="text-body-secondary date">Added: {{ $news->created_at->format('M d, Y') }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div style="display: flex; align-self: flex-start;">
            {{ $all_news->links('pagination::bootstrap-5') }}
        </div>
        <div class="col-6 col-md-4"></div>
    </div>
</div>