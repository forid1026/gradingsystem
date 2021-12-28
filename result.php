<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    .result-section {
        width: 50%;
        background: #fff;
        margin: 0 auto;
        border: 1px solid #ced4da;
        padding: 30px;
        box-shadow: 10px 3px 10px rgb(0 0 0 / 0.2);
    }
    @media screen and (max-width: 600px) {
        .result-section  {
            width: 100%;
        }
    }
        
    </style>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<?php  
    $total = $_POST["subjectOne"] + $_POST["subjectTwo"];
    $avg_marks = $total / 2;
?>

     <div class="result-section shadow-lg p-5  mb-5 mt-5 bg-body rounded" id="userOutput">
         <h5> Name: <?php echo $_POST["name"] ?></h5>
         <h5> Roll: &nbsp; &nbsp;  <?php echo $_POST["roll"] ?></h5>
        <h5> Grade: <?php 
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
        
        ?></h5>
        <h5 id="marks">Average Marks: <?php echo $avg_marks?></h5>
    </div>

</body>
</html>