<?php
defined('_JEXEC') or die;

$params = $this->params;

// This solves title and H1 duplication problem
$doc = JFactory::getDocument();
$doc->setTitle($params->get('page_heading')." - ".$this->pagination->getPagesCounter());
?>
<div class="blog" itemscope itemtype="http://schema.org/Blog">

	<h1 class="page-heading" itemprop="name">
    	<?php echo $params->get('page_heading'); ?>
	</h1>



	<?php if (count($this->intro_items)) : ?>
		<?php foreach ($this->intro_items as $key => &$item) : ?>
			<?php
			ob_start();
			$this->item = &$item;
			echo $this->loadTemplate('item');
			$buffer[] = ob_get_clean();
			?>
		<?php endforeach; ?>
		
		<div class="blog-items">
			<?php
			echo JLayoutHelper::render('jnilla.bootstrap.row-fluid',
				array(
					"columns" => $this->columns,
					"items" => $buffer,
				)
			);
			?>
		</div>
	<?php endif; ?>

</div>

<div class="show-more-btn-wrapp"><button type="button" class="btn-style-1 show-more-btn">View More</button></div>

