<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>Blog Name</h1>
        <h2 class="title">
            {{ $post->title }}
        </h2>
        <div class="content">
            <div class="content__post">
                <h3></h3>
                <p>{{ $post->body }}</p>
                <p class ='updated_at'>{{$post->updated_at}}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">back</a>
        </div>
    <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
            @csrf
            @method('DELETE')
    <input type="button" style="display:none">
    <p class='delete'>[<span onclick="return deletePost(this);">delete</span>]</p>
</form>
 <p class="edit">[<a href="/posts/{{$post->id}}/edit">edit</a>]</p>
<script>
function deletePost(e){
    'use strict';
    if (confirm('削除すると復元できません。\n本当に削除しますか?')){
    document.getElementById('form_delete').submit();
    }
}
</script>
    </body>
</html>