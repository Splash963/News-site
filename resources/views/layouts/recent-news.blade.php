<div>
    <p class="fs-1">Recent News</p>
    @include('layouts.line')
</div>
<div class="overflow-y-scroll" style="max-height: 700px;">
    @foreach($recent_news as $news)
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img  class="img-fluid" src="{{ $news->image_path }}" alt="{{ $news->title }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title fs-5">{{ $news->title }}</h5>
                    <p class="card-text">
                        <small class="text-body-secondary">Added: {{ $news->created_at->format('M d, Y') }}</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>