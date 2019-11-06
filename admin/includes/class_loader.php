
<?php

function class_loader($class){
    $path = "includes/" . $class . ".php";

    if (is_file($path)) {
        require($path);
    }
}

spl_autoload_register('class_loader');