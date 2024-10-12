<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Games</title>
</head>
<body>
    <header>
        <h1>2</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="home.php">Головна</a></li>
            <li id="games-link" class="active">
                Games 
                <span id="arrow" onclick="toggleGamesDropdown()">&#9662;</span> <!-- Стрілочка -->
                <div id="games-dropdown" class="dropdown-menu">
                    <ul>
                        <li><a href="game1.php">Game 1</a></li>
                        <li><a href="game2.php">Game 2</a></li>
                        <li><a href="game3.php">Game 3</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="about.php">Про сайт</a></li>
            <li><a href="contacts.php">Контакти</a></li>
            <li><a href="chat.php">Chat</a></li>
        </ul>
    </nav>
	
	<h3>Додати коментар</h3>
        <form action="../script_php/comments_league_of_legends.php" method="post">
            <label for="name">Ім'я:</label>
            <input type="text" name="name" required><br>

            <label for="comment">Коментар:</label>
            <textarea name="comment" rows="4" required></textarea><br>

            <input type="submit" value="Додати коментар">
        </form>
        
    <div class="comments-section">
        <h2>Коментарі</h2>
   	<?php
        $comments = file_get_contents('../txt/league_of_legends.txt');
        if (!empty($comments)) {
            $commentsArray = explode("\n", $comments);
            foreach ($commentsArray as $comment) {
                echo '<h1 >' . $comment . '</h1>';
            }
        }
    ?> 
        </div>
	
    <footer>
        <?php
        $currentDateTime = date('Y-m-d H:i:s');
        echo "<p>$currentDateTime</p>";
        ?>
    </footer>

<script src="../script.js"></script>
</body>
</html>