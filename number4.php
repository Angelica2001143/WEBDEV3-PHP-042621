<?php
class validateForm
{
    public function Form()
    {
        echo '<form action="number4.php" method="post">
             Name: <input type="text" name="name" required><br>
             Address <input type="text" name="address" required><br>
             Age: <input type="number" name="age" required> <br>
             Mobile Number: <input type="text" name="mobilenumber" required> <br>
             
             <input type="submit">
             </form>';
    }

    public function __construct()
    {
        $this->nameUser1 = isset($_POST['username']) ? $_POST['name'] : null;
        $this->address = isset($_POST['address']) ? $_POST['address'] : null;
        $this->age = isset($_POST['age']) ? $_POST['age'] : null;
        $this->mobileNumber = isset($_POST['mobilenumber']) ? $_POST['mobilenumber'] : null;
        
    }

    public function action()
    {
        if (!preg_match("/^[a-zA-z]*$/", $this->nameUser1)) {
            echo "Invalid name of user.";
            echo "<br>";
        } else {
            echo $this->nameUser1 . " name is valid";
            echo "<br>";
        }


        if(!preg_match('/^(?:\\d+ [a-zA-Z ]+, ){2}[a-zA-Z ]+$/', $this->address)){
            echo "not valid address";
            echo "<br>";
        }else{
            echo "Address is valid.";
            echo "<br>";
        }
        

        if ($this->age >= 18) {
            echo "Age is valid";
            echo "<br>";
        } else {
            echo "Age must be 18 above.";
            echo "<br>";
        }

        $length = strlen($this->mobileNumber);

        if ($length < 11 || $length > 11    ) {
            echo "Number must have 11 digits";
            echo "<br>";
        } else {
            echo "Number is valid";
            echo "<br>";
        }
        
    }
}

$cl = new validateForm();
$cl->Form();
$cl->action();
