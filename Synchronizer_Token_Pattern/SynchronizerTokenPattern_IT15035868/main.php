<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
            window.onload=function(){
               $.ajax({
                    url:'main_pageLoad.php',
                    cache:false,
                    success:function(data){
                          var val=  document.getElementById("csrf_token");
                            val.value=data;
                      }
                });
            };
    </script>
</head>
<body>
    <form action="main_action.php" method="post" name="document">
        <div class="imgcontainer">
            <img src="images/jobs.png" width='200' height='200'>
        </div>
        <div class="container">
            <input type="hidden" name="csrf_token" id="csrf_token" />
            <label><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="name">
            <label><b>Position</b></label>
            <input type="text" placeholder="Enter your position" name="position" id="position">
            <label><b>Education Qualification</b></label>
            <input type="text" placeholder="Enter Education Qualifications" name="Edu" id="Edu">
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>