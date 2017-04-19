<?php
include("./AES.class.php");

$z = "1234567812345678"; // 128-bit key
//$z = "abcdefghijkl012345678901"; // 192-bit key
//$z = "abcdefghijuklmno0123456789012345"; // 256-bit key

echo "\n Llave: ". $z . "<BR>";
$aes = new AES($z);

$data = file_get_contents("./example.txt");

$start = microtime(true);
echo "\n\nPlain-Text:\n" . $aes->decrypt($aes->encrypt($data)) . "<BR>";


echo "\n\nCipher-Text:\n" . $aes->encrypt($data) . "<BR>";

$end = microtime(true);

echo "\n\nExecution time: " . ($end - $start);

?>