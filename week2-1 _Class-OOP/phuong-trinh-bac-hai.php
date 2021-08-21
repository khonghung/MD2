<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" style="width: 40px" name="a" value="" />x <sup>2</sup>
        +
        <input type="text" style="width: 40px" name="b" value="" />x
        +
        <input type="text" style="width: 40px" name="c" value="" />
        = 0
        <br /><br />
        <input type="submit" name="calculate" value="Tính" />
    </form>
</body>

</html>
<?php
class QuadraticEquation
{
    protected $a;
    protected $b;
    protected $c;

    private function delta()
    {
        return pow($this->b, 2) - 4 * $this->a * $this->c;
    }
    protected function giai()
    {
        if ($this->delta() < 0) {
            echo "phương trình vô nghiệm";
        } else if ($this->delta() == 0) {
            echo "Ngiệm kép: x<sub>1</sub> = x<sub>2</sub> =" . -$this->b / (2 * $this->a);
        } else {
            $x1 = (-$this->b - sqrt($this->delta())) / (2 * $this->a);
            $x2 = (-$this->b + sqrt($this->delta())) / (2 * $this->a);
            echo "phương trình có 2 nghiệm phân biệt";
            echo "x<sub>1</sub> =$x1 x<sub>2</sub> = $x2";
        }
    }
}
class phuongtrinh extends QuadraticEquation
{
    public function gpt()
    {
        return $this->giai();
    }
    public function seta($_a)
    {
        $this->a = $_a;
    }
    public function setb($_b)
    {
        $this->b = $_b;
    }
    public function setc($_c)
    {
        $this->b = $_c;
    }
}
$g = new phuongtrinh;
if (isset($_POST["calculate"])) {
    $g->seta($_POST["a"]);
    $g->setb($_POST["b"]);
    $g->setc($_POST["c"]);
    $g->gpt();
}

?>