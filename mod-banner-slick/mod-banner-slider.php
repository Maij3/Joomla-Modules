<?php
defined('_JEXEC') or die;

$items = $params->get('items');
$uid = "slider-".uniqid();
?>

<div id="<?php echo $uid; ?>" class="carousel slide">
    <!-- <ol class="carousel-indicators">
        <?php $n = -1; ?>
        <?php foreach ($items as $item) : ?>
            <?php $n++; ?>
            <li data-target="<?php echo "#$uid"; ?>" data-slide-to="<?php echo $n; ?>" <?php if ($n == 0) echo "class=\"active\"" ?>></li>
        <?php endforeach; ?>
    </ol> -->

    <div class="carousel-inner">
        <?php $n = -1; ?>
        <?php foreach ($items as $item) : ?>
            <?php $n++; ?>
            <div class="item <?php if ($n == 0) echo "active"; ?>">
                <div class="banner-all-info">
                    <?php echo $item->htmlnew; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- <a class="left carousel-control" href="<?php echo "#$uid"; ?>" data-slide="prev">‹</a>
    <a class="right carousel-control" href="<?php echo "#$uid"; ?>" data-slide="next">›</a> -->
</div>

<script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            $('<?php echo "#$uid"; ?>').carousel({
                interval: 5000
            });
        });
    })(jQuery);
</script>