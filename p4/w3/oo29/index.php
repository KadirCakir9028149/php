<?php foreach ($items as $item): ?>

<h3><?= $item['titel'] ?></h3>

<a href="delete.php?id=<?= $item['id'] ?>">
Verwijderen
</a>

<?php endforeach; ?>