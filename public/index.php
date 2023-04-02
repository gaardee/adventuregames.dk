<?php
$filename = rtrim(isset($_GET['url']) && $_GET['url'] != '' ? $_GET['url'] : 'forside', '/');
if (!file_exists($filename . '.php')) {
    http_response_code(404);
    die();
}


include('layout/layout.php');
