//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";
//exit();

$ServerPath = $_SERVER['DOCUMENT_ROOT'];
$scriptname = explode('/', $_SERVER['SCRIPT_NAME']);
//print_r($scriptname);
//$WebPath = (isset($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS'])) !== 'off') ? 'https://' : 'http://';
if ((isset($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS'])) !== 'off') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) {
    $WebPath = 'https://';
} else {
    $WebPath = 'http://';
}
$WebPath .= isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$BaseURL = $WebPath; //. '/' . $scriptname[1];
$EBASEURL = $WebPath; //. '/' . $scriptname[1];
for ($i = 1; $i < count($scriptname) - 1; $i++) {
    $BaseURL .= '/' . $scriptname[$i];
}
//$BaseURL .= '/';

$config['base_url'] = $BaseURL;
