<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <head>
        @include('layouts.navbar')
    </head>

    <body>
        <div style="width: 90%; align-items: center; margin: auto;">
            <div class="text-center">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <img src="{{ asset($business->image_path) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fs-2">{{ $business->title }}</h5>
                                <p class="card-text fs-4 align-items-center">{{ $business->description }}</p>
                                <p class="card-text"><small class="text-body-secondary">Added : {{$business->created_at}}</small></p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-12 col-md-4">
                        @include('layouts.recent-news')
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