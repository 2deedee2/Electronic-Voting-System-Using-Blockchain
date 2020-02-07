<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Blockchain Voting')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Home</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="/login">
          <li class="nav-item" ><a class="nav-link" href="#">
        </ul>
      </div>
</nav>



<div class="container">
@yield('content')
</div>
</body>
</html>
