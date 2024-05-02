<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.head')
  @stack('styles')
</head>
<body>
  @include('layouts.menu')
  @yield('body')
  @include('layouts.footer')
  <script src="/script.js"></script>
  @stack('scripts')
</body>
