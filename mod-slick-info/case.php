<?php
defined('_JEXEC') or die();

$id = "slider-" . uniqid();
$items = $list;
?>


<div class="slicky">
  <?php foreach ($items as $itemKey => $item) : ?>
    <?php
    $attrib = json_decode($item->attribs);
    $image = $attrib->image;
    $extra1 = $attrib->extraContent1;
    ?>
   
    <div class="item <?php if ($itemKey == 0) echo "active"; ?>">
      <!--INNER STRUCTURE OF EACH ITEM HERE-->
      <div class="row-fluid">
        <div class="span6 s-image">
          <img src="<?php echo $image; ?>">
        </div>
        <div class="span6 s-text">
            <h2><?php  echo  $item->title;?></h2>
          <div class="info scrollbar-style">
            <?php echo $extra1; ?>
          </div>
        </div>
      </div>
      <!-- -->
    </div>
  <?php endforeach; ?>
</div>


</div>
