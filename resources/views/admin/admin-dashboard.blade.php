<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <head>
        @include('admin.admin-layouts.offcanvas')
        @include('layouts.spinner')
    </head>

    <body>
        <div>
            <h1 class="text-center mt-5">Admin Dashboard</h1>
            <p class="text-center">Welcome to the admin dashboard. Here you can manage the website content and settings.</p>
        </div>

        <!-- Quick links -->
        <div class="container">
            <div class="card" style="width: 20rem; height: 10rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
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