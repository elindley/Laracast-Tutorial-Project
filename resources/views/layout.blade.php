<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Thing</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/app.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="container">

      <nav class="navbar navbar-default">
        <div class="container-fluid">

          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/cards">Cards</a></li>
          </ul>



        </div>
      </nav>

      @yield('content')

      @yield('footer')
    </div> <!-- end container -->


  </body

</html>
