<?php

require 'includes/header.php';
?>

<h1>POST Test</h1>

<form method="POST">
<label>Titel:</label><br>
<input type="text" name="titel"><br><br>

<button type="submit">Versturen</button>
</form>

<hr>

<h2>Inhoud van $_POST</h2>

<pre>
<?php
print_r($_POST);
?>
</pre>

<h2>Waarde van titel</h2>

<?php
if (isset($_POST['titel'])) {
echo $_POST['titel'];
} else {
echo "Nog geen titel ingevuld.";
}
?>

<?php
include 'includes/footer.php';
?>