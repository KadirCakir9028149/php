<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "<h1>Geselecteerd item: $id</h1>";
} else {
    echo "Geen ID gekozen.";
}
?>