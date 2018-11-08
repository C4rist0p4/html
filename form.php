<?php 
mail(
    "Christoph_S@outlook.com", 
    "Es gib eine neine Kontaktanftage",
    "Email: {$_POST['email']}, Name:{$_POST['name']}, Nachricht: {$_POST['message']}");

header("Location: main.php?contactes=1")
?>
