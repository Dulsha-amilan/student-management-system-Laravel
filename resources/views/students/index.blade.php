<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Include your styles and scripts here -->
</head>
<body>
    <inertia-table :data="{{ json_encode($students) }}"></inertia-table>
    <a href="{{ route('students.create') }}">Add Student</a>
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>