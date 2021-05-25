<html>
    <head>
    <link rel='stylesheet' href='style.css'/>

</head>
<body class='body'>
<div>
 <?php 
 

 
 
 $check=$_POST["name"];

 $str1=strrev($check);

 
 if ($str1===$check){
     echo 'it is palindrome';
 }else{
     echo 'is not palindrom <br>'.$check.'<>'.$str1;
 }
 
 
 
 
 ?><br>


</div>






</body>
</html>