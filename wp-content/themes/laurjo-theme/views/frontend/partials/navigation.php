<?php

// desktop view ?>
<div class="overlay align-middle row is-active" id="overlay">
    <div class="columns small-20 small-offset-2">
        <?php wp_nav_menu(array(
            'menu' => 'main_nav',
            'container_class' => 'row align-middle',
            'menu_class' => 'menu vertical columns small-12 main-navigation'
        )); ?>
        <?php wp_nav_menu(array(
            'menu' => 'sub_nav',
            'container_class' => 'row align-middle sub-nav-container',
            'menu_class' => 'menu vertical columns small-12 sub-navigation'
        )); ?>
        <div class="social-buttons">
            <?php
                $icons = get_field('social_icons', 'options');
                foreach ($icons as $icon) { ?>
                    <a target=_blank href="<?= $icon['link']; ?>"><i class="fab fa-<?= $icon['icon']; ?>"></i></a>
                <?php }
            ?>
        </div>
    </div>
</div>
<div class="navbar">
    <nav class="">
        <div class="logo">
            <a href="/">
                <img src="<?= get_field('site_logo', 'option'); ?>" alt="">
            </a>
        </div>
    </nav>
</div>
<div class="sidebar columns small-12 medium-6">
    <div class="row align-justify align-middle">
        <div class="columns small-18 medium-12">
            <h6 class="menu-text hide-for-small-only show for-medium-up">collapse</h6>
        </div>
        <button class="columns small-6 medium-6 align-middle hamburger hamburger--spring is-active" type="button" aria-label="Menu" aria-controls="navigation">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</div>


<?php
// mobile view ?>
