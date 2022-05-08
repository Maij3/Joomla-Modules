<?php
defined('_JEXEC') or die();

$items = $params->get('items');
$fore = $params->get('foreContent');
$after = $params->get('afterContent');
?>
<?php if ($fore) echo $fore; ?>
<div class="slicky-mod-office-locations">
    <?php foreach ($items as $itemKey => $item) : ?>
        <div class="mod-office-locations-item">
            <?php echo $item->htmlContent; ?>
        </div>
    <?php endforeach; ?>
</div>
<?php if ($after) echo $after; ?>
