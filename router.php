<?php
/**
 * Rev. 2 Autoindex Router for PHP built in webserver
 * Fixes error where given http://localhost/? and localhost
 * only contains index.html, the router redirects endlessly.
 */
function atropa_router() {
    function add_single_trailing_fslash($to) {
        if(!$to) return '/';
        if(substr($to, -1) !== '/') {
            $to = $to . '/';
        }
        return $to;
    }
   
    function get_request_uri_path() {
        $p = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        if( is_null($p) ) {
            $req = '/';
        } else {
            $req = $p;
        }
        return $req;
    }
   
    function get_absolute_path_to_request() {
        return $_SERVER['DOCUMENT_ROOT'] . get_request_uri_path();
    }

    function path_has_filename($req) {
        $req = pathinfo($req, PATHINFO_BASENAME);
        if($req) {
            return true;
        } else {
            return false;
        }
    }

    function web_index_exists($dir) {
        if(is_file($dir . "index.php") ) {
            return true;
        } else {
            return false;
        }
    }
   
    function process_request() {
        $req = get_absolute_path_to_request();

        if(path_has_filename($req)) {
            if (is_file($req)) {
                if(!file_handler($req)) {
                    return false; // serve the requested resource as-is.
                }
            }
        }
        if(is_dir($req)) {
            $req = add_single_trailing_fslash($req);
            if (web_index_exists($req)) {
                return false;
            } elseif ( is_file($req . "index.html")) {
                $loc = get_request_uri_path();
                $loc = add_single_trailing_fslash($loc);
                header('Location: ' . $loc . 'index.html');
                exit;
            } else {
                directory_handler($req);
            }
        } else {
            not_found_handler($req);
        }
    }

    if(process_request() === false) {
        return false;
    }
}

function file_handler($req) {
    return false;
}

function directory_handler($req) {
    $d = dir($req);
    $p = get_request_uri_path();
    $p = add_single_trailing_fslash($p);
    echo '<!Doctype html><html><head><title>Directory</title></head><body>';
    echo "Location:  $d->path <br>";
    echo '<table><tr><th>Name</th><th>Type</th></tr>';
    while (false !== ($entry = $d->read())) {
        if($entry === '.') continue;
        $href = $p . $entry;
        if(is_file($req . $entry)) {
            $type = 'File';
        } else {
            $href = add_single_trailing_fslash($href);
            $type = 'Directory';
        }
        echo "<tr><td><a href='$href'>$entry</a></td><td>$type</td></tr>";
    }
    $d->close();
    echo '</table></body></html>';
}

function not_found_handler($req) {
    header('HTTP/1.1 404 Not Found');
    echo '<!Doctype html><html><head><title>404</title></head><body><p>Requested resource could not be found</p></body></html>';
}

return atropa_router();
?>
