<?php get_header();

$images = get_field('gallery_images');
$count = count($images);
?>
<script type="text/javascript">
    window.addEventListener('load', AOS.refresh);
</script>

<div class="images-container total-<?= $count; ?>">
    <?php for ($i=0; $i < $count; $i++) { ?>
        <?php if (!empty($images[$i]['project_title'])): ?>
            <a data-aos="fade-right" data-aos-delay="50" <?php if (!empty($images[$i]['image_link']['target'])){echo 'target=_blank';} ?> href="<?= $images[$i]['image_link']['url']; ?>" class="image-link image-<?= $i; ?> <?php if (!empty($images[$i]['image_link'])){echo 'hover-positive';} ?>"  style="background-image: url('<?= $images[$i]['image_file']; ?>');" alt="">
                <?php if (!empty($images[$i]['project_title'])): ?>
                    <div class="center-container grid-x align-middle">
                        <h4 class="hide-for-small-only show-for-medium-up cell auto hover-text underline"><?= $images[$i]['project_title']; ?></h4>
                    </div>
                <?php endif; ?>
            </a>
        <?php else: ?>
            <div data-aos="fade-right" data-aos-delay="50" class="image-link image-<?= $i; ?>" style="background-image: url('<?= $images[$i]['image_file']; ?>');" alt=""></div>
        <?php endif; ?>
    <?php } ?>
</div>

<div class="page-content-container row total-<?= $count; ?>">
    <div class="page-content columns small-20 small-offset-1 medium-offset-0">
        <div class="header-content row align-middle">
            <h1 class="columns small-23 medium-11 <?php if(is_front_page()){echo 'home';}; ?>"><?= get_field('page_header'); ?></h1>
        </div>
    </div>
</div>

<?php get_footer() ?>
