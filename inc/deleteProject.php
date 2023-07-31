<?php
    if (isset($_POST['categoria'])) {
        $dir = '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . ''.$_POST['categoria']. DIRECTORY_SEPARATOR .$_POST['titolo'];
        echo $dir;
        chmod($dir.'/.', 0777);
        deleteDirectory($dir);
    }

    function deleteDirectory($dir) {
        if (!file_exists($dir)) {
            return true;
        }
    
        if (!is_dir($dir)) {
            return unlink($dir);
        }
    
        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') {
                continue;
            }
    
            if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
                return false;
            }
        }
    
        return rmdir($dir);
    }

?>