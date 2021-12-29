<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--### Bootstrap link ###-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>

    .result-section {
        width: 50%;
        background: #fff;
        margin: 0 auto;
        border: 1px solid #ced4da;
        padding: 30px;
        box-shadow: 10px 3px 10px rgb(0 0 0 / 0.2);
    }
    a.m-auto.btn.btn-info {
    width: 120px;
    left: 50%;
    position: absolute;
    right: 50%;
    transform: translate(-50%, -50%);
}
    @media screen and (max-width: 600px) {
        .result-section  {
            width: 100%;
        }
    }
    </style>
</head>
<body>

<?php 
$name = $roll = $subjectOne = $subjectTwo =  '';
if(!empty($_POST)){
    $name = $_POST["name"];
    $roll = $_POST["roll"];
    $subjectOne = $_POST["subjectOne"];
    $subjectTwo = $_POST["subjectTwo"];
}
    //marks validation 
    if(($subjectOne > 100) || ($subjectTwo > 100) || empty($subjectOne) || empty($subjectTwo)){
        echo '<h3 class="text-danger text-center mt-5">Please Enter valid marks which is less or equal to 100.</h3>';
        echo '<br>';
        echo '<a class="m-auto btn btn-info" href="http://localhost/gradingSystem/">Try Agian</a>';
        exit;
    }
        else{
            $total = $subjectOne + $subjectTwo;
            $avg_marks = $total / 2;
    }
?>

     <div class="result-section shadow-lg p-5  mb-5 mt-5 bg-body rounded" id="userOutput">
         <h5> Name: <?php echo $name?></h5>
         <h5> Roll: &nbsp; &nbsp;  <?php echo $roll ?></h5>
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