<?php
defined('_JEXEC') or die;

$items = $list;

foreach ($items as $item){
	$accordionItems[] = array(
		'title' => $item->title,
		'content' => $item->introtext.$item->fulltext,
	);
}
echo JLayoutHelper::render("jnilla.bootstrap.accordion", array('items' => $accordionItems));
?>
<button class="btn-style-1 show-more-btn">View All</button>