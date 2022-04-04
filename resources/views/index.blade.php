<!doctype html>
<head>
    <title>
        Bible Reader
    </title>
    
    <body style="background-color:blanchedAlmond;">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}

</style>
</head>
<body>
<h1 class="display-3">{{ $bible_version }}</h1>
<h1 class="display-5">{{ $book_name }}</h1>
<hr>

@for($i = 1; $i <= $number_of_chapters; $i++)
<div class="container-fluid">
    <h3 class="display-6"><a href="/chapter/{{ $i }} "> Chapter {{ $i }} </a> </h3>
</div>
<hr>
@endfor
<div class="container-fluid">
    <h3 class="display-6">
    <a href="/all-chapters"> Read All Chapters </a>
    </h3>
</div>
</body>
</html>