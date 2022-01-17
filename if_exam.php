<?php
/*

Example:

//Person's Variables
$name = 'Ali Ahmadi';
$age = 28;
$job = 'Web Developer';
$number = '+989353571197';
$address = 'Rasht, etc';

$operator = '"Irancell" or "Hamrahe Aval" or ...'; --> array($name1, $name2, ...);

All Variables of Person -> array($name, $age, $job, $number, $address, $operator[x]);

*/

$operator = array('Hamrahe Aval', 'Irancell', 'RighTel');
$person_1 = array('Amir Hossein', 22, 'Mechanic', '+989119452891', 'Gilan, Rasht, Lakani Blvd, etc', $operator[0]);
$person_2 = array('Kourosh', 30, 'Software Programmer', '+989352172027', 'Tehran, etc', $operator[1]);
$person_3 = array('Amin', 19, '', '+989226721581', 'Gilan, Fuman, etc', $operator[2]);

//syntax => $person_<Number>
if($person_1[5] == 'Irancell' || $person_1[5] == 'Hamrahe Aval'){
    if($person_1[1] >= 25){
        echo 'Name: '.$person_1[0]."<br> Age: ".$person_1[1]."<br> Job: ".$person_1[2]."<br> Number: ".$person_1[3]."<br> Address: ".$person_1[4];
    }else{
        echo "ERROR! You are Not Allowed to See The Informations! <br>";
        echo 'Reason: You are Under 25.';
    }
}else{
    echo "ERROR! You are Not Allowed to See The Informations! <br>";
    echo 'Reason: Your Operator is Not Allowed.';
}