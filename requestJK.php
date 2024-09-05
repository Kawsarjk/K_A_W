<!DOCTYPE html>
<html lang="EN">
<head>
<?php include 'KAWSAR_PHP\headpartJK.php'?>
</head>
<body>
    <header>
    <?php include 'KAWSAR_PHP\headerJK.php'?>
    </header>
    <article>
    <?php include 'KAWSAR_PHP\articleJK.php'?>
    </article>
    <h2>Add</h2>
    <form action="mainJK.php" method="POST">
        <table>
            <tr><td></td><td>Enter Request</td></tr>
            <tr><td>Location</td><td><input type="text" name="country"></td></tr>
            <tr><td>food name</td><td><input type="text" name="ketofood"></td></tr>
            <tr><td>Price</td><td><input type="text" name="price"></td></tr>
            <tr><td></td><td><input type="submit" value="Save"></td></tr>
        </table>
    </form>
    <footer><?php include 'KAWSAR_PHP\footerJK.php'?></footer>
</body>
</html>