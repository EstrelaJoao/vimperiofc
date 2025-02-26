<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */


//  add_action('init', function() {
//     global $wp_post_types;
//     error_log(print_r($wp_post_types, true));
// });


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.8.12' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_THEME_ORG_VERSION', file_exists( ASTRA_THEME_DIR . 'inc/w-org-version.php' ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.8.9' );

/**
 * Load in-house compatibility.
 */
if ( ASTRA_THEME_ORG_VERSION ) {
	require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_WEBSITE_BASE_URL', 'https://wpastra.com' );

/**
 * ToDo: Deprecate constants in future versions as they are no longer used in the codebase.
 */
define( 'ASTRA_PRO_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( '/pricing/', 'free-theme', 'dashboard', 'upgrade' ) : 'https://woocommerce.com/products/astra-pro/' );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( '/pricing/', 'free-theme', 'customizer', 'upgrade' ) : 'https://woocommerce.com/products/astra-pro/' );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if ( ! defined( 'ASTRA_SITES_VER' ) || version_compare( ASTRA_SITES_VER, '4.3.7', '<' ) || version_compare( ASTRA_SITES_VER, '4.4.4', '>' ) ) {
	// NPS Survey Integration
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * UTM Analytics lib file.
 */
require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-utm-analytics.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

// add_action('template_redirect', function() {
//     global $template;
//     echo '<h1 style="color: red; text-align: center;">🚀 TEMPLATE BEING USED: ' . basename($template) . '</h1>';
//     exit;
// });


function loop_pods_calendarios_homepage_elementor() {
    $args = array(
        'post_type'      => 'calendario',
        'posts_per_page' => 5,
        'orderby'        => 'date',
        'order'          => 'ASC',
    );

    $query = new WP_Query($args);
    $output = '';

    if ($query->have_posts()) {
        // Add a wrapper container for flexbox
        $output .= '<div class="calendarios-container" style="display: flex; flex-wrap: wrap; gap: 20px;">';
        
        while ($query->have_posts()) {
            $query->the_post();
			
            // Obtém os campos personalizados do Pods
            $weekday = get_post_meta(get_the_ID(), 'weekday', true);
            $match_day = get_post_meta(get_the_ID(), 'match_day', true);
            $matchweek_nr = get_post_meta(get_the_ID(), 'matchweek_nr', true);
            $match_time = get_post_meta(get_the_ID(), 'match_time', true);
            $match_field = get_post_meta(get_the_ID(), 'match_field', true);
			
            // Convert match_day to date and format as "dd.MM.yyyy"
            $match_day = date("d.m.Y", strtotime($match_day));
			
            // Formata a hora para "HH:MM"
            $match_time = $match_time ? date("H:i", strtotime($match_time)) : '';
			
            // Obtém os IDs das imagens (Home, Away, League)
            $home_logo_id = get_post_meta(get_the_ID(), 'home_logo', true);
            $away_logo_id = get_post_meta(get_the_ID(), 'away_logo', true);
            $league_logo_id = get_post_meta(get_the_ID(), 'league_logo', true);

            // Converte os IDs em URLs
            $home_logo_url = $home_logo_id ? wp_get_attachment_url($home_logo_id) : '';
            $away_logo_url = $away_logo_id ? wp_get_attachment_url($away_logo_id) : '';
            $league_logo_url = $league_logo_id ? wp_get_attachment_url($league_logo_id) : '';

            // Add a wrapper for each item
            $output .= '<div class="calendario-item">';
            $output .= '    <div class="elementor-element elementor-element-cda7006 e-con-full e-flex e-con e-child" data-id="cda7006" style="align-items: center;" data-element_type="container">';
            $output .= '        <div class="elementor-element elementor-element-7985423 jltma-glass-effect-no elementor-widget elementor-widget-image" data-id="7985423" data-element_type="widget" data-widget_type="image.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <img class="logo_liga_calendario" decoding="async" src="' . esc_url($league_logo_url) . '" title="logo_liga" alt="logo_liga" loading="lazy">';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-6e5ef37 jltma-glass-effect-no elementor-widget elementor-widget-heading" data-id="6e5ef37" data-element_type="widget" data-widget_type="heading.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <h4 class="elementor-heading-title elementor-size-default">' . esc_html($weekday) . '</h4>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-0606ad3 jltma-glass-effect-no elementor-widget elementor-widget-heading" data-id="0606ad3" data-element_type="widget" data-widget_type="heading.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <h5 class="elementor-heading-title elementor-size-default">' . esc_html($match_day) . '</h5>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-258b55e e-grid e-con-full e-con e-child" data-id="258b55e" data-element_type="container" style="margin-left: 25%;">';
            $output .= '            <div class="elementor-element elementor-element-fc5eac6 jltma-glass-effect-no elementor-widget elementor-widget-image" data-id="fc5eac6" data-element_type="widget" data-widget_type="image.default">';
            $output .= '                <div class="elementor-widget-container">';
            $output .= '                    <img decoding="async" class="calendario_team_logo" src="' . esc_url($home_logo_url) . '" title="equipa_casa" alt="equipa_casa" loading="lazy">';
            $output .= '                </div>';
            $output .= '            </div>';
            $output .= '            <div class="elementor-element elementor-element-b5f9475 jltma-glass-effect-no elementor-widget elementor-widget-image" data-id="b5f9475" data-element_type="widget" data-widget_type="image.default">';
            $output .= '                <div class="elementor-widget-container">';
            $output .= '                    <img decoding="async" class="calendario_team_logo" src="' . esc_url($away_logo_url) . '" title="equipa_fora" alt="equipa_fora" loading="lazy">';
            $output .= '                </div>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-2a81db8 jltma-glass-effect-no elementor-widget elementor-widget-heading" data-id="2a81db8" data-element_type="widget" data-widget_type="heading.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <p class="elementor-heading-title elementor-size-default">Jornada ' . esc_html($matchweek_nr) . ' - ' . esc_html($match_time) . '</p>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-9525afb jltma-glass-effect-no elementor-widget elementor-widget-heading" data-id="9525afb" data-element_type="widget" data-widget_type="heading.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <p class="elementor-heading-title elementor-size-default">' . esc_html($match_field) . '</p>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '    </div>';
            $output .= '</div>';
        }

        // Close the wrapper container
        $output .= '</div>';
    } else {
        $output .= '<p>Nenhum item encontrado.</p>';
    }

    wp_reset_postdata();
    return $output;
}
add_shortcode('pods_calendarios_homepage', 'loop_pods_calendarios_homepage_elementor');

function loop_pods_resultados_elementor() {
    $args = array(
        'post_type'      => 'resultado',
        'posts_per_page' => 5,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);
    $output = '';

    if ($query->have_posts()) {
        // Add a wrapper container for flexbox
        $output .= '<div class="resultados-container" style="display: flex; flex-wrap: wrap; gap: 20px;">';
        
        while ($query->have_posts()) {
            $query->the_post();
			
            // Obtém os campos personalizados do Pods
            $match_date = get_post_meta(get_the_ID(), 'match_date', true);
            $home_team = get_post_meta(get_the_ID(), 'home_team', true);
            $away_team = get_post_meta(get_the_ID(), 'away_team', true);
            $match_result = get_post_meta(get_the_ID(), 'match_result', true);
            $league_logo = get_post_meta(get_the_ID(), 'league_logo', true);
            $home_logo = get_post_meta(get_the_ID(), 'home_logo', true);
            $away_logo = get_post_meta(get_the_ID(), 'away_logo', true);
			
            // Converte os IDs em URLs
            $league_logo_url = $league_logo ? wp_get_attachment_url($league_logo) : '';
            $home_logo_url = $home_logo ? wp_get_attachment_url($home_logo) : '';
            $away_logo_url = $away_logo ? wp_get_attachment_url($away_logo) : '';

            // Add a wrapper for each item
            $output .= '<div class="resultado-item">';
            $output .= '    <div class="elementor-element elementor-element-be11029 e-con-full e-flex e-con e-child resultado-item-container" data-id="be11029" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">';
            $output .= '        <div class="elementor-element elementor-element-0c87438 elementor-widget__width-initial jltma-glass-effect-no elementor-widget elementor-widget-image" data-id="0c87438" data-element_type="widget" data-widget_type="image.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <img decoding="async" src="' . esc_url($league_logo_url) . '" title="liga_3" alt="liga_3" loading="lazy">';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-7d381e4 jltma-glass-effect-no elementor-widget elementor-widget-heading" data-id="7d381e4" data-element_type="widget" data-widget_type="heading.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <h6 class="elementor-heading-title elementor-size-default">' . esc_html($match_date) . '</h6>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-544f727 jltma-glass-effect-no elementor-widget elementor-widget-heading" data-id="544f727" data-element_type="widget" data-widget_type="heading.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <h4 class="elementor-heading-title elementor-size-default">' . esc_html($home_team) . '</h4>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-5c0d889 jltma-glass-effect-no elementor-widget elementor-widget-image" data-id="5c0d889" data-element_type="widget" data-widget_type="image.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <img decoding="async" class="resultado-image-logo" src="' . esc_url($home_logo_url) . '" title="home_logo" alt="home_logo" loading="lazy">';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-b9da100 jltma-glass-effect-no elementor-widget elementor-widget-heading" data-id="b9da100" data-element_type="widget" data-widget_type="heading.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <h3 class="elementor-heading-title elementor-size-default">' . esc_html($match_result) . '</h3>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-68e6bef jltma-glass-effect-no elementor-widget elementor-widget-image" data-id="68e6bef" data-element_type="widget" data-widget_type="image.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <img decoding="async" class="resultado-image-logo" src="' . esc_url($away_logo_url) . '" title="away_logo" alt="away_logo" loading="lazy">';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-db58151 jltma-glass-effect-no elementor-widget elementor-widget-heading" data-id="db58151" data-element_type="widget" data-widget_type="heading.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <h4 class="elementor-heading-title elementor-size-default">' . esc_html($away_team) . '</h4>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '    </div>';
            $output .= '</div>';
        }

        // Close the wrapper container
        $output .= '</div>';
    } else {
        $output .= '<p>Nenhum item encontrado.</p>';
    }

    wp_reset_postdata();
    return $output;
}
add_shortcode('pods_resultados', 'loop_pods_resultados_elementor');


function loop_pods_calendarios_elementor() {
    $args = array(
        'post_type'      => 'calendario',
        'posts_per_page' => 5,
        'orderby'        => 'date',
        'order'          => 'ASC',
    );

    $query = new WP_Query($args);
    $output = '';

    if ($query->have_posts()) {
        // Add a wrapper container for flexbox
        $output .= '<div class="resultados-container" style="display: flex; flex-wrap: wrap; gap: 20px;">';
        
        while ($query->have_posts()) {
            $query->the_post();
			
            // Obtém os campos personalizados do Pods
            $weekday = get_post_meta(get_the_ID(), 'weekday', true);
            $match_day = get_post_meta(get_the_ID(), 'match_day', true);
            $match_time = get_post_meta(get_the_ID(), 'match_time', true);
            $match_field = get_post_meta(get_the_ID(), 'match_field', true);
            $home_team = get_post_meta(get_the_ID(), 'home_team', true);
            $away_team = get_post_meta(get_the_ID(), 'away_team', true);
            $league_logo = get_post_meta(get_the_ID(), 'league_logo', true);
            $home_logo = get_post_meta(get_the_ID(), 'home_logo', true);
            $away_logo = get_post_meta(get_the_ID(), 'away_logo', true);
			
            // Convert match_day to date and format as "dd.MM.yyyy"
            $match_day = date("d.m.Y", strtotime($match_day));
			
            // Formata a hora para "HH:MM"
            $match_time = $match_time ? date("H:i", strtotime($match_time)) : '';

            // Converte os IDs em URLs
            $league_logo_url = $league_logo ? wp_get_attachment_url($league_logo) : '';
            $home_logo_url = $home_logo ? wp_get_attachment_url($home_logo) : '';
            $away_logo_url = $away_logo ? wp_get_attachment_url($away_logo) : '';

            // Add a wrapper for each item
            $output .= '<div class="resultado-item">';
            $output .= '    <div class="elementor-element elementor-element-be11029 e-con-full e-flex e-con e-child resultado-item-container" data-id="be11029" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">';
            $output .= '        <div class="elementor-element elementor-element-0c87438 elementor-widget__width-initial jltma-glass-effect-no elementor-widget elementor-widget-image" data-id="0c87438" data-element_type="widget" data-widget_type="image.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <img decoding="async" src="' . esc_url($league_logo_url) . '" title="liga_3" alt="liga_3" loading="lazy">';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-7d381e4 jltma-glass-effect-no elementor-widget elementor-widget-heading" data-id="7d381e4" data-element_type="widget" data-widget_type="heading.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <h6 class="elementor-heading-title elementor-size-default">' . esc_html($match_day) . '</h6>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-544f727 jltma-glass-effect-no elementor-widget elementor-widget-heading" data-id="544f727" data-element_type="widget" data-widget_type="heading.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <h4 class="elementor-heading-title elementor-size-default">' . esc_html($home_team) . '</h4>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-5c0d889 jltma-glass-effect-no elementor-widget elementor-widget-image" data-id="5c0d889" data-element_type="widget" data-widget_type="image.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <img decoding="async" class="resultado-image-logo" src="' . esc_url($home_logo_url) . '" title="home_logo" alt="home_logo" loading="lazy">';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-b9da100 jltma-glass-effect-no elementor-widget elementor-widget-heading" data-id="b9da100" data-element_type="widget" data-widget_type="heading.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <h3 class="elementor-heading-title elementor-size-default">' . esc_html($match_time) . '</h3>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-68e6bef jltma-glass-effect-no elementor-widget elementor-widget-image" data-id="68e6bef" data-element_type="widget" data-widget_type="image.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <img decoding="async" class="resultado-image-logo" src="' . esc_url($away_logo_url) . '" title="away_logo" alt="away_logo" loading="lazy">';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '        <div class="elementor-element elementor-element-db58151 jltma-glass-effect-no elementor-widget elementor-widget-heading" data-id="db58151" data-element_type="widget" data-widget_type="heading.default">';
            $output .= '            <div class="elementor-widget-container">';
            $output .= '                <h4 class="elementor-heading-title elementor-size-default">' . esc_html($away_team) . '</h4>';
            $output .= '            </div>';
            $output .= '        </div>';
            $output .= '    </div>';
            $output .= '</div>';
        }

        // Close the wrapper container
        $output .= '</div>';
    } else {
        $output .= '<p>Nenhum item encontrado.</p>';
    }

    wp_reset_postdata();
    return $output;
}
add_shortcode('pods_calendarios', 'loop_pods_calendarios_elementor');

function loop_pods_patrocinadores_elementor() {
    $args = array(
        'post_type'      => 'patrocinador',
        'posts_per_page' => -1, // Mostra todos os patrocinadores
        'orderby'        => 'title',
        'order'          => 'ASC',
    );

    $query = new WP_Query($args);
    $output = '';

    if ($query->have_posts()) {
        // Wrapper principal
        $output .= '<div class="patrocinadores-container">';

        while ($query->have_posts()) {
            $query->the_post();

            $sponsor_name = get_post_meta(get_the_ID(), 'sponsor_name', true);
            $sponsor_logo = get_post_meta(get_the_ID(), 'sponsor_logo', true);
            $sponsor_logo_url = $sponsor_logo ? wp_get_attachment_url($sponsor_logo) : '';

            $output .= '<div class="patrocinador-item">';
            $output .= '    <img src="' . esc_url($sponsor_logo_url) . '" alt="' . esc_attr($sponsor_name) . '" class="patrocinador-logo">';
            $output .= '    <h4 class="patrocinador-nome">' . esc_html($sponsor_name) . '</h4>';
            $output .= '</div>';
        }

        $output .= '</div>'; // Fecha o wrapper principal
    } else {
        $output .= '<p>Nenhum patrocinador encontrado.</p>';
    }

    wp_reset_postdata();
    return $output;
}
add_shortcode('pods_patrocinadores', 'loop_pods_patrocinadores_elementor');

// Adiciona CSS inline para o estilo
function patrocinadores_custom_styles() {
    echo '<style>
        .patrocinadores-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }
        .patrocinador-item {
            text-align: center;
            background: #ffffff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            width: 200px;
        }
        .patrocinador-item:hover {
            transform: scale(1.05);
        }
        .patrocinador-logo {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
			opacity: 1 !important;
        }
        .patrocinador-nome {
            font-size: 16px;
            margin-top: 10px;
            color: #333;
        }
    </style>';
}
add_action('wp_head', 'patrocinadores_custom_styles');

function get_pods_noticias() {
    $args = array(
        'post_type'      => 'noticia',
        'posts_per_page' => 5,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);
    $noticias = [];

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $noticias[] = array(
                'id'       => get_the_ID(),
                'title'    => get_post_meta(get_the_ID(), 'new_title', true),
                'text'     => get_post_meta(get_the_ID(), 'new_text', true),
                'image'    => wp_get_attachment_url(get_post_meta(get_the_ID(), 'new_image', true)),
                'hashtag'  => get_post_meta(get_the_ID(), 'new_hashtag', true),
                'date'     => get_the_date('d/m/Y'),
            );
        }
        wp_reset_postdata();
    }

    return rest_ensure_response($noticias);
}

add_action('rest_api_init', function () {
    register_rest_route('vimperiofc/v1', '/noticias/', array(
        'methods'  => 'GET',
        'callback' => 'get_pods_noticias',
        'permission_callback' => '__return_true',
    ));
});
function pods_noticias_shortcode() {
    ob_start(); ?>

    <div id="noticias-container">
        <div id="noticias-list" class="noticias-grid"></div>
        <div id="noticia-detalhe" style="display:none;"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetch('<?php echo get_site_url(); ?>/wp-json/vimperiofc/v1/noticias')
                .then(response => response.json())
                .then(data => {
                    let noticiasList = document.getElementById('noticias-list');
                    noticiasList.innerHTML = '';

                    data.forEach(noticia => {
                        let noticiaItem = document.createElement('div');
                        noticiaItem.classList.add('noticia-item');
                        noticiaItem.innerHTML = `
                            <div class="noticia-img-container">
                                <img src="${noticia.image}" alt="${noticia.title}" class="noticia-img">
                            </div>
                            <div class="noticia-info">
                                <h3>${noticia.title}</h3>
                                <p class="noticia-hashtag">${noticia.hashtag}</p>
                            </div>
                        `;
                        noticiaItem.addEventListener("click", () => loadNoticiaDetalhe(noticia));
                        noticiasList.appendChild(noticiaItem);
                    });
                })
                .catch(error => console.error("Erro ao carregar notícias:", error));

            function loadNoticiaDetalhe(noticia) {
                let noticiaDetalhe = document.getElementById('noticia-detalhe');
                noticiaDetalhe.innerHTML = `
                    <button onclick="voltarLista()">← Voltar</button>
                    <h2>${noticia.title}</h2>
                    <img src="${noticia.image}" alt="${noticia.title}" class="noticia-img">
                    <p>${noticia.text}</p>
                    <p><strong>Hashtag:</strong> ${noticia.hashtag}</p>
                `;
                document.getElementById('noticias-list').style.display = "none";
                noticiaDetalhe.style.display = "block";
            }

            window.voltarLista = function() {
                document.getElementById('noticias-list').style.display = "grid";
                document.getElementById('noticia-detalhe').style.display = "none";
            }
        });
    </script>

    <style>
        /* Container */
        #noticias-container { max-width: 1000px; margin: auto; padding: 20px; }

        /* News Grid Layout */
        .noticias-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        /* News Item */
        .noticia-item {
            cursor: pointer;
            border-radius: 10px;
            overflow: hidden;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .noticia-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Image */
        .noticia-img-container {
            width: 100%;
            height: 180px;
            overflow: hidden;
        }

        .noticia-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
			opacity: 1 !important;
        }

        /* News Info */
        .noticia-info {
            padding: 15px;
            text-align: center;
        }

        .noticia-info h3 {
            font-size: 1.2em;
            margin: 0;
            color: #333;
        }

        .noticia-hashtag {
            font-size: 0.9em;
            color: #777;
            margin-top: 5px;
        }

        /* Detail View */
        #noticia-detalhe {
            text-align: center;
            padding: 20px;
        }

        #noticia-detalhe img {
            max-width: 100%;
            border-radius: 10px;
        }

        /* Back Button */
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: black;
        }
    </style>

    <?php
    return ob_get_clean();
}
add_shortcode('pods_noticias', 'pods_noticias_shortcode');

function pods_noticias_grid() {
    $args = array(
        'post_type'      => 'noticia',
        'posts_per_page' => -1, // Remove a limitação de 5 notícias
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);
    $output = '';

    if ($query->have_posts()) {
        $output .= '<div class="noticias-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">';
        
        while ($query->have_posts()) {
            $query->the_post();
            
            $new_title = get_post_meta(get_the_ID(), 'new_title', true);
            $new_text = get_post_meta(get_the_ID(), 'new_text', true);
            $new_image = get_post_meta(get_the_ID(), 'new_image', true);
            $new_hashtag = get_post_meta(get_the_ID(), 'new_hashtag', true);
            $new_date = get_the_date('d.m.Y');
            
            $new_image_url = $new_image ? wp_get_attachment_url($new_image) : '';
            $new_excerpt = wp_trim_words($new_text, 15, '...'); // Limita o texto
            
            $output .= '<div class="noticia-item" style="border: 1px solid #ddd; padding: 15px; background: #fff;">';
            if ($new_image_url) {
                $output .= '<a href="' . get_permalink() . '" style="text-decoration: none; color: inherit;">';
                $output .= '<img src="' . esc_url($new_image_url) . '" alt="' . esc_attr($new_title) . '" style="width: 100%; height: auto;">';
                $output .= '</a>';
            }
            $output .= '<h3 style="margin-top: 10px;"><a href="' . get_permalink() . '" style="text-decoration: none; color: #333;">' . esc_html($new_title) . '</a></h3>';
            $output .= '<p style="color: #777; font-size: 14px;">' . esc_html($new_date) . '</p>';
            $output .= '<p>' . esc_html($new_excerpt) . '</p>';
            $output .= '</div>';
        }

        $output .= '</div>';
    } else {
        $output .= '<p>Nenhuma notícia encontrada.</p>';
    }

    wp_reset_postdata();
    return $output;
}
add_shortcode('pods_noticias_grid', 'pods_noticias_grid');

function custom_post_type_noticia() {
    $args = array(
        'labels'             => array(
            'name'          => 'Notícias',
            'singular_name' => 'Notícia'
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'noticia', 'with_front' => false),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true
    );

    register_post_type('noticia', $args);
}
add_action('init', 'custom_post_type_noticia');


function include_noticia_in_main_query($query) {
    if (!is_admin() && $query->is_main_query() && (is_archive() || is_singular('noticia'))) {
        $query->set('post_type', array('noticia'));
    }
}
add_action('pre_get_posts', 'include_noticia_in_main_query');

function force_noticia_query($query) {
    if (!is_admin() && $query->is_main_query() && is_singular('noticia')) {
        $query->set('post_type', 'noticia');
    }
}
add_action('pre_get_posts', 'force_noticia_query');

function astra_custom_noticia_template($template) {
    if (is_singular('noticia')) {
        return locate_template(array('template-parts/single-noticia.php'));
    }
    return $template;
}
add_filter('template_include', 'astra_custom_noticia_template');


// add_action('wp_head', function() {
//     global $wp_query;
//     echo '<pre style="color:red;">';
//     print_r($wp_query->query_vars);
//     echo '</pre>';
// });

function fix_noticia_query($query) {
    if (!is_admin() && $query->is_main_query() && (is_singular('noticia') || is_post_type_archive('noticia'))) {
        $query->set('post_type', 'noticia');
    }
}
add_action('pre_get_posts', 'fix_noticia_query');

add_action('template_redirect', function() {
    global $template;
    error_log("🚀 TEMPLATE BEING USED: " . $template);
});

function add_noticia_rewrite_rules() {
    add_rewrite_rule('^noticia/([^/]+)/?$', 'index.php?noticia=$matches[1]', 'top');
}
add_action('init', 'add_noticia_rewrite_rules');

function add_noticia_query_vars($query_vars) {
    $query_vars[] = 'noticia';
    return $query_vars;
}
add_filter('query_vars', 'add_noticia_query_vars');


// add_action('init', function() {
//     global $wp_post_types;
//     error_log(print_r($wp_post_types, true));
// });
function force_noticia_template($template) {
    if (is_singular('noticia')) {
        return get_template_directory() . '/single-noticia.php';
    }
    return $template;
}
add_filter('single_template', 'force_noticia_template');