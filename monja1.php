function custom_login() {
    global $error;
    if ( $error ) {
        echo '<style>body.login #login_error { display:none; }</style>';
        echo '<div id="dedo-medio-container" style="display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 9999;"><img id="dedo-medio" src="https://media.istockphoto.com/id/108129744/es/foto/monja-senior-dando-dos-dedo-mayor-gestos-aislado-en-blanco.jpg?s=170667a&w=0&k=20&c=FjlPTFzGGYWlqgHb2X3J6UKg2yC2_-qun5GY0nd4CfA=" style="display:none;"></div>';
        echo '<script>setTimeout(function(){document.getElementById("dedo-medio").style.display = "none";}, 10000);document.getElementById("dedo-medio").style.display = "block";</script>';
    } else {
        $login_errors = $GLOBALS['errors']->get_error_codes();
        if ( ! empty( $login_errors ) ) {
            echo '<style>body.login #login_error { display:none; }</style>';
            echo '<div id="dedo-medio-container" style="display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 9999;"><img id="dedo-medio" src="https://media.istockphoto.com/id/108129744/es/foto/monja-senior-dando-dos-dedo-mayor-gestos-aislado-en-blanco.jpg?s=170667a&w=0&k=20&c=FjlPTFzGGYWlqgHb2X3J6UKg2yC2_-qun5GY0nd4CfA=" style="display:none;"></div>';
            echo '<script>setTimeout(function(){document.getElementById("dedo-medio").style.display = "none";}, 10000);document.getElementById("dedo-medio").style.display = "block";</script>';
        }
    }
}

add_action('login_head', 'custom_login');

