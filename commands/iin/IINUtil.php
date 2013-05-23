<?php
/**
 * moosh - Moodle Shell
 *
 * @copyright  2012 onwards Tomasz Muras
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class IINUtil extends MooshCommand
{
  public function __construct()
  {
    parent::__construct('util', 'iin');
  }

  public function execute()
  {
    global $CFG, $DB;
    print_r($CFG);
  }
}
