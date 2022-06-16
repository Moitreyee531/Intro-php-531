<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World from HTML</h1>
    <?php
    $author='Moitreyee';
    ?>

    <h1>Hello World from <?php echo $author; ?> </h1>

<?php 
//string basics

$str="Hello World from MIST";

echo strlen($str).'<br />';

echo str_word_count($str).'<br />';

//arrays
$students=[
'Faisal'=>22,
'Aziz'=>23,
'Tamim'=>24

];

foreach($students as $name=>$roll)
{
    echo "Name: ".$name.','."Roll: ".$roll,'<br/>';
}

?>


</body>
</html>