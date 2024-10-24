<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel application</title>
</head>
<body>
    <header>
        <nav>
            <li><a href="">home</a></li>
            <li><a href="">services</a></li>
            <li><a href="">about</a></li>
            <li><a href="../contact.blade.php">contact</a></li>
        </nav>
    </header>
    @yield('content')
    <footer>
        &copy; 2024 All rights reserved.
    </footer>
</body>
</html>