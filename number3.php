 <?php
class Email
{
  
    public $email;

    public function Form()
    {
        echo '<form action="number3.php" method="post">
             E-mail: <input type="text" name="email" required><br>
             <input type="submit">
             </form>';
    }

    public function __construct()
    {
        $this->email = isset($_POST['email']) ? $_POST['email'] : null;
    }

    public function action()
    {

        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            echo ("$this->email - is a valid email address");
        } else {
            echo ("$$this->email - is not a valid email address");
        }
    }
}

$work = new Email();
$work->Form();
$work->action();
