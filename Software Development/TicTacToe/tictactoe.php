<?php
session_start(); 

if ( !( isset($_SESSION["board"]) ) ) {
 $_SESSION["board"] = array( array(0,0,0), array(0,0,0), array(0,0,0) ) ;
}
if($row = $_POST["board"][0]==3){
	$_SESSION["board"] = array( array(0,0,0), array(0,0,0), array(0,0,0) );
}
else{
$row = $_POST["board"][0];
$column = $_POST["board"][1];//From the client we got both the row and column clicked through the post method
$_SESSION["board"][$row][$column]=1;
$count = 0;

//


if($_SESSION["board"][0][0] == 1  AND $_SESSION["board"][0][1]==1  AND $_SESSION["board"][0][2]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
else{
	echo "t".$row.$column."g"."2";; //txtg2
}	




if($_SESSION["board"][1][0]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][1][2]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][1][0]==2 AND $_SESSION["board"][1][1]==2 AND $_SESSION["board"][1][2]==2){
	echo "t".$row.$column."g"."2";//txyg2
}



if($_SESSION["board"][2][0]==1 AND $_SESSION["board"][2][1]==1 AND $_SESSION["board"][2][2]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][2][0]==2 AND $_SESSION["board"][2][1]==2 AND $_SESSION["board"][2][2]==2){
	echo "t".$row.$column."g"."2";//txyg2
}



if($_SESSION["board"][0][0]==1 AND $_SESSION["board"][1][0]==1 AND $_SESSION["board"][2][0]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][0][0]==1 AND $_SESSION["board"][1][0]==1 AND $_SESSION["board"][2][0]==1){
	echo "t".$row.$column."g"."2";//txyg2
}




if($_SESSION["board"][0][1]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][2][1]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][0][1]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][2][1]==1){
	echo "t".$row.$column."g"."2";//txyg2
}




if($_SESSION["board"][0][2]==1 AND $_SESSION["board"][1][2]==1 AND $_SESSION["board"][2][2]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][0][2]==1 AND $_SESSION["board"][1][2]==1 AND $_SESSION["board"][2][2]==1){
	echo "t".$row.$column."g"."2";//txyg2
}



if($_SESSION["board"][0][0]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][2][2]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][0][0]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][2][2]==1){
	echo "t".$row.$column."g"."2";//txyg2
}




if($_SESSION["board"][0][2]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][2][0]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][0][2]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][2][0]==1){
	echo "t".$row.$column."g"."2";//txyg2
}





$count++;
$row=rand(0,2);
$column=rand(0,2);

while(!$_SESSION["board"][$row][$column]==0){
	$row=rand(0,2);
	$column=rand(0,2);
}

//for($i=0; $i <$row; $i++){
	//for($i=0; $i <$column; $i++){

	//}

$_SESSION["board"][$row][$column]=2;




$count++;
if ($count == 5){
	echo "t".$row.$column."t"."3";//txyc1
}

}
if($_SESSION["board"][0][0]==1 AND $_SESSION["board"][0][1]==1 AND $_SESSION["board"][0][2]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][0][0]==2 AND $_SESSION["board"][0][1]==2 AND $_SESSION["board"][0][2]==2){
	echo "t".$row.$column."g"."2";; //txtg2
}	
else{
	echo "t".$row.$column."c"."3";//txyc1
}



if($_SESSION["board"][1][0]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][1][2]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][1][0]==2 AND $_SESSION["board"][1][1]==2 AND $_SESSION["board"][1][2]==2){
	echo "t".$row.$column."g"."2";//txyg2
}
else{
	echo "t".$row.$column."c"."3";//txyc1
}



if($_SESSION["board"][2][0]==1 AND $_SESSION["board"][2][1]==1 AND $_SESSION["board"][2][2]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][2][0]==2 AND $_SESSION["board"][2][1]==2 AND $_SESSION["board"][2][2]==2){
	echo "t".$row.$column."g"."2";//txyg2
} 
else{
	echo "t".$row.$column."c"."3";//txyc3
}



if($_SESSION["board"][0][0]==1 AND $_SESSION["board"][1][0]==1 AND $_SESSION["board"][2][0]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][0][0]==1 AND $_SESSION["board"][1][0]==1 AND $_SESSION["board"][2][0]==1){
	echo "t".$row.$column."g"."2";//txyg2
}
else{
	echo "t".$row.$column."c"."3";//txyc3
}



if($_SESSION["board"][0][1]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][2][1]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][0][1]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][2][1]==1){
	echo "t".$row.$column."g"."2";//txyg2
}
else{
	echo "t".$row.$column."c"."3";//txyc3
}



if($_SESSION["board"][0][2]==1 AND $_SESSION["board"][1][2]==1 AND $_SESSION["board"][2][2]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][0][2]==1 AND $_SESSION["board"][1][2]==1 AND $_SESSION["board"][2][2]==1){
	echo "t".$row.$column."g"."2";//txyg2
}
else{
	echo "t".$row.$column."c"."3";//txyc3
}



if($_SESSION["board"][0][0]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][2][2]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][0][0]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][2][2]==1){
	echo "t".$row.$column."g"."2";//txyg2
}
else{
	echo "t".$row.$column."c"."3";//txyc1
}


if($_SESSION["board"][0][2]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][2][0]==1){
	echo "t".$row.$column."g"."1";//txyg1
}
elseif($_SESSION["board"][0][2]==1 AND $_SESSION["board"][1][1]==1 AND $_SESSION["board"][2][0]==1){
	echo "t".$row.$column."g"."2";//txyg2
}
else{
	echo "t".$row.$column."c"."3";//txyc1
}


//txyc0
?>
