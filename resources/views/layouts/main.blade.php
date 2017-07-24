<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todo List (laravel)</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>

    <footer id="footer" class="text-center">
      <hr />
      Copyright &copy; Todo Company <?= date('Y'); ?>
    </footer>
  </body>
</html>
