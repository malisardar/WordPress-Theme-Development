<?php
$theme_settings = get_option('theme_settings');
$logo = isset($theme_settings['logo']) ? $theme_settings['logo'] : '';
$phone_number = isset($theme_settings['phone_number']) ? $theme_settings['phone_number'] : '';
$address = isset($theme_settings['address']) ? $theme_settings['address'] : '';
$fax_number = isset($theme_settings['fax_number']) ? $theme_settings['fax_number'] : '';
$social_media = isset($theme_settings['social_media']) ? $theme_settings['social_media'] : '';
?>


<?php
/*
Template Name: Homepage
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <section class="homepage">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <?php
        // Display Hero Section from Customizer
        if (get_theme_mod('hero_enabled', true)) :
        ?>

            <!-- Breadcrumb Navigation -->
            <?php if (function_exists('bcn_display')) : ?>
                <div class="breadcrumb-nav">
                    <?php bcn_display(); ?>
                </div>
            <?php endif; ?>


            <?php custom_theme_breadcrumbs(); ?>
            <section class="hero-section">
                <div class="container">
                    <div class="hero-content">
                        <h1><?php echo get_theme_mod('hero_title', 'Welcome to Our Website'); ?></h1>
                        <p><?php echo get_theme_mod('hero_description', 'We offer the best services for your needs.'); ?></p>
                        <a href="#services" class="button"><?php echo get_theme_mod('hero_button_text', 'Learn More'); ?></a>
                    </div>
                </div>

            </section>
        <?php endif; ?>

        <section id="services" class="services-section">
            <div class="container">

                <!-- Add service sections -->
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <h2>Submit Your Queries</h2>
                <?php
                $contact_form_shortcode = get_theme_mod('contact_form_shortcode');
                if (!empty($contact_form_shortcode)) {
                    echo do_shortcode($contact_form_shortcode);
                }
                ?>
            </div>
        </section></div>
            <div class="col-md-6">
        
            <div id="contact-info pt-5">
                <h2>Contact Information</h2>
        <?php if (!empty($phone_number)): ?>
            <p>Phone: <?php echo esc_html($phone_number); ?></p>
        <?php endif; ?>
        <?php if (!empty($address)): ?>
            <p>Address: <?php echo nl2br(esc_html($address)); ?></p>
        <?php endif; ?>
        <?php if (!empty($fax_number)): ?>
            <p>Fax: <?php echo esc_html($fax_number); ?></p>
        <?php endif; ?>
        <?php if (!empty($social_media)): ?>
            <p>Social Media: <?php echo esc_html($social_media); ?></p>
        <?php endif; ?>
    </div>
        </div class="col-md-6">
        </div>
    </div>
    </section>
      

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>