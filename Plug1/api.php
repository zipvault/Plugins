<?php

//conect to the db
mysql_connect("connect to docker ucrm db ","root",'pass_root') or die (mysql_error)
mysql_select_db("users") or die (mysql_error());

//call passed fann_get_activation_function
  if(function_exists($_GET['method'])) {
    $_GET['method']();
  }
}

//method_exists

function getALLUsers() {
$user_sql = mysql_query("select * from user"
$users = array ();
while($user = mysql_fetch_array($user_sql)) {
  $users[] = $user;
}
$users = json_encode($users);
echo $_GET['jsoncallback'] . '(' . $users . ')'
}
?>
