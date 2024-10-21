<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Posts</title>
    </head>
    <body>
        @if($posts->isEmpty())
        <p>There are no posts available.</p>
        @else
        <ul>
            @foreach($posts as $post)
            <h1>{{ $post->title }}</h1>
            <li>Post id: {{ $post->id }}, Created at: {{ $post->created_at }}</li>
            <h2>{{ $post->content }}</h2>
            @endforeach
        </ul>
        @endif
    </body>
</html>