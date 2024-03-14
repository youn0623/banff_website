<?php
function display_google_map() {
    // Embed the provided iframe code inside a container
    echo '<div class="map-container">';
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20010.129747919353!2d-115.58583121826803!3d51.17731604570212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5370ca45910c4afd%3A0xcaafaebedaac9463!2sBanff%2C%20AB!5e0!3m2!1sen!2sca!4v1710455533246!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    echo '</div>';
}

// Call the function to display the Google Map
display_google_map();
?>
