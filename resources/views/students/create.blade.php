<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Include your styles and scripts here -->
</head>
<body>
    <form @submit.prevent="submitForm">
        <!-- Your form fields for creating a new student -->
        <button type="submit">Save</button>
    </form>
    <!-- <script src="{{ mix('/js/app.js') }" defer></script> -->
</body>
</html>