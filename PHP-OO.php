<?php
class Fruit {
  // Properties
  public $name;
  public $color;
  public $size;

  function __construct($name, $color, $size) {
    $this->name = $name;
    $this->color = $color;
    $this->size = $size;
  }

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }

  function get_size() {
    return $this->size;
  }
}

$apple = new Fruit("Apple", "red", 1.2);
echo $apple->get_name();
echo $apple->get_color();
?>