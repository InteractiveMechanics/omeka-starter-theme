<?php
    $pageTitle = __('Browse Items');
    echo head(array('title'=>$pageTitle, 'bodyclass'=>'items tags'));
?>
    <h1><?php echo $pageTitle; ?></h1>
    <?php $subnav = public_nav_items(); echo $subnav->setUlClass('nav nav-pills'); ?>
    <hr>

    <?php echo tag_cloud($tags, 'items/browse'); ?>

<?php echo foot(); ?>
