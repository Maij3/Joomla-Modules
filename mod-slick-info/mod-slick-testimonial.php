<?php
defined('_JEXEC') or die();

$items = $params->get('items');
$fore = $params->get('foreContent');
$after = $params->get('afterContent');
?>
<div class="slicky-testimonial">
    <?php foreach ($items as $itemKey => $item) : ?>
        <div class="testimonial-item">
            <?php echo "prueba"; ?>
        </div>
    <?php endforeach; ?>
</div>
