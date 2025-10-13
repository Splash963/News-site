<head>
    <style>
        .description{
            padding-left: 3%;
            padding-right: 3%;
            font-size: 23px;
        }

        @media (max-width: 768px) {
            .description{
                padding-left: 0%;
                padding-right: 0%;
                font-size: 16px;
            }
        }
    </style>
</head>


<div class="card">
    <img src="{{ asset($main_news->image_path) }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title fw-semibold fs-2">{{ $main_news->title }}</h5>
        <div class="mt-5" style="text-align: left;">
            <p class=" m-0 description">
                {!! str_replace('.', '.<br><br>', $main_news->description) !!}
            </p>
        </div>
        <p class="card-text"><small class="text-body-secondary">Added : {{$main_news->created_at}}</small></p>
    </div>
</div>