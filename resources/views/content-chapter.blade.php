<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h1 class="display-1">{{ $book_name }}</h1>
<h3 class="display-6">{{ $bible_version }}</h3>


@for($i = 1; $i <= $number_of_chapters; $i++)
    <a href="/chapter/{{ $i }} "> Chapter {{ $i }} </a>
@endfor
<hr>
<pre>
@include('chapter' . $chapter_number)
</pre>

</body>
</html>