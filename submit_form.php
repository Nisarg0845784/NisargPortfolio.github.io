<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'Name: ' . htmlspecialchars(trim($_POST['name'])) . '<br>';
    echo 'Message: ' . htmlspecialchars(trim($_POST['message'])) . '<br>';
}
?>
