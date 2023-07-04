<?php

require_once __DIR__. "/../../vendor/autoload.php";

$headers = getallheaders();


if (!isset($headers[USC\Introspector\Introspector::PASSPORT_HEADER])) {
    echo "No passport header found";
    die();
}

$introspector = new USC\Introspector\Introspector($headers[USC\Introspector\Introspector::PASSPORT_HEADER]);

echo "<h1>Passport info:</h1>";
echo "<pre>"; var_dump($introspector->toArray());


