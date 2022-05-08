<?php
defined('_JEXEC') or die;

$items = $list;
?>
<h2>TESTIMONIALS</h2>
<div class="container-all slick-testimonial">
    <?php foreach ($items as $itemKey => $item) : ?>
        <div class="container-item ">
            <h3 class="title-article"><?php echo strip_tags($item->title); ?></h3>
          	<p>Criminal Defense Matter</p>
     		<img class="quote" src="images/quote.png" alt="" />
            <p class="introtext"><?php echo JHtml::_('string.truncate', strip_tags($item->introtext), 200); ?></p>
        </div>
    <?php endforeach; ?>
</div>