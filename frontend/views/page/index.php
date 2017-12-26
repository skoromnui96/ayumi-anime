<?php

$this->title = 'Page'. ': ' . $page->name;
$this->params['breadcrumbs'][] = ['label' => 'Pages'];
$this->params['breadcrumbs'][] = ['label' => $page->name,  $page->id];

?>

<?=$page->text ?>