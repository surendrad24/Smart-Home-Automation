<?
 
php $myLetter = $_REQUEST['letter']; 
include "php_serial.class.php"; 
$serial = new phpSerial; 
$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(9600);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->deviceOpen();
$serial->sendMessage($myLetter);
$serial->deviceClose();
 
?>