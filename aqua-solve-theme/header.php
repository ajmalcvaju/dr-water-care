<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo aqua_solve_asset('images/favicon.png'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <!-- Top Contact Bar -->
    <div class="top-bar">
        <div class="container top-bar-content">
            <div class="top-left-info">
                <span class="iso-badge">ISO 9001:2015 CERTIFIED</span>
                <span>AN ISO 9001:2015 CERTIFIED COMPANY</span>
            </div>
            <div class="top-right-info">
                <span class="top-link" id="headerPhoneLink">
                    <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                    Contact:&nbsp;
                    <a href="tel:+919946450452" style="color: inherit; text-decoration: none;">99464 50452</a>
                    &nbsp;/&nbsp;
                    <a href="tel:+919846253025" style="color: inherit; text-decoration: none;">98462 53025</a>
                </span>
                <button 
                    class="btn btn-primary btn-card trigger-quote" 
                    data-product="General Consultation"
                    id="topRequestDemo"
                >
                    REQUEST QUOTE
                </button>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <div class="container">
        <nav class="main-nav">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" id="logoLink">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <img src="<?php echo aqua_solve_asset('images/aqua_solve.png'); ?>" alt="<?php bloginfo('name'); ?>" class="logo-img" />
                <?php endif; ?>
            </a>
            
            <button class="hamburger" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <?php
            if (has_nav_menu('primary')) :
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav-links',
                    'menu_id'        => 'navLinks',
                    'walker'         => new Aqua_Solve_Nav_Walker(),
                ));
            else :
                $is_home = is_front_page() || is_home();
                $is_about = is_page('about');
                $is_products = is_page('products') || is_post_type_archive('product');
                $is_services = is_page('services') || is_post_type_archive('service');
                $is_contact = is_page('contact');
            ?>
                <ul class="nav-links" id="navLinks">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>" class="<?php echo $is_home ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(aqua_solve_page_url('about')); ?>" class="<?php echo $is_about ? 'active' : ''; ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url(aqua_solve_page_url('products')); ?>" class="<?php echo $is_products ? 'active' : ''; ?>">Products</a></li>
                    <li><a href="<?php echo esc_url(aqua_solve_page_url('services')); ?>" class="<?php echo $is_services ? 'active' : ''; ?>">Services & Lab</a></li>
                    <li><a href="<?php echo esc_url(aqua_solve_page_url('contact')); ?>" class="<?php echo $is_contact ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            <?php endif; ?>
        </nav>
    </div>
</header>
