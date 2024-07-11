<!DOCTYPE html>
<html>

<head>
    <title>Blog Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                @if ($post->user)
                <p class="card-text"><small class="text-muted">Posted by {{ $post->user->name }}</small></p>
                @else
                <p class="card-text"><small class="text-muted">Posted by Unknown User</small></p>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    @endsection

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>