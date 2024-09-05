<!DOCTYPE html>
<html lang="EN">
<head>
<?php include 'KAWSAR_PHP\headpartJK.php'; ?>
<?php include 'KAWSAR_PHP\tempResultJK.php'; ?>
</head>
<body>
    <header><?php include 'KAWSAR_PHP\headerJK.php'?></header>
    <article><?php include 'KAWSAR_PHP\articleJK.php'?></article>
    <h2>Regional Temperatures</h2>
    <table>
        <tr>
            <th>id</th>
            <th>City</th>
            <th>Local Temperature</th>
        </tr>
        <?php include 'KAWSAR_PHP\tempTableJK.php'  ?>
    </table>    
    <footer><?php include 'KAWSAR_PHP\footerJK.php'?></footer>
</body>
</html>