<?php
defined('_JEXEC') or die;

$params = $this->item->params;
$item = $this->item;
$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
?>
<div class="blog-item" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="row-fluid">
		<div class="span4">
			<div class="blog-item-image">
				<a href="<?php echo $link; ?>">
					<?php echo JLayoutHelper::render('jnilla.article-intro-image',
						array(
							'params' => $params,
							'item' => $this->item,
							'attr' => 'class="jn-holder" data-holder="wide"')); ?>
				</a>
			</div>
		</div>
		<div class="span8">
			<h3 class="blog-item-heading">
				<a href="<?php echo $link; ?>">
					<?php echo $item->title; ?>
				</a>
			</h3>

			<p class="blog-item-text">
				<?php echo JHtml::_('string.truncate', strip_tags($item->introtext, '<a>'), 255); ?>
			</p>

			<a class="blog-item-readmore" href="<?php echo $link; ?>">
				<?php echo JText::_('COM_CONTENT_READ_MORE_TITLE'); ?>
			</a>
		</div>
	</div>
</div>
