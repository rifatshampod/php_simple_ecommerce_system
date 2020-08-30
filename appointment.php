<?php require('func/config.php'); ?>
<?php
$activeBookVateran = "active";
include('includes/front/header.php');?>

<?php
$name = $_POST["name"];
$mail= $_POST["mail"];
$phn= $_POST["phone"];
$prefer= $_POST["pre"];
$day[]= $_POST["checkbox-465"];  
$time[]= $_POST["time"];

$today = new DateTime('today');
$today->add(new DateInterval('P1D'));      //for 1 day interval. if need more, change P1D to P2D, P3D or any. 

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 



$stmt = $db->prepare('INSERT INTO book_vet(name, mail, phone, preference) VALUES (:Name, :Email, :PhoneNumber, :preference)') ;
$stmt->execute(array(
          			':PhoneNumber' => $phn,
                    ':Name' => $name,
          			':Email' => $mail,
					':preference' => $prefer
                          ));
                          
 $stmt1 = $db->prepare("SELECT id FROM book_vet"); 

echo "<h3> &nbsp Your appointment has been saved. Your appointment number is </h3><br>";
echo "<br>";
echo "<b> <h2> &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp <font face='verdana' color='green'>\" $name-".$phn. "\"</font><br><br></h2>";
echo "<b> ";
echo "&nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Appointmet Date : ".$today->format('d-m-Y') . PHP_EOL;
echo "<br>";
foreach($_POST["time"] as $key)
{
    echo "&nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Appointment Time :  ".$key."<br>";
}
echo "<br>";


echo "<p align='center'> If you cannot manage to come as booking time, please come to the same time in any of the following days within next 2 weeks mentioned below <br>";
foreach( $_POST["checkbox-465"] as $value  )
{
    echo $value." <br>";
}
echo "</p>";
echo "<br><br>";
echo " &nbsp &nbsp <font size=3 color='red'> Please take a screenshot of this number and show this in the veterinary counter. </font>";

?>
