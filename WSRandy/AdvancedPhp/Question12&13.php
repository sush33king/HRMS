<?php

class Addition {
    function compute($first, $second, $third = 0) {
      return $first+$second+$third;
    }
  }

  class Substraction extends Addition {
    function compute($first, $second, $third = 0) {
      return $first-$second-$third;
    }
  }


?>