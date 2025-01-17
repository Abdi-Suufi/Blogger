<!DOCTYPE html>
<html>

<head>
    <title>{{ $post->title }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: grey;">
    <div class="container">
        <h1 class="my-4">{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <a href="/" class="btn btn-secondary mt-3">Back to Posts</a>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>