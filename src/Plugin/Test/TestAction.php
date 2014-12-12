<?php namespace Plugin\Test;

use Model\Action;
use Lib\TestLib\TesterInterface;

class TestAction extends Action {

    public function __construct() {
        parent::__construct();
    }

    public function init() {
        echo 'TestAction Init';
    }

    public function run() {
        echo 'TestAction run';
    }

    public function Test(TesterInterface $tester, $a) {

    }

}

?>
