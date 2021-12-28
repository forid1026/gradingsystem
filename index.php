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

    <!-- display result -->
   // <?php
    //$total = $subjectOne + $subjectTwo;
    //$avg_marks = $total / 2;
    
//    if( $avg_marks <= 100 && $avg_marks >= 80){
//         echo 'You got A+';
//     }
//     elseif($avg_marks < 80 && $avg_marks >=75){
//         echo 'You got A';
//     }
//     elseif($avg_marks < 75 && $avg_marks >=70){
//         echo 'You got A';
//     }
//     elseif($avg_marks < 70 && $avg_marks >=65){
//         echo 'You got A-';
//     }
//     elseif($avg_marks < 65 && $avg_marks >=60){
//         echo 'You got B+';
//     }
//     elseif($avg_marks < 60 && $avg_marks >=55){
//         echo 'You got B';
//     }
//     elseif($avg_marks < 55 && $avg_marks >=50){
//         echo 'You got B-';
//     }
//     elseif($avg_marks < 50 && $avg_marks >=45){
//         echo 'You got C+';
//     }
//     elseif($avg_marks < 45 && $avg_marks >=40){
//         echo 'You got C';
//     }
//     else {
//         echo 'Better Luck Next Time!';
//     }
   
    
   ?>
   

    <!-- <div class="result-section" id="userOutput">
        <h2><?php 
            if( $avg_marks <= 100 && $avg_marks >= 80){
                        echo 'You got A+';
                    }
                    elseif($avg_marks < 80 && $avg_marks >=75){
                        echo 'You got A';
                    }
                    elseif($avg_marks < 75 && $avg_marks >=70){
                        echo 'You got A';
                    }
                    elseif($avg_marks < 70 && $avg_marks >=65){
                        echo 'You got A-';
                    }
                    elseif($avg_marks < 65 && $avg_marks >=60){
                        echo 'You got B+';
                    }
                    elseif($avg_marks < 60 && $avg_marks >=55){
                        echo 'You got B';
                    }
                    elseif($avg_marks < 55 && $avg_marks >=50){
                        echo 'You got B-';
                    }
                    elseif($avg_marks < 50 && $avg_marks >=45){
                        echo 'You got C+';
                    }
                    elseif($avg_marks < 45 && $avg_marks >=40){
                        echo 'You got C';
                    }
                    elseif($avg_marks < 40 && $avg_marks >0){
                        echo 'Better Luck Next Time!';
                    }
                    else {
                        echo '';
                    }
        
        
        
        
        
        
        
        
        ?></h2>
        <h2 id="marks">Your Average Marks <?php echo $avg_marks?></h2>
    </div> -->
    <!-- <script>
        // document.getElementById('submit').addEventListener('click', function () {
        //     getResult();
        // })

        function getResult(){
            // document.getElementById('userInput').style.display = 'none';
            // document.getElementById('marks').style.display = 'block';

        }
    </script> -->
</body>
</html>