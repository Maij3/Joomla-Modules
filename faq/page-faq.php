<?php
defined('_JEXEC') or die;

$items = $list;
?>

<?php if ($this->params->get('show_page_heading', 1)) : ?>
	<h1 class="page-heading"> <?php echo $this->escape($this->params->get('page_heading')); ?></h1>
<?php endif; ?>
	<div class="description"><?php echo $this->params->get('description');?></div>
<?php
foreach ($this->items as $item){
   
	    $accordionItems[] = array(
		'title' => $item->title,
		'content' => $item->introtext.$item->fulltext,
	);
}
?>
<div class="content-article">
    <div class="row-fluid">
        <div class="span12">
        	<div class="article-text">
        		<?php echo JLayoutHelper::render("jnilla.bootstrap.accordion", array('items' => $accordionItems)); ?>
        	</div>
        </div>
    </div>
</div>
