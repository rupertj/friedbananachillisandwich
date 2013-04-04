<?php

namespace Sandwich;

use Ingredients\Banana;
use Ingredients\Bread;
use Ingredients\Spread;
use Ingredients\Chili;
use Ingredients\Salt;
use Ingredients\Oil;

class friedBananaChilliSandwich {

  $container = array();
  $color = COLOR_RAW;

  function __construct() {

    $chili = new Chili('#FF0000');
    Cooker::fry(chop($chili));

    $bread = array(
      new Slice(),
      new Slice(),
    );

    $bread[0]->apply(new Spread(SPREAD_BUTTER));
    $bread[1]->apply(new Spread(SPREAD_BUTTER));

    $banana = new Banana();
    chop($banana);

    $salt = new Salt(SALT_CORNISH && SALT_SEA);

    $this->container = array(
      $bread[0],
      $chili,
      $banana,
      $salt,
      $bread[1],
    );

    while ($this->color != COLOR_GOLDEN_BROWN) {
      Cooker::fry($this);
    }
  }
}
