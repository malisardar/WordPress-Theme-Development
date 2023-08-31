<style>
	.logo-preview img {
    width: 15% !important;
}
</style>

<?php
function custom_theme_settings_page() {
    add_menu_page(
        'Theme Settings',
        'Theme Settings',
        'manage_options',
        'theme-settings',
        'render_theme_settings_page',
        'dashicons-admin-generic',
        30
    );
}
add_action('admin_menu', 'custom_theme_settings_page');

function render_theme_settings_page() {
    ?>
    <div class="wrap">
        <h2>Theme Settings</h2>
        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php settings_fields('theme_settings_group'); ?>
            <?php do_settings_sections('theme-settings'); ?>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
function custom_theme_settings_init() {
    register_setting('theme_settings_group', 'theme_settings', 'sanitize_theme_settings');

    add_settings_section('general_section', 'General Settings', '', 'theme-settings');

    add_settings_field('logo', 'Logo', 'render_logo_field', 'theme-settings', 'general_section');
    add_settings_field('phone_number', 'Phone Number', 'render_phone_number_field', 'theme-settings', 'general_section');
    add_settings_field('address', 'Address', 'render_address_field', 'theme-settings', 'general_section');
    add_settings_field('fax_number', 'Fax Number', 'render_fax_number_field', 'theme-settings', 'general_section');
    add_settings_field('social_media', 'Social Media Links', 'render_social_media_field', 'theme-settings', 'general_section');
}
add_action('admin_init', 'custom_theme_settings_init');

function render_logo_field() {
    $settings = get_option('theme_settings');
    echo '<input type="hidden" name="theme_settings[logo]" value="' . esc_attr($settings['logo']) . '" />';
    echo '<input type="file" name="logo_upload" accept="image/*" />';
    if (!empty($settings['logo'])) {
        echo '<div class="logo-preview"><img src="' . esc_url($settings['logo']) . '" alt="Logo" /></div>';
    }
}

function render_phone_number_field() {
    $settings = get_option('theme_settings');
    echo '<input type="text" name="theme_settings[phone_number]" value="' . esc_attr($settings['phone_number']) . '" />';
}

function render_address_field() {
    $settings = get_option('theme_settings');
    echo '<textarea name="theme_settings[address]" rows="4">' . esc_textarea($settings['address']) . '</textarea>';
}

function render_fax_number_field() {
    $settings = get_option('theme_settings');
    echo '<input type="text" name="theme_settings[fax_number]" value="' . esc_attr($settings['fax_number']) . '" />';
}

function render_social_media_field() {
    $settings = get_option('theme_settings');
    echo '<input type="text" name="theme_settings[social_media]" value="' . esc_attr($settings['social_media']) . '" />';
}
function render_settings_field($args) {
    $field = $args['field'];
    $settings = get_option('theme_settings');
    $value = isset($settings[$field]) ? $settings[$field] : '';

    if ($field === 'logo') {
        echo '<input type="hidden" name="theme_settings[logo]" value="' . esc_attr($value) . '" />';
        echo '<input type="file" name="logo_upload" accept="image/*" />';
        if (!empty($value)) {
            echo '<div class="logo-preview"><img src="' . esc_url($value) . '" alt="Logo" /></div>';
        }
    } else {
        if (!empty($value)) {
            echo '<input type="text" name="theme_settings[' . esc_attr($field) . ']" value="' . esc_attr($value) . '" />';
        }
    }
}
