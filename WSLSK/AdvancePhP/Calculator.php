<?php 
$result = "";
class calculator
{
    var $a;
    var $b;

    public function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    public function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

class calmod extends calculator
{
    public function get_mod($x,$y)
    {
     echo $x % $y;
    }
}



if(isset($_GET['op']) && isset($_GET['x']) && isset($_GET['y']))
{ 
        $cal  = new calmod;

        if ($_GET['op'] == '%')
        {
            
            $cal->get_mod(2,5);
            echo "<br>";
            //echo $cal->getresult(10,10,"+");
        }
       else 
        {
            echo $cal->getresult($_GET['x'],$_GET['y'],$_GET['op']);
        }
}
else
{
    echo "Wrong Perimeter Supply";
}
?>