<?php

// Template Name: Case Study

get_header();

$images = get_field('gallery_images');
$count = count($images);


?>

<div class="images-container mobile-case-study">

    <?php
    for ($i=0; $i < $count; $i++) { ?>
        <?php if (!empty($images[$i]['image_link'])): ?>
            <a <?php if (!empty($images[$i]['image_link']['target'])){echo 'target=_blank';} ?> href="<?= $images[$i]['image_link']['url']; ?>" class="image-link image-<?= $i; ?>" style="background-image: url('<?= $images[$i]['image_file']; ?>');" alt=""></a>
        <?php else: ?>
            <div class="image-link image-<?= $i; ?>" style="background-image: url('<?= $images[$i]['image_file']; ?>');" alt=""></div>
        <?php endif; ?>

    <?php } ?>
</div>
<div class="case-study-content-container row total-<?= $count; ?>">

    <div class="page-content columns small-22 small-offset-1 medium-20 medium-offset-0">
        <div class="header-content row align-middle">
            <h2 class="columns small-24 medium-22"><?= get_field('project_title'); ?></h2>
            <?php
            $client = get_field('client_group');
            $roles = get_field('roles_group');
            $website = get_field('website_group');
            if (!empty($client['client_name']) || !empty($roles['roles']) || !empty($website['full_website_link'])): // checks if ANY of the three categories are empty
            ?>
                <div class="columns small-20 medium-18">
                    <div class="row stats-container">
                        <!-- each category individually -->
                        <?php
                        if (!empty($client)): ?>
                            <div class="columns stat-block">
                                <div class="row align-center">
                                    <h5 class="column-title columns small-24"><?= $client['client_column_headline']; ?></h5>
                                    <h4 class="column-content columns small-24"><?= $client['client_name']; ?></h4>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php
                        if (!empty($roles)): ?>
                            <div class="columns stat-block">
                                <div class="row align-center">
                                    <h5 class="column-title columns small-24"><?= $roles['roles_column_headline']; ?></h5>
                                    <h4 class="column-content columns small-24"><?= $roles['roles']; ?></h4>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php
                        if (!empty($website)): ?>
                            <div class="columns stat-block">
                                <div class="row align-center">
                                    <h5 class="column-title columns small-24"><?= $website['website_column_headline']; ?></h5>
                                    <h4 class="column-content columns small-24">
                                        <a target=_blank class="btn-alt" href="<?= $website['full_website_link']; ?>"><?= $website['full_website_link']; ?></a>
                                    </h4>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="body-content row">
            <div class="columns medium-10 medium-offset-14">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
<?php
$cta = get_field('cta_group');
$arrow = $cta['cta_arrow_direction']; // will return either 'btn-rev' for left or 'btn' for right
?>

<?php if ($cta['cta_on_page'] == 1): ?>
    <div class="back-button-container columns medium-20">
        <div class="row align-right align-middle">
            <?php
            // this is for a CTA link that goes back up to parent page
            if ( $cta['back_to_parent'] == 1 ) { ?>
                <a class="columns small-20 medium-9 back-button <?= $arrow; ?>" href="<?php echo get_permalink( $post->post_parent ); ?>" >
                    <?= $cta['cta_button_text']; ?>
                    <span></span>
                </a>
            <?php } else {
            // this is for a CTA link that goes to a LINKED PAGE OR A URL ?>
                <a <?php if (!empty($cta['cta_button_link']['target'])){echo 'target=_blank';} ?> class="fwd-button columns small-20 medium-9 back-button <?= $arrow; ?>" href="<?= $cta['cta_button_link']['url']; ?>" >
                    <?= $cta['cta_button_text']; ?>
                    <span></span>
                </a>
            <?php } ?>
        </div>
    </div>
<?php endif; ?>

<?php get_footer() ?>
