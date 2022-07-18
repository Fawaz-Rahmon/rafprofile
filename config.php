<?php

$grade=" ";

if( isset($_POST['result'])) {
$name =$_POST['name'];
$standard =$_POST['standard'];
$standard =$_POST['standard'];

$ABE419=$_POST['ABE419'];
$ABE418 =$_POST['ABE418'];
$ABE417=$_POST['ABE417'];
$ABE416 =$_POST['ABE416'];
$ABE415 =$_POST['ABE415'];

$obtained_marks = $ABE419+ $ABE418 + $ABE417+ $ABE416 + $ABE415;

$percentage = $obtained_marks * 100 / 500;


if( $percentage >=70){
    $grade= "Your grade is A-1";
}

elseif($percentage>=60){
   $grade= "Your grade is B";
}

elseif($percentage>=50){
$grade= "Your grade is C";
  }

elseif($percentage>=40){
  $grade= "Your grade is D";
}

elseif($percentage>=30){
    $grade= "Your grade is F";
      }

else{
  $grade= "";
}
}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="font/fonts2/flaticon.css">

    <link rel="stylesheet" href="css/style.css">

<title></title>
</head>
<body>
<h1 style="text-align:center;background:#F0F8FF;color:#00FFFF;">VIEW REPORT</h1>
    <div class="container" style="margin-top: 5%;">
    <table class="table text-center" border="5">
    <thead class="thead-dirk">
    <tr>
    <th>Your NAMES</th>
    <th>Your AGE</th>
    <th>Your rollno </th>
    <th>Your Class</th>
    <th>Your Obtained Marks</th>
    <th>Your Percentage</th>
    <th>Your Grade</th>
    </tr>
    </thead>
    <body>
    <tr>
    <td><?php if (isset($_POST['result'])){ echo $name;}else { echo "No Record";
    }  ?></td>

      <?php 
      #if (isset($_POST['result'])){echo $percentage;}else{
      # echo "No Record";
    #} #?>

    <td><?php if (isset($_POST['result'])){ echo $AGE;}else { echo "No Record";
    }  ?></td>
    <td><?php if (isset($_POST['result'])){ echo $rollno;}else { echo "No Record";
    }  ?></td>
    <td><?php if (isset($_POST['result'])){ echo $standard;}else { echo "No Record";
    }  ?></td>
    <td><?php if (isset($_POST['result'])){ echo $obtained_marks;}else { echo "No Record";
    }  ?></td>
    <td><?php if (isset($_POST['result'])){ echo $percentage . "%";}else { echo "No Record";
    } ?></td>
    <td><?php if (isset($_POST['result'])){ echo $grade;}else { echo "No Record";
    }  ?></td>
    </tr>
    </tbody>
    </table>
    </div>
</body>
</html>