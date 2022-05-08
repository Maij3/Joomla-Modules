<?php
defined('_JEXEC') or die;
    
    $items = $params->get('items');
    $preHTML = $params->get('preHTMLContent');
    $postHTML = $params->get('postHTMLContent');
    $num = 0;
    $id = "Modal".uniqid();
    $modals = [];
?>
<?php if ($preHTML) echo $preHTML; ?>

<div class="flex-container">
	<?php foreach ($items as $item):?>
        <?php $num++;?>
   
        
        <?php if ($item->alternativeLink):?>
            <a class="flex-item" href="<?php echo $item->alternativeLink; ?>">
        <?php else :?>
            <a class="modalButton flex-item" href="<?php echo "#$id-$num"; ?>" role="button" data-toggle="modal">
        <?php endif ;?>
            <?php if ($item->background): ?>
            <div class='flex-img'>
            	<img src="<?php echo $item->background;?>" alt="" />
            </div>        
            <?php endif;?>
                <h3><?php echo $item->title ;?></h3>
            </a>
    
        
        <?php ob_start(); ?>

             
            <div id="<?php echo "$id-$num";?>" class="modal hide fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 class="module-title"><?php echo $item->title; ?></h3>
                </div>
                    <div class="modal-body scroll-style-1">
                    <?php if ($item->popupImage): ?>
                        <div class="flex-container">
                            <img class="flex-3" src="<?php echo $item->popupImage; ?>" alt="">
                            <div class="flex-11">
                                <?php echo $item->text; ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <div><?php echo $item->text; ?></div>
                    <?php endif; ?>
                </div>
            </div>


        <?php $modals[] = ob_get_clean();?>
	<?php endforeach;?>
</div>
<?php if ($postHTML) echo $postHTML; ?>
<?php 
    foreach ($modals as $modal){
    echo $modal; 
    }
?>

