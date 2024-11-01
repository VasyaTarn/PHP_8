<?php
/** @var array $authorInfo */

$this->title = 'Информация об авторе';
?>

<h1><?= $this->title ?></h1>

<p><strong>Имя:</strong> <?= htmlspecialchars($authorInfo['name'], ENT_QUOTES, 'UTF-8') ?></p>
<p><strong>Профессия:</strong> <?= htmlspecialchars($authorInfo['profession'], ENT_QUOTES, 'UTF-8') ?></p>
<p><strong>Описание:</strong> <?= htmlspecialchars($authorInfo['description'], ENT_QUOTES, 'UTF-8') ?></p>