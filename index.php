<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Page PHP Site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to My One Page Site</h1>
    </header>
    <nav>
        <a href="#welcome">Welcome</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
    </nav>
    <section id="welcome">
        <h2>Welcome</h2>
        <p>This is a simple one-page site built with PHP and HTML.</p>
    </section>
    <section id="about">
        <h2>About</h2>
        <p>This site demonstrates a basic layout for a one-page site using PHP.</p>
    </section>
    <section id="contact">
        <h2>Contact</h2>
        <p>Email: example@example.com</p>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My One Page Site</p>
    </footer>
</body>
</html>