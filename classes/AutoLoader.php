<?php

class AutoLoader {

    static function searchClass($className) {
        $folders = array_filter(glob(__DIR__ . '/*'), 'is_dir');
        array_unshift($folders, __DIR__);
        foreach($folders as $folder) {
            $file = $folder . '/' . $className . '.php';
            if(file_exists($file)) {
                require ($file);
                return;
            }
        }
    }
    
}
spl_autoload_register('AutoLoader::searchClass');


// class AutoLoad {

//     static function searchClass($className) {
//         $archivo = dirname(__FILE__) . '/' . $className . '.php';
//         if(file_exists($archivo)) {
//             require $archivo;
//         }
//     }

// }

// spl_autoload_register('AutoLoad::searchClass');