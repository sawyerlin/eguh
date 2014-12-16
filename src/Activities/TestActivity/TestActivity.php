<?php namespace Activities\TestActivity;

use Engine\Petri\Activity;
use Lib\TestLib\TesterInterface;

class TestActivity extends Activity {

    protected $tester;

    public function __construct(TesterInterface $tester) {
        $this->tester = $tester;
        parent::__construct();
    }

    public function init() {
        echo 'TestAction Init'."\n";
    }

    public function run() {
        echo $this->tester->Test();
    }
}

?>
