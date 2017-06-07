<?php

function message($message, $mode){
    echo '<div id="dlMessage" class="alert alert-' . $mode . '" role="alert">' . $message . '</div>';
}
