<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') -HackoBlogs</title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/datatable.css') }}" rel="stylesheet" type="text/css" />
 </head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('book.list')}}">Lravel Crud Application</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('book.list')}}">List</a></li>
      <li><a href="{{route('book.create')}}">Add</a></li>
    </ul>
  </div>
</nav>
  <div class="container">
  	<h2>Laravel 5.8 CRUD Example</h2>
    @yield('content')
  </div>
</body>
</html>


