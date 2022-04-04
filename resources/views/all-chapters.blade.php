<html>
<head>
    <title>

    </title>
</head>
<body>
<h1>{{ $book_name }}</h1>
<h3>{{ $bible_version }}</h3>

@for($i = 1; $i <= $number_of_chapters; $i++)
<h3> Chapter {{ $i }} </h3>
<pre>
@include("chapter{$i}")
</pre>
@endfor

</body>
</html>