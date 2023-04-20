<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список постов</title>
</head>
<body>
    <h1>Список постов</h1>
    <ul>
        <li>
            <a href=" {{ route('posts.show', ['post'=> 1]) }}">Post 1</a>|
            <a href=" {{ route('posts.edit', ['post' => 1]) }}">Post edit</a>|
            <form action="{{ route('posts.destroy', ['post'=> 1]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button>
            </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['post' => 2]) }}">Post 2</a> |
            <a href=" {{ route('posts.edit', ['post' => 2]) }}">Post edit</a>
            <form action="{{ route('posts.destroy', ['post'=> 2]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
                </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['post' => 3]) }}">Post 3</a>|
            <a href=" {{ route('posts.edit', ['post' => 3]) }}">Post edit</a>
            <form action="{{ route('posts.destroy', ['post'=> 3]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
                </form>
        </li>
    </ul>
</body>
</html>