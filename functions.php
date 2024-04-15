<?php
function banff_website_setup() {
	add_theme_support( 'wp-block-styles' );
}

function add_template_part_call(){
	echo '<div class="template-part"><h4>Call us</h4></br><p>1-800 555 5555</p></div>';
	echo '<div class="template-part"><h4>Or track us down!</h4></br><p>51.1784° N, 115.5708° W</p></div>';
}

function enqueue_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri('/css/bootstrap.min.css' ));

wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'),array('jquery'),'', true );
}

function display_google_map() {
    echo '<div class="map-container">';
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20010.129747919353!2d-115.58583121826803!3d51.17731604570212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5370ca45910c4afd%3A0xcaafaebedaac9463!2sBanff%2C%20AB!5e0!3m2!1sen!2sca!4v1710455533246!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    echo '</div>';
}

function my_register_sidebars() {
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
function my_register_header_widget() {
    register_sidebar(
        array(
            'name'          => __( 'Header', 'mytheme' ),
            'id'            => 'header-widget-area',
            'description'   => __( 'Widget area to be displayed at the top of the header.', 'mytheme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

function theme_register_footer_widget() {
    register_sidebar( array(
        'name'          => __( 'Footer', 'theme-text-domain' ),
        'id'            => 'footer-widget',
        'description'   => __( 'Widgets displayed above the footer.', 'theme-text-domain' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

function mytheme_register_footer_menu() {
    register_nav_menu(
        'footer-menu',
        esc_html__( 'Footer Menu', 'mytheme' )
    );
}



function bootstrap_button_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'label'  => 'Button',
        'target' => '_blank'
    ), $atts );

    $label  = esc_attr( $atts['label'] );
    $target = esc_attr( $atts['target'] );

    $youtube_url = 'https://www.youtube.com/watch?v=ooDcpimdf_w';

    $output = '<div class="text-center"><a href="' . $youtube_url . '" class="btn btn-primary centered-button" target="' . $target . '">' . $label . '</a></div>';

    return $output;
}

function custom_theme_settings_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'theme-settings', // Menu slug
        'custom_theme_settings_page' // Callback function
    );
}

function custom_theme_settings_page() {
    ?>
    <div class="wrap">
        <h2>Theme Settings</h2>
        <form method="post" action="options.php">
            <?php settings_fields('theme-settings-group'); ?>
            <label for="telephone_number">Telephone Number:</label>
            <input type="text" id="telephone_number" name="telephone_number" value="<?php echo get_option('telephone_number'); ?>">
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

function custom_theme_register_settings() {
    register_setting('theme-settings-group', 'telephone_number');
}

add_action('admin_menu', 'custom_theme_settings_menu');
add_action('admin_init', 'custom_theme_register_settings');
add_shortcode( 'bootstrap_button', 'bootstrap_button_shortcode' );
add_action( 'after_setup_theme', 'mytheme_register_footer_menu' );
add_action( 'widgets_init', 'my_register_header_widget' );
add_action( 'widgets_init', 'my_register_sidebars' );
add_action( 'widgets_init', 'theme_register_footer_widget' );
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );
add_action( 'after_setup_theme', 'banff_website_setup' );