<html>
<body>
<h1>
    Post: {{ $post->id }}
</h1>
<h2>{{ $post->subject }}</h2>
<p>Published: {{ $post->isPublished() ? "true" : "false" }}<br/>
Created: {{ $post->created_at }}</p>
</body>
</html>
