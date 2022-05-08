<?php
defined('_JEXEC') or die;

$items = $list;
?>
<div class="category-intro">
    <?php echo $params->get('category_intro'); ?>
</div>
<div class="container-all">
    <?php foreach ($items as $item) : ?>
        <div class="item-holder">
             <div class="date-publish">
                <?php echo JHTML::_('date', $item->created, "F j, Y"); ?>
            </div> 
            <div class="row-fluid">
            <!--    <div class="box-title">
                    <div class="title"><?php echo $item->title; ?></div>
                </div>-->
                <div class="box-text">
                    <div class="info"><?php echo $item->introtext; ?></div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="show-more-btn-wrapp"><button type="button" class="btn-2 show-more-btn">View More</button></div>
</div>