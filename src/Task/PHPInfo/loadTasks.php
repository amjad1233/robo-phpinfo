<?php

namespace Amjad\Robo\Task\PHPinfo;

/**
 *
 */
trait loadTasks {

  /**
   * @return \Amjad\Robo\Task\PHPinfo\PHPInfo
   */
  protected function taskPHPInfo() {
    return $this->task(\Amjad\Robo\Task\PHPinfo\PHPInfo::class);
  }

}
