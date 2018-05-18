<?php



//download and get Tar
$tar = 'somefile.tar';
$tar_path = '/the/full/path/to/where/the/file/is' . $tar;
$size = filesize($tar_path);

header("Content-Type: application/x-tar");
header("Content-Disposition: attachment; filename='".$tar."'");
header("Content-Length: $size");
header("Content-Transfer-Encoding: binary");

readfile($tar_path);

//save .tar to external DST

//conect to the db
mysql_connect("4ten.powwebmysql.com","root",'pass_root') or die (mysql_error)
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
