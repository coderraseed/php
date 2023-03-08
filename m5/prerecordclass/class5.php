<?php
/*
//Get color code project Step-01
class RGB {
private $color;
private $red;
private $green;
private $blue;

function __construct( $colorCode = "" ) {
$this->color =  ltrim( $colorCode, '#' );
$this->parseColor();
}

public function getColor() {
return $this->color;
}

public function setColor( $colorCode ) {
$this->color = ltrim( $colorCode, '#' );
$this->parseColor();

}
private function parseColor() {
if ( $this->color ) {
$colors = sscanf( $this->color, '%02x%02x%02x' );
print_r( $colors );
}
}
}
$myColor = new RGB( "#ffef27" );

 */
//todo Get color code project Step-02
class RGB {
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct( $colorCode = "" ) {
        $this->color = ltrim( $colorCode, '#' );
        $this->parseColor();
    }

    public function getColor() {
        return $this->color;
    }

    public function getRGBColor() {
        return [$this->red, $this->green, $this->blue];
    }

    public function readRGBColor() {
        echo "Red =  {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue} ";
    }

    public function setColor( $colorCode ) {
        $this->color = ltrim( $colorCode, '#' );
        $this->parseColor();

    }
    private function parseColor() {
        if ( $this->color ) {
            list( $this->red, $this->green, $this->blue ) = sscanf( $this->color, '%02x%02x%02x' );
        } else {
            list( $this->red, $this->green, $this->blue ) = [0, 0, 0];
        }
    }
    public function getRed() {
        return $this->red;
    }
    public function getGreen() {
        return $this->green;
    }
    public function getBlue() {
        return $this->blue;
    }
}
$myColor = new RGB( "#ffef27" );
$myColor->readRGBColor();
