<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
<?php require_once '../block/header.php' ?>

<form action="../bd/check.php" method="post" class="form">
<p><input type="text" name="name" class="feedback-input" placeholder="Введите Имя"></p>
<p><input type="email" name="email" class="feedback-input" placeholder="Введите Email"></p>
<p><textarea name="message" class="feedback-input" placeholder="Message"></textarea></p>
<input type="submit" value="Submit" class="button-submit">
<div class="ease"></div>
</form>
<!--comment text id="message" id="email"-->

<?php require_once '../block/footer.php' ?>


<script src="../js/script.js"></script>

</body>
</html>