<?php
require __DIR__ . '/../vendor/autoload.php';

use OOP\Relations\Teacher;
use OOP\Printer\HtmlPrinter;
use OOP\Printer\PlainTextPrinter;

/* implenetaion of association relation between teacher object and printer object */
$teacher = new Teacher("Anas Fathy");
$printerClass = new PlainTextPrinter;
var_dump($teacher->sayWelcome($printerClass));
unset($teacher);
echo "<br>";
$printerClass->setPrintText("Test Text");
var_dump($printerClass->printToScreen());
/* End Of Implementaion */


