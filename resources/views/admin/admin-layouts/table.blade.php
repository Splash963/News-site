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
            <td><a href="{{ route('announcement.edit', $newsItem->id) }}" type="button">Edit</a></td>
            <td>
                <form action="{{ route('politics.destroy', $newsItem->id) }}" style="display: inline;" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this announcement?');">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="8" class="text-center">No Sports News found.</td>
        </tr>
        @endif
    </tbody>
</table>