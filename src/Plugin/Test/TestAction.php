<?php namespace Plugin\Test;

use Model\Action;
use Lib\TestLib\TesterInterface;

class TestAction extends Action {

    protected $tester;

    public function __construct(TesterInterface $tester) {
        $this->tester = $tester;
        parent::__construct();
    }

    public function init() {
        echo 'TestAction Init';
    }

    public function run() {
        $this->tester->Test();
    }
}

?>
