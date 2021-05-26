<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Welcome <?php echo $_POST["email"]; ?><br>


pass1 <?php echo $_POST["pass1"]; ?><br>
pass2 <?php echo $_POST["pass2"]; ?><br>


Email <?php echo $_POST["Email"]; ?><br>
Phone <?php echo $_POST["Phone"]; ?><br>

Date <?php echo $_POST["Date"]; ?><br>
Social <?php echo $_POST["Social"]; ?><br>

<?php
$stack = array("orange", "banana");
$users=['fakher','coyboy'];
$passwords=['123','456'];


array_push($users,$_POST['email']);
array_push($passwords,$_POST['pass1']);



for ($i=0; $i <count($users) ; $i++) { 
  if ($_POST['name1']==$users[$i]){
      if ($_POST['pass3']==$passwords[$i]){
          $exist=1;
      }
  }
}
if($exist==1){
    echo 'welcome';
}else {
    echo 'not valide';
}

echo '<br>';
?>
username <?php echo $_POST["name1"]; ?><br>
password <?php echo $_POST["pass3"]; ?><br>


</body>
</html>