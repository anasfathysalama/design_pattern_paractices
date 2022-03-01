<?php
require __DIR__ . '/../vendor/autoload.php';

use OOP\Relations\Association\Printer\PlainTextPrinter;
use OOP\Relations\Association\Teacher;
use OOP\Relations\Aggregation\Project;
use OOP\Relations\Aggregation\Developer;
use OOP\Relations\Compostion\CPU;
use OOP\Relations\Compostion\Ram;
use OOP\Relations\Compostion\Machine;

/* implenetaion of association relation between teacher object and printer object */
// Association	Has-a

//$teacher = new Teacher("Anas Fathy");
//$printerClass = new PlainTextPrinter();
//var_dump($teacher->sayWelcome($printerClass));
//unset($teacher);
//echo "<br>";
//$printerClass->setPrintText("Test Text");
//var_dump($printerClass->printToScreen());

/* End Of Implementaion */

#####################################################################################################################

/* implenetaion of aggergation relation  */
// Aggregation HAS-A
// Project Has A List Of Developers

//$fDeveloper = new Developer('Anas Fathy');
//$sDeveloper = new Developer('Ahmed');
//$xProject = new Project('X Project', new DateTime('now'), [$fDeveloper, $sDeveloper]);
//$xProject->setDeadLineTo(new \DateInterval('P1M'));
//echo $xProject->showProjectInfo();

/* End Of Implementaion */


#####################################################################################################################

/* implenetaion of compostion relation  */
// Compostion is PART-OF
// Ram and CPU Is Part Off Machine

$ram = new Ram(8);
$cpu = new CPU(3);
$machine = new Machine($cpu, $ram);
dump($machine->displayMachineInfo());
/* End Of Implementaion */

#####################################################################################################################
