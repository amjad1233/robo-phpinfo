<?php

namespace Amjad\Robo\Task\PHPinfo;

class Run extends \Amjad\Robo\Task\PHPinfo\Base {
  /**
   *
   */
  public function getCommand() {
    return trim('php --info');
  }

}
