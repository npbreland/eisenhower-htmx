<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eisenhower HTMX</title>
    @vite([
      'resources/scss/app.scss',
      'resources/css/app.css',
      'node_modules/bootstrap-icons/font/bootstrap-icons.css',
      'resources/js/app.js'
    ])
  </head>
  <body hx-boost="true">
    @yield('content')
    <script>
      document.body.addEventListener('htmx:configRequest', (event) => {
        event.detail.headers['X-CSRF-Token'] = '{{ csrf_token() }}';
        event.detail.headers['X-Requested-With'] = 'XMLHttpRequest';
      })
    </script>
  </body>
</html>
