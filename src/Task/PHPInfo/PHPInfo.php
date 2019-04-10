<?php

namespace Amjad\Robo\Task\PHPinfo;

use Amjad\Robo\Task\Base\Base;

/**
 * Runs simple php --info.
 *
 * ```php
 * <?php
 * $this->taskPhpInfo()
 *      ->run();
 *
 * ?>
 * ```
 */
class PHPInfo extends Base {

  /**
   *
   */
  public function __construct() {
    $this->command = 'php --info';
  }

  /**
   *
   */
  public function getCommand() {
    return $this->command . ' ' . $this->arguments;
  }

}
