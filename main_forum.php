<!DOCTYPE html>
<html lang="en">
<head>
  <title>MAIN FORUM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <style type="text/css">
     .navbar{
    background-color: skyblue;
    border-style: none;    
    color:green;
    height: 75px;
    text-align: center;
    font-family: sans-serif;
    color:black;
    font-size: 20px;
    


     }
  	
  </style>

  
   <nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="#"><h3 style="color:black;">Home</h4></a></li>
        <li ><a href="create_topic.php"><h3 style="color:black;">DiscussionForum</h4></a></li>
   
         
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li style="font-weight:bold"><a href="#"><span class="glyphicon glyphicon-menu-hamburger" style="color:black"></span><h4 style="color:black;"> AboutUs</h4></a></li>  
        <li style="font-weight:bold"><a href="#"><span class="glyphicon glyphicon-earphone" style="color:black"></span> <h4 style="color:black;">ContactUs</h4></a></li> 
             

      </ul>
    </div>
  </div>
  </nav>

<?php

//include connect.php page for database connection
Include('connect.php');
$tbl_name="forum_question"; // Table name 
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result = $mysqli->query($sql);
?>

	<body>
			
			<div class="container" style="margin-top:100px;">
				
				<h2>List of all the discussions..</h2>
				<div class="well well-lg">
					<a href="create_topic.php"><b>Create New Discussion..</b> </a>					
				</div>
  				<p>You can click on the topic name to join the discussion.. </p>
				<table class="table table-hover table-responsive table-inverse">

					<thead>
				      <tr>
				        <!--<th style="text-align:center;">#</th>-->
				        <th class="bg-info" style="text-align:center;"><b>Topic</b></th>
				        <th class="bg-info" style="text-align:center;"><b>Views</b></th>
				        <th class="bg-info" style="text-align:center;"><b>Replies</b></th>
				        <th class="bg-info" style="text-align:center;"><b>Date/Time</b></th>
				      </tr>
				    </thead>

				    <tbody>
					
				

		


<?php
// Start looping table row
while($rows=mysqli_fetch_array($result))
{
?>
<tr>
<!--<td style="text-align:center;"> /*<?php //echo $rows['id']; ?><!--</td>-->
<td class="bg-success" style="text-align:center;"><a href="view_topic.php?id= <?php echo $rows['id']; ?> "><?php echo $rows['topic']; ?></a><BR></td>
<td class="bg-warning" style="text-align:center;"><?php echo $rows['view']; ?></td>
<td class="bg-danger" style="text-align:center;"><?php echo $rows['reply']; ?></td>
<td class="bg-primary" style="text-align:center;"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection
}
$mysqli->close();
?>
	</BR>
	</td>
	</tr>
	</tbody>


	</div>
	</table>
	</div>
	</body>
  </head>
</html>



