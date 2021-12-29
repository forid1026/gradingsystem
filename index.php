<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade System</title>
    <!--##### Bootstrap link   ####-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        h3{
            width: 50%;
            margin: 0 auto;
        }
        form.user-input {
        width: 50%;
        margin: 0 auto;
        border: 1px solid #ced4da;
        background: #fff;
        box-shadow: 10px 3px 10px rgb(0 0 0 / 0.2);
        }
        
        @media screen and (max-width: 600px) {
            form.user-input {
            width: 100%;
            }
        }
        </style>
</head>
<body>
    <h3 class='mt-5'>Grading System</h3>
    <form method="post" action="result.php" class="user-input shadow-lg p-5  mb-5 bg-body rounded">
       
        <div class="form-row">
            <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Name" name="name" require>
            </div>

            <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Roll" name="roll" require>
            </div>

            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Physics Marks" name="subjectOne" require>
            </div>

            <div class="form-group col-md-6">
                 <input type="text" class="form-control" placeholder="Mathematics Marks" name="subjectTwo" require>
            </div>
    <br><br>
        <input type="submit" class="btn btn-primary" value="Submit">
  </div>
  
    </form>
</body>
</html>