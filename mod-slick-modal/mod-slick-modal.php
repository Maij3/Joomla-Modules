<?php
// no direct access
defined('_JEXEC') or die();

$uid = "slider-" . uniqid();
$introcount = (count($list));
$counter = 0;
$id = "modal-" . uniqid();
$item = $list;
$modals = [];
?>

<div id="<?php echo $uid; ?>" class="carousel slide <?php echo $moduleclass_sfx; ?>">
    <ol class="carousel-indicators">
        <?php $n = -1; ?>
        <?php foreach ($list as $item) : ?>
            <?php $n++; ?>
            <li data-target="<?php echo "#$uid"; ?>" data-slide-to="<?php echo $n; ?>" <?php if ($n == 0) echo "class=\"active\"" ?>>
            </li>
        <?php endforeach; ?>
    </ol>

    <!-- Carousel items -->
    <div class="carousel-inner">
        <?php $n = -1; ?>
        <?php $slideItems = -1; ?>
        <?php foreach ($list as $key => $item) : ?>
            <?php
            $n++;
            $slideItems++;
            $counter++;
            ?>
            <?php if ($slideItems == 0) : ?>
                <div class="item <?php if ($n == 0) echo "active"; ?>">
                    <div class="container-all-item">
                    <?php endif; ?>
                    <div class="container-item">
                        <!-- Button to trigger modal -->
                        <?php
                        $title = $item->title;
                        $images = json_decode($item->images);
                        $image_intro = $images->image_intro;
                        $introtext = JHtml::_('string.truncate', strip_tags($item->introtext), 210);
                        ?>
                        <div class="container-modal" style="background-image:url(<?php echo $image_intro  ?>)">
                            <a class="modal-" href="#<?php echo $id . '-' . $key; ?>" role="button" data-toggle="modal">
                                <h3 class="title"><?php echo $title; ?></h3>
                            </a>
                        </div>


                        <?php ob_start(); ?>
                        <div id="<?php echo $id . '-' . $key; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>
                            <!-- new -->
                            <div class="modal-body">
                                <div class="row-fluid">
                                    <div class="span6 modal-img"><img class="img-m" data-ratio="wide" src="<?php echo $image_intro; ?>" alt="<?php echo $title; ?>"></div>
                                    <div class="span6 modal-text">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel"><?php echo $title; ?></h3>
                                        </div>
                                        <div class="text"><?php echo $item->introtext; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $modals[] = ob_get_clean(); ?>
                    </div>
                    <?php if (($slideItems == 5) or ($counter == $introcount)) : ?>
                        <?php $slideItems = -1; ?>
                    </div>

                </div>
            <?php endif; ?>

        <?php endforeach; ?>
    </div>

     <a class="left carousel-control" href="<?php echo "#$uid"; ?>" data-slide="prev"><img src="images/left-arrow.png" alt="" /></a>
    <a class="right carousel-control" href="<?php echo "#$uid"; ?>" data-slide="next"><img src="images/right-arrow.png" alt="" /></a> 

    <?php
    foreach ($modals as $modal) {
        echo $modal;
    } ?>
</div>


<script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            $('<?php echo "#$uid"; ?>').carousel({
                interval: 20000
            });
        });
    })(jQuery);
</script>