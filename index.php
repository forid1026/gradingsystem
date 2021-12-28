<!DOCTYPE html>
<?php 
$name = $roll = $subjectOne = $subjectTwo =  '';
if(!empty($_POST)){
    $name = $_POST["name"];
    $roll = $_POST["roll"];
    $subjectOne = $_POST["subjectOne"];
    $subjectTwo = $_POST["subjectTwo"];
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade System</title>
    <style>
        h3{
            width: 50%;
            margin: 0 auto;
        }
        form.user-input {
        width: 50%;
        margin: 0 auto;
        border: 1px solid #ced4da;
        /* padding: 30px; */
        background: #fff;
        box-shadow: 10px 3px 10px rgb(0 0 0 / 0.2);
        }
        
        @media screen and (max-width: 600px) {
            form.user-input {
            width: 100%;
        }
}
        
    /* #marks{display: none;} */
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <h3 class='mt-5'>Grading System</h3>
    <form method="post" action="result.php" class="user-input shadow-lg p-5  mb-5 bg-body rounded">
       
        <div class="form-row">
            <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Name" name="name">
            </div>

            <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Roll" name="roll">
            </div>

            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Physics Marks" name="subjectOne">
            </div>

            <div class="form-group col-md-6">
                 <input type="text" class="form-control" placeholder="Mathematics Marks" name="subjectTwo">
            </div>
    <br><br>
        <input type="submit" class="btn btn-primary" value="Submit">
  </div>
  
    </form>
</body>
</html>