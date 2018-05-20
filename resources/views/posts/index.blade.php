<html>
<body>
<h1>
    Posts
</h1>
<ul>
    @foreach($posts as $post)
        <li><a href="posts/{{ $post->id }}">{{ $post->subject }}</a></li>
    @endforeach
</ul>
</body>
</html>
