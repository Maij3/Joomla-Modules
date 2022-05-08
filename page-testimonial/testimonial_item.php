<?php
defined('_JEXEC') or die;

$params = $this->item->params;
$item = $this->item;
$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
?>

<div class="testimonial-item" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
    <div class="row-fluid">
        <div class="art-section">
  			<div class="quote"></div>
  			<h3 class="testimonial-item-title">
                <?php echo $item->title; ?>
            </h3>
            <?php echo $item->introtext; ?>
                  
        </div>
    </div>
</div>