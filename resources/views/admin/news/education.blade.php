<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <head>
        @include('admin.admin-layouts.offcanvas')
    </head>

    <body>
        <div>
            @include('layouts.line')
        </div>
        <div class="text-center py-4 px-3 rounded shadow-sm">
                <h2 class="mb-0 fw-bold display-5" style="letter-spacing: 1px;">Education News</h2>
            </div>
        <div>
            @include('admin.admin-layouts.table')
        </div>
    </body>

    <footer>
        @include('layouts.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>