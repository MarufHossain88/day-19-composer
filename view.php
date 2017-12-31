<?php
require_once 'vendor/autoload.php';





//require_once 'app/classes/Demo.php';
//require_once 'app/classes/Student.php';
//require_once 'app/classes/Winter.php';
//



use App\classes\Student;
 Student::addition();



 use App\classes\Winter;
 Winter::cold();



use App\classes\Demo;
if (isset($_POST['btn'])){

   $result=Demo::countString($_POST);
}







//require_once 'app/classes/Demo.php';
//use App\classes\Demo;
//$result='';
//if (isset($_POST['btn'])){
//    $demo= new App\classes\Demo();
//    $result=$demo->countString($_POST);
//}







//$result='';
//if (isset($_POST['btn'])){
//$demo= new App\classes\Demo();
//$result=$demo->countString($_POST);
//}


?>














<form action="" method="post">
    <table>

    <tr>
        <th>Enter your String</th>
        <td><input type="text" name="giving_string" size="50"></td>
    </tr>

    <tr>
        <th>Total number of Word</th>
        <td><input type="text" value="<?php echo $result['word_length']; ?>"></td>
    </tr>

    <tr>
        <th>Total number of Character</th>
        <td><input type="text" value="<?php echo $result['string_length']; ?>"></td>
    </tr>

    <tr>
        <th></th>
        <td><input type="submit" name="btn" value="submit"></td>
    </tr>

    </table>
</form>
