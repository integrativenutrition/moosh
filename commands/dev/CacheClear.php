<?php
/**
 * moosh - Moodle Shell
 *
 * @copyright  2012 onwards Tomasz Muras
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class CacheClear extends MooshCommand
{
    public function __construct()
    {
        parent::__construct('clear', 'cache');
    }

    public function execute()
    {
        purge_all_caches();
    }
}
