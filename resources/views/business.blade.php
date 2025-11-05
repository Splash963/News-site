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
        @include('layouts.spinner')
    </head>

    <body>
        <div style="width: 90%; align-items: center; margin: auto;">
            <div class="text-center mt-5">
                <div class="row">
                    <div class="col-md-8">
                        @include('layouts.main-news')
                    </div>
                    <div class="col-12 col-md-4">
                        @include('layouts.recent-news')
                    </div>
                </div>
            </div>
            @include('layouts.all-news')
        </div>
    </body>

    <footer>
        @include('layouts.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>