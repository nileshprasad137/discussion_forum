<!DOCTYPE html>
<html lang="en">
<head>
  <title>MAIN FORUM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php

//include connect.php page for database connection
Include('connect.php');
$tbl_name="forum_question"; // Table name 
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result = $mysqli->query($sql);
?>
<!--


<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

-->
	<body>
			<div class="container">
				<h2>List of all the discussions..</h2>
  				<p>You can click on the topic name to reply to the query..</p>
				<table class="table table-hover table-responsive">

					<thead>
				      <tr>
				        <th>#</th>
				        <th><b>Topic</b></th>
				        <th><b>Views<b></th>
				        <th><b>Replies<b></th>
				        <th><b>Date/Time<b></th>
				      </tr>
				    </thead>
					
				</div>
				
			</div>


<?php
// Start looping table row
while($rows=mysqli_fetch_array($result))
{
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id= <?php echo $rows['id']; ?> "><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection
}
$mysqli->close();
?>

<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="create_topic.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>

<a href="view_topic.php?id=<? echo $rows['id']; ?>"><? echo $rows['topic']; ?></a><BR></td>