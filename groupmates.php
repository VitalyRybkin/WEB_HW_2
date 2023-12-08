<?php

$db = new SQLite3("groupmates.db");

$query = "SELECT * FROM groupmates;";
$result = $db->query($query);

$row = $result->fetchArray(SQLITE3_ASSOC);
$json = json_encode($row, JSON_PRETTY_PRINT, JSON_UNESCAPED_UNICODE);
echo $json;

$db->close();

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
    <!-- <script src="./script/groupmates.js"></script> -->
    <title>Groupmates</title>
    
</head>
<body>
    <header class="header-top center">
        <nav class="header-top-box container">
            <a href="index.html" class="header-top-box__lnk">Main</a>
            <a href="chat.html" class="header-top-box__lnk">Chat</a>
            <a href="groupmates.html" class="header-top-box__lnk">Groupmates</a>
        </nav>
    </header>
    <header class="header center">
        <div class="header-box container">
            <h2 class="header">MAIN</h2>
         </div>
    </header>
    <main class="content center">
        <div class="container container_advanced">
            <h3 class="main-header">Groupmates:</h3>
            <div id="groupmates" class="groupmates-box">
                <p><?php echo $json;?></p>
            </div>
        </div>
    </main>
    <footer class="header center">
        <div class="header-top center">
            <nav class="header-top-box container">
                <a href="index.html" class="header-top-box__lnk">Main</a>
                <a href="chat.html" class="header-top-box__lnk">Chat</a>
                <a href="chat.html" class="header-top-box__lnk">Groupmates</a>
            </nav>
        </div>
    </footer>
</body>
</html>