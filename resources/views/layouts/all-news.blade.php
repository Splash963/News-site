<head>

</head>


<div class="text-center">
    <div class="row">
        <div class="col-md-8">
            <div>
                <p class="fs-1" style="display: flex; align-self: flex-start;">All News</p>
                @include('layouts.line')
            </div>
            @foreach($all_news as $news)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-4">
                        <img class="img-fluid" src="{{ $news->image_path }}" alt="{{ $news->title }}">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <div class="overflow-hidden">
                                <p class="fw-medium" style="max-height: 115px;">{{ $news->title }}</p>
                            </div>
                            <p class="card-text">
                                <small class="text-body-secondary ">Added: {{ $news->created_at->format('M d, Y') }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div style="display: flex; align-self: flex-start;">
            {{ $all_news->links('pagination::bootstrap-5') }}
        </div>
        <div class="col-6 col-md-4"></div>
    </div>
</div>