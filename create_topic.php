<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discussion Forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <style type="text/css">   

    
    footer
    {
      background-color: #121212;
      margin-top:30px;
      position:relative;
      padding: 10px;           
      height:60px;
      color: white;
      position: relative;
      right: 0;
      bottom: 0;
      left: 0;
    }   


  </style>
 </head>

 <body>


   <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
     
   </nav>

   <div class="container">

      <form action="add_topic.php" method="POST">

          <div class="form-group">
            <label for="topic">Topic:</label>
            <input type="text" class="form-control" id="topic" name="topic">
          </div>

          <div class="form-group">
            <label for="comment">Details:</label>
            <textarea class="form-control" rows="5" id="detail" name="detail"></textarea>
          </div>

          <div class="form-group col-sm-6 col-lg-6 col-xs-12 col-md-6" >
            <label for="username">Name:</label>
            <input type="text" class="form-control" id="username" name="name">
          </div>

          <div class="form-group col-sm-6 col-lg-6 col-xs-12 col-md-6">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>          

          <div class="col-xs-12 col-sm-6 col-md-6">
              <input type="submit" name="submit_post" value="Post topic" class="btn btn-lg btn-success btn-block"><hr>
          </div>
        
      </form>
     
   </div>

   <footer>
     
   </footer>


 </body>
