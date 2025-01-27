<?php
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function displayAlert($message, $type = 'success') {
    return "<div class='alert alert-$type'>$message</div>";
}
?>