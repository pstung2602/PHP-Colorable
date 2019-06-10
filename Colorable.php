<?php
interface Colorable{
    function howToColor();
}
class Square implements Colorable{
    public function howToColor()
    {
        echo "Color all four sides";
    }
}
$square = new Square();
$square->howToColor();
