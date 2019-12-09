<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
 $age = 20;
 $gender = 'homme';
 if ($gender == 'homme')
 {
   echo "vous ête un homme";
 }
 if ($gender == 'femme') {
  echo "vous ête une femme";
 }

 elseif ($age < 18) {
   echo " vous ête mineur";
 }
 elseif ($age >= 18) {
   echo " vous ête majeur";
 }


    ?>
</body>
</html>
