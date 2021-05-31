<?php
function alert($mess) {
    echo "<script>alert('$mess');</script>";
}

function redirect($url) {
    echo "<script>window.location.href='$url'</script>";
}