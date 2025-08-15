<?php
// Personal info
$name = "Chad Cyril Lagada";
$profession = "Aspiring Web Developer";
$bio = "Hi! I'm Chad Cyril Lagada. I'm passionate about technology and love learning how websites are built. My hobbies include watching sports, coding, and exploring new tools.";
$hobbies = ["Watching sports", "Coding", "Listening to music", "Exploring web design"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome - <?php echo $name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- External CSS -->
</head>
<body>

<header>
    <h1><?php echo $name; ?></h1>
    <p><?php echo $profession; ?></p>
</header>

<section>
    <h2>About Me</h2>
    <p><?php echo $bio; ?></p>
</section>

<section>
    <h2>Hobbies</h2>
    <ul>
        <?php foreach ($hobbies as $hobby): ?>
            <li><?php echo htmlspecialchars($hobby); ?></li>
        <?php endforeach; ?>
    </ul>
</section>

<section>
    <h2>Contact Me</h2>
    <p>If you'd like to get in touch, feel free to click the button below.</p>
    <a href="mailto:your-email@example.com" class="contact-btn">Send Email</a>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?>. All rights reserved.</p>
</footer>

</body>
</html>
