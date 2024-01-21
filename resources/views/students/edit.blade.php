<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Include your styles and scripts here -->
</head>
<body>
    <form @submit.prevent="submitForm">
        <!-- Your form fields for editing the student -->
        <button type="submit">Update</button>
    </form>
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>