
<?php
$res = session_start();

$GLOBALS['config'] = array(
    'mysql' => array(),
    'remember' => array(),
    'session' => array()
);

sql_autoload_register(function($class){
    require_once('classes/' . $class . '.php');
});

require_once('functions/sanitize.php');

?>
