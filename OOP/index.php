<?php
require __DIR__ . '/../vendor/autoload.php';

use OOP\EncapsulateWhatVaries\OrderPayment;
use OOP\EncapsulateWhatVaries\PaymentTypes;
use OOP\Relations\Association\Printer\PlainTextPrinter;
use OOP\Relations\Association\Teacher;
use OOP\Relations\Aggregation\Project;
use OOP\Relations\Aggregation\Developer;
use OOP\Relations\Compostion\CPU;
use OOP\Relations\Compostion\Ram;
use OOP\Relations\Compostion\Machine;
use OOP\Relations;
use OOP\SOLID\DIP\PaymentProcess;
use OOP\SOLID\DIP\PaypalPaymentMethod;
use OOP\SOLID\DIP\StripePaymentMethod;
use OOP\SOLID\LSP\EmailService;
use OOP\SOLID\LSP\ServiceOne;
use OOP\SOLID\LSP\ServiceTwo;
use OOP\SOLID\OCP\PaymentService;
use OOP\SOLID\OCP\PaypalMethod;
use OOP\SOLID\OCP\StripeMethod;
use OOP\SOLID\SRP\Attack;
use OOP\SOLID\SRP\Defense;
use OOP\SOLID\SRP\Keeper;
use OOP\SOLID\SRP\Plan;

/* implementation of association relation between teacher object and printer object */
// Association	Has-a

//$teacher = new Teacher("Anas Fathy");
//$printerClass = new PlainTextPrinter();
//var_dump($teacher->sayWelcome($printerClass));
//unset($teacher);
//echo "<br>";
//$printerClass->setPrintText("Test Text");
//var_dump($printerClass->printToScreen());

/* End Of implementation */

#####################################################################################################################

/* implementation of aggregation relation  */
// Aggregation HAS-A
// Project Has A List Of Developers

//$fDeveloper = new Developer('Anas Fathy');
//$sDeveloper = new Developer('Ahmed');
//$xProject = new Project('X Project', new DateTime('now'), [$fDeveloper, $sDeveloper]);
//$xProject->setDeadLineTo(new \DateInterval('P1M'));
//echo $xProject->showProjectInfo();

/* End Of implementation */


#####################################################################################################################

/* implementation of Composition relation  */
// Composition is PART-OF
// Ram and CPU Is Part Off Machine

//$ram = new Ram(8);
//$cpu = new CPU(3);
//$machine = new Machine($cpu, $ram);
//dump($machine->displayMachineInfo());
/* End Of implementation */

#####################################################################################################################

############################### SOLID PRINCIPLES ##########################################################


/* implementation of SRP  */

$plan = new Plan();


/* End Of implementation */


/* implementation of OCP  */

//$paymentService = new PaymentService(new StripeMethod());
//$paymentService->pay();
//echo "<br>";
//$paymentService->changePaymentMethod(new PaypalMethod());
//$paymentService->pay();

/* End Of implementation */


/* implementation of LSP  */

//$email = new EmailService();
//$email->send(new ServiceOne());
//$email->send(new ServiceTwo());

/* End Of implementation */

/* implementation of DIP  */

//$paymentMethod = new PaymentProcess(new PaypalPaymentMethod());
//$paymentMethod->pay();

/* End Of implementation */

/*
 *
 *
 *      $x = [
 *
 *    "room_code" => [
 *
 * ]
 * ]
 *
 * */


#####################################################################################################################

$payment = new OrderPayment();
$payment->setPaymentTypes(new PaymentTypes());
echo $payment->pay('online');

//function findLastKey(array $array, $value)
//{
//    $a = array_flip($array);
//    return $a[$value];
//}
//
//echo findLastKey(array('Hello' => 'Green', 'World' => 'Blue'), 'Blue');

//function validate(string $username) : bool
//{
//    if(preg_match('/^[a-z]_{0,1}\w{2,23}[^_]$/i', $username)){
//        return true;
//    }
//    return false;
//}
//
//echo validate('Mike_Standish') ? 'Valid' : 'Invalid'; #Valid username
//echo "\n";
//echo validate('Mike Standish') ? 'Valid' : 'Invalid'; #Invalid username


//function prependSum(array $array) : array
//{
//    $sum = array_sum($array);
//    $newArray = array_unshift($array, $sum);
//
//    return $newArray;
//}
//
//$array = array(1,2,3);
//$sum = prependSum($array);
//echo($sum.PHP_EOL);
//print_r($array)


//function turing($x){
//    return function ($y) use ($x){
//        return str_repeat($y , $x);
//    };
//}
//
//$a = turing(2);
//$b = turing(3);
//
//echo $a(3) . $b(2);

//echo '3' . (print '5') + 7 ;

//try{
//    class MyTuring extends \Exception {
//
//    }
//    try{
//        throw new MyTuring();
//    }catch (\Exception $e){
//        echo "1:";
//        throw $e;
//    }catch (\Exception $e){
//        echo "2:";
//        throw $e;
//    }
//}catch(\Exception $e){
//    echo get_class($e) ;
//}

//class x {
//    private $b = 'b' ;
//    public $c = 'c' ;
//}
//
//$v = (array) new x();
//var_dump($v);
//echo array_key_exists('b' , $v) ? 'found' : 'not';

//$x = function(){
//    return 'f';
//};
//
//echo gettype($x);

//echo "1" + 2 * "007";