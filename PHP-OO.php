<?php
class Fruit {
  // Properties
  private $name;
  private $color;
  private $weight;

  function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
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

  function set_weight($weight) {
    $this->weight = $weight;
  }

  function get_weight() {
    return $this->weight;
  }
}

// instância

$apple = new Fruit("Apple", "red", "leve");
echo $apple->get_name();
echo(" ");
echo $apple->get_color();
echo(" ");
echo $apple->get_weight();
echo(" ");
echo $apple->set_name("Apple2");
?>