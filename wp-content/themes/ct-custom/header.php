<?php
$theme_settings = get_option('theme_settings');
$logo = isset($theme_settings['logo']) ? $theme_settings['logo'] : '';
$phone_number = isset($theme_settings['phone_number']) ? $theme_settings['phone_number'] : '';
$address = isset($theme_settings['address']) ? $theme_settings['address'] : '';
$fax_number = isset($theme_settings['fax_number']) ? $theme_settings['fax_number'] : '';
$social_media = isset($theme_settings['social_media']) ? $theme_settings['social_media'] : '';
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<section class="top-bar">
		<div class="container-fluid">
			<div class="row justify-space-between text-center">
				<div class="col-md-6">
					<h3>CALL US NOW! <span> 385.154.11.28.35 </span> </h3>
				</div>
				<div class="col-md-6">
					<h3>Login <span> Signup</span> </h3>
				</div>
			</div>
		</div>
	</section>

	<section class="headercs">

		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div id="logo">
						<?php if (!empty($logo)) : ?>
							<img src="<?php echo esc_url($logo); ?>" alt="Logo">
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-8">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'ct-custom'); ?></button>
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						));
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</section>



</body>

</html>




