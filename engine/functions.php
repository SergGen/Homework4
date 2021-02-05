<?php
function getFiles ($dir){
    return array_filter(
        scandir($dir),
        function ($item) use ($dir) {
            return !is_dir($dir . "/" . $item);
        }
    );
}