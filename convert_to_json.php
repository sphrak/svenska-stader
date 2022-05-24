#!/usr/bin/env php
<?php
declare(strict_types=1);
// cli: php -r '$r=file_get_contents("https://raw.githubusercontent.com/sphrak/svenska-stader/master/src/svenska-stader.csv");$l=explode("\n",trim($r));$k=str_getcsv($l[0]);unset($l[0]);foreach($l as $l){$v=str_getcsv($l);$v[3]=(float)$v[3];$v[4]=(float)$v[4];$d[]=array_combine($k,$v);}echo json_encode($d,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_THROW_ON_ERROR);'
$raw = file_get_contents("src" . DIRECTORY_SEPARATOR . "svenska-stader.csv");
$lines = explode("\n", trim($raw));
$keys = str_getcsv($lines[0]);
unset($lines[0]);
foreach ($lines as $line) {
    $v = str_getcsv($line);
    $v[3] = (float)$v[3];
    $v[4] = (float)$v[4];
    $data[] = array_combine($keys, $v);
}
$js = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
file_put_contents("src" . DIRECTORY_SEPARATOR . "svenska-stader.json", $js, LOCK_EX);
