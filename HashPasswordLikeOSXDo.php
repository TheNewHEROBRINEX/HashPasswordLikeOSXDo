$password = "mypassword";
$iterations = 46728;
$salt = "mGaAJyk6mVd5qSOs3f/7YAmDwpKLnLoFJIcxG8Lq/dY=";

echo HashPasswordLikeOSXDo($password, $iterations, $salt) . PHP_EOL;

function HashPasswordLikeOSXDo($password, $iterations, $salt) {
return base64_encode(hex2bin(hash_pbkdf2("sha512", $password, pack('H*', bin2hex(base64_decode($salt))), $iterations, 256));
}
