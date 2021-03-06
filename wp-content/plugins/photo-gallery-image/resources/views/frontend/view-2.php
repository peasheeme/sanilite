<?php
/**
 * @var gallery_data string
 * @var images array
 */

$gallery_options = array();
$gallery_options = GDGallery()->settings->getOptionsByView("carousel");
$json = json_encode($gallery_options);

wp_enqueue_script("gdgallerycarousel", \GDGallery()->pluginUrl() . "/resources/assets/js/frontend/ug-theme-carousel.js", array('jquery'), false, true);
?>

<div id="gdgallery_container_<?= $gallery_data->id_gallery ?>" style="display:none;" data-view="carousel">
    <?php foreach ($images as $key => $val):
        $video_id = ($val->type == "image") ? "" : "data-videoid = '" . $val->video_id . "'";
        ?>
        <a href="<?= $val->link ?>">
            <img alt="<?= $val->name ?>"
                 data-type="<?= $val->type ?>"
                 src="<?= $val->url ?>"
                 data-image="<?= $val->url ?>"
                 data-description="<?= $val->description ?>"
                <?= $video_id ?>
                 style="display:block">
        </a>
    <?php endforeach; ?>
</div>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        var container = jQuery("#gdgallery_container_<?= $gallery_data->id_gallery ?>");
        container.unitegallery(<?= $json ?>);
    });
</script>