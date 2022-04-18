<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <title>Contact form tutorial</</title>
        <link href="" rel="stylesheet" href="/css/master.css">
        <!-- Fonts: -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <!-- Fonts above -->
    </head>    
    <body>
        <main>
            <p> SEND E-MAIL</p>
            <form class="contact-form" action="contactofrm.php" method="post">
                <input type="text" name="name" placeholder="Full Name" value="">
                <input type="text" name="mail" placeholder="Your E-mail" value="">
                <input type="text" name="subject" placeholder="Subject" value="">
                <textarea name="message" placeholder="Message" value=""></textarea>
                <button type="submit" name="submit">SEND MAIL</button>
            </form>
        </main>
    </body>
</html>