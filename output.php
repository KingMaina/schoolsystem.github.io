<?php 
 // set the default values
 $eng = 0;
 $swa = 0;
 $maths = 0;
 $phyc = 0;
 $bio = 0;
 $geo = 0;
	// student details
 $eng = $_POST['eng'];
 $swa = $_POST['swa'];
 $maths = $_POST['maths'];
 $phyc = $_POST['phyc'];
 $bio = $_POST['bio'];
 $geo = $_POST['geo'];



 //do calculations here:
 $subs = 6;
 $sum = $eng+$swa+$maths+$phyc+$bio+$geo;
 $average = $sum/$subs;


 // create a table to out put the result
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Exam Results</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	table{
  		border: 2px solid black;	
  		width: 100%;
  	}
    th{
      text-align: left;
    }
    body{
      background-color: skyblue;
    }
    table:hover{
      background-color: lightgreen;
    }
  </style>
 </head>
 <body>
 <h1>Table Results for Students</h1>
 <table>
 	<tr>
 		<th>SUBJECT </th>
 		<th>MARKS </th>
 	</tr>
 	<tr>
 		<td><?php echo "English" ?></td>
 		<td><?php echo "$eng "; ?></td>
 	</tr> 	
 	<tr>
 		<td><?php echo "Kiswahili";?></td>
 		<td><?php echo "$swa"; ?></td>
 	</tr> 	
 	<tr>
 		<td><?php echo "Maths";?></td>
 		<td><?php echo "$maths";?></td>
 	</tr> 	
 	<tr>
 		<td><?php echo "Physics"; ?></td>
 		<td><?php echo "$phyc";?></td>
 	</tr> 	
 	<tr>
 		<td><?php  echo "Biology";?></td>
 		<td><?php  echo "$bio";?></td>
 	</tr> 	
 	<tr>
 		<td><?php echo "Geography";?></td>
 		<td><?php echo "$geo";?></td>
 	</tr>
 	<tr>
 		<td><b>AVERAGE</b></td>
 		<td><?php echo "<b>$average</b>"; ?></td>
 	</tr>
  <tr>
    <td><b>STATUS</b></td>
    <td>
<?php  $score = array("pass","fail");
 if ($average <=10) {
  echo $score[1];
 }
 elseif($average >10 && $average <=24){
  echo $score[1];
 }
 elseif($average >=25 && $average <=34){
  echo $score[1];
 }
 elseif($average >=35 && $average <=44){
  echo $score[1];
 }
 elseif($average >=45 && $average <=54){
  echo $score[1];
 }
 elseif($average >=55 && $average <=64){
  echo $score[1];
 }
 elseif($average >=65 && $average <=74){
  echo $score[1];
 }
 elseif($average >=75 && $average <=79){
  echo $score[0];
 }
 elseif($average >=80 && $average <=100){
  echo $score[0];
 }
 else{
  echo "ERROR";
 } 




 ?>
   
   </td>
  </tr>
 </table>
 </body>
 </html>