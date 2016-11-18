
<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
$tbl_name="forum_question"; // Table name 
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['submit_post'])) //here give the name of your button on which you would like    //to perform action.
{
// here check the submitted text box for null value by giving there name.
  if($_REQUEST['topic']=="" || $_REQUEST['detail']==""||$_REQUEST['name']==""||$_REQUEST['email']=="")
  {
        echo " <br><br><br<br><br><br>All the fields must be filled";
        //header(location)
  }
  else
  {
  	// get data that sent from form
		$topic=$_POST['topic'];
		$detail=$_POST['detail'];
		$name=$_POST['name'];
		$email=$_POST['email'];

		$datetime=date("d/m/y h:i:s"); //create date time

		$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
		//$result=mysql_query($sql);
		$insert = $mysqli->query($sql);

		if($insert)
		{
		echo "Successful<BR>";
		echo "<a href=main_forum.php>View your topic</a>";
		}
		else 
		{
		die("Error: {$mysqli->errno} : {$mysqli->error}");
		}
		
  // Close our connection
  $mysqli->close();
  }
} 
?>

