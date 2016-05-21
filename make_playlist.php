<?php
//echo getcwd() . "\n";
$xml = new SimpleXMLElement('<data/>');

scanFiles(__DIR__."./mp3/", $xml);

//function scanFiles($path, SimpleXMLElement $xml, $allowed = array("jpg","png")) {
function scanFiles($path, SimpleXMLElement $xml, $allowed = array("mp3","wav")) {
    $list = scandir($path);
    foreach ( $list as $file ) {
        if ($file == "." || $file == ".." || ! in_array(pathinfo($file, PATHINFO_EXTENSION), $allowed))
            continue;
        $image = $xml->addChild('image');
        $image->addChild('name', $file);
        $image->addChild('size', filesize($file));
    }
}

header("Content-Type: text/xml");
$xml->asXML('data.xml');
echo $xml->asXML();
?>