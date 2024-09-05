<!DOCTYPE html>
<html lang="EN">
<head>
<?php include 'KAWSAR_PHP\headpartJK.php'; ?>
<?php include 'KAWSAR_PHP\resultJK.php'; ?>
</head>
<body>
    <header><?php include 'KAWSAR_PHP\headerJK.php'?></header>
    <article><?php include 'KAWSAR_PHP\articleJK.php'?></article>
    <h2>See offer</h2>
    <?php echo 'The number of current offers are: ', $num ?>
    <table>
        <tr>
            <th>id</th>
            <th>Location</th>
            <th>Keto food list</th>
            <th>Price in Euros</th>
        </tr>
        <?php include 'KAWSAR_PHP\KetofoodTableJK.php'  ?>
    </table>    
    <footer><?php include 'KAWSAR_PHP\footerJK.php'?></footer>
</body>
</html>