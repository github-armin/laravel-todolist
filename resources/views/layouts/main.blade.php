<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todo List</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
  </head>
  <body>
    @include('partials.nav')
    <div class="container" style="margin-top: 70px;">
      @include('partials.notifications')
      @yield('content')
    </div>

    <footer id="footer" class="text-center">
      <hr />
      Copyright &copy; Todo Company <?= date('Y'); ?>
    </footer>
  </body>
</html>
