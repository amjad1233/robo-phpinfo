<?php

namespace Amjad\Robo\Task\PHPinfo;

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
class PHPInfo extends \Amjad\Robo\Task\PHPinfo\Base {

  /**
   *
   */
  public function __construct($arguments) {
    $this->command = phpinfo(INFO_MODULES);
  }

  /**
   *
   */
  public function getCommand() {
    return $this->command . ' ' . $this->arguments;
  }

}
