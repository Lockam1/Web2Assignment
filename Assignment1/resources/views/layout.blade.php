<!DOCTYPE html>
<html lang="en">
<!-- <head> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Assignment1')</title>
    
    <link type="text/css" rel="stylesheet" href="{{asset('css/lab1.css')}}">
    
    


<!-- </head> -->
<!-- <body> -->
  <div class = "nav">
    <ul>
      <li><a href="#">New Zealand Cricket</a></li>
      <li style="float:right"><a href="/">Home</a></li>
      <li style="float:right"><a href="/about">About</a></li>
    </ul>  
  </div>
   
    @yield('content')
<!-- </body> -->
</html>