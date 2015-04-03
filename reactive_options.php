<?php

function reactive_settings()
{
    register_setting( 'reactive-settings-group', 'setting_selector', true );
}

function setting_selector()
{
    add_settings_field(
            'selector', // ID
            'CSS Selector', // Title 
            'selector_html',
            'reactive_options'
        );
}

function selector_html()
{
    printf(
        '<input type="text" id="selector" name="selector" value="%s" />',
        isset( $this->options['selector'] ) ? esc_attr( $this->options['selector']) : ''
        
    );
}

function reactive_options_page()
{
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    ?>
    <div class="wrap">
    <h2>Reactive</h2>
    <form method="post" action="reactive_options.php">
        <?php settings_fields( 'reactive-settings-group' ); ?>
        <?php do_settings_sections( 'reactive-settings-group' ); ?>
        <?php submit_button(); ?>
    </form>
    </div>
    <?php
}
?>