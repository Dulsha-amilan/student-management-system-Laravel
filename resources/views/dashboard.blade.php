<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Include your styles and scripts here -->
</head>
<body>
    <div id="app" data-page="{{ json_encode($page) }}"></div>
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>