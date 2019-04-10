<?php

  include "vendor/autoload.php";
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    use \Amjad\Robo\Task\PHPinfo\loadTasks;

    public function test() {
      $this->taskPHPInfo()->run();
    }
}