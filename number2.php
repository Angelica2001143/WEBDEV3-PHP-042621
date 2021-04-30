<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<style>
* {
    font: bold large green;
}

.btn {
    width: 80%;
    margin-left: 10%;
}

.container {
    margin-left: 27%;
    margin-right: 30%;
    padding: 5%;
    border: 2px outset black;
    width: 50%;
    border-radius: 10% 10% 10% 10%;
    box-shadow: 10px 10px #FFE4B5;
}
#input {
    background-color: #FFE4B5;
    color: black;
    border: 2px solid gray;
    border-radius: 4px;
    width: 80%;
    margin-left: 10%;
}

label {
    margin-left: 10%;
}
</style>
<body>
    <div class="container mt-5 bg-light">
        <form method="post">
            <div class="mb-3">
                <label class="form-label ">
                    <h5>Please Input here: </h5>
                </label>
                <input type="text number" name="text" id="input" class="form-control" placeholder="type here ...."><br>
                <input type="submit" name='submit' class="btn btn-secondary">
            </div>
            <center>

                <br>
        </form>
        <br>
</body>
<?php
 
 session_start();

 class addAndaccept{
 
    public $inputedText;

    function __construct($inputedText){

         $this->inputedText = $inputedText;

    }

    function adding(){

        if(!isset($_SESSION['option'])){
            $_SESSION['option'] = [];
        }

        array_push($_SESSION['option'],$this->inputedText);
        
        echo '<select name="dropdown">';
                
        foreach ($_SESSION['option'] as $value) {
            echo'<option value= '.$value.' > '.$value.'</option>';
        }
        
        echo '</select>';
              
    }

 }



if(isset($_POST['submit'])){
    $inputedText = $_POST['text'];
    $addAndaccept = new addAndaccept($inputedText);
    $addAndaccept ->adding();
}


?>
</center>
</div>

</html>
