<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <a href="/logout">Logout</a>
</body>

</html>