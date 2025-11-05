<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <head>
        @include('admin.admin-layouts.offcanvas')
    </head>

    <body>
        <div>
            @include('layouts.line')
            @include('layouts.spinner')
        </div>
        <div class="text-center py-4 px-3 rounded shadow-sm">
            <h2 class="mb-0 fw-bold display-5" style="letter-spacing: 1px;">Health News</h2>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">News Type</th>
                        <th scope="col">Category</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @if($view_data->count())
                    @foreach ($view_data as $newsItem)
                    <tr>
                        <th scope="row">{{ $newsItem->id }}</th>
                        <td>{{ $newsItem->news_type }}</td>
                        <td>{{ $newsItem->category }}</td>
                        <td>{{ $newsItem->title }}</td>
                        <td>{{ Str::limit($newsItem->description, 100) }}</td>
                        <td>
                            @if ($newsItem->image_path)
                            <p>{{ $newsItem->image_path }}</p>
                            @else
                            <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>{{ $newsItem->created_at->format('Y-m-d H:i') }}</td>
                        <td>{{ $newsItem->updated_at->format('Y-m-d H:i') }}</td>
                        <td><a href="{{route('home.edit', $newsItem->id)}}">
                                <button class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                    </svg>
                                </button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('health.destroy', $newsItem->id) }}" style="display: inline;" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this announcement?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8" class="text-center">No Health News found.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
            <div style="display: flex; align-self: flex-start;">
                {{ $view_data->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </body>

    <footer>
        @include('layouts.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>