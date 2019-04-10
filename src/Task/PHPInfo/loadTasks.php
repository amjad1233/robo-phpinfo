<?php

namespace Amjad\Robo\Task\PHPinfo;

/**
 *
 */
trait loadTasks {

  /**
   * @return \Amjad\Robo\Task\Run\Run
   */
  protected function taskPHPInfo() {
    return $this->task(\Amjad\Robo\Task\PHPinfo\Run::class);
  }

}
