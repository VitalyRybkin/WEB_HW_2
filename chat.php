<?php

$messages = file_get_contents("chat.txt");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- <script src="./script/messaging.js" defer></script> -->
    <title>Chat</title>
</head>
<body>


    <div class="header-top center">
        <nav class="header-top-box container">
            <a href="index.html" class="header-top-box__lnk">Main</a>
            <a href="chat.html" class="header-top-box__lnk">Chat</a>
            <a href="groupmates.html" class="header-top-box__lnk">Groupmates</a>
        </nav>
    </div>
    <div class="header center">
        <div class="header-box container">
            <h2 class="header">ADMIN CHAT</h2>
            <div class="header-box__form">
                <input id="user-name" placeholder="Enter Your Name" type="text"  class="header-box__input">
                <input id="user-message" placeholder="Enter Your Message" type="text"  class="header-box__input">
                <button class="header-box_button" onclick="sendMessage()"><span>Send</span></button>
            </div>
        </div>
    </div>
    <main class="content center">
        <div class="container container_advanced">
            <h3 class="main-header">Messaging:</h3>
            <div id="messages" class="message-box">//like
                <p><?php echo $messages;?></p>
            </div>
        </div>
    </main>
    <footer class="header center">
        <div class="header-top center">
            <nav class="header-top-box container">
                <a href="index.html" class="header-top-box__lnk">Main</a>
                <a href="chat.html" class="header-top-box__lnk">Chat</a>
                <a href="groupmates.html" class="header-top-box__lnk">Groupmates</a>
            </nav>
        </div>
    </footer>
</body>
</html>