<?php
/*
Plugin Name: Masteriyo Customizations
Description: Customizations for the Masteriyo LMS plugin.
Version: 1.0
Author: WhatsOn Dev
Author URI: https://whatson.agency/
*/

function masteriyo_custom_enqueue_scripts() {
    ?>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        const enrollButton = document.querySelector('.masteriyo-enroll-btn');
        if (enrollButton && enrollButton.textContent.trim() === 'Buy Now') {
            enrollButton.textContent = 'Enroll Now';
        }
    });
    </script>
    <?php
}
add_action('wp_footer', 'masteriyo_custom_enqueue_scripts');
