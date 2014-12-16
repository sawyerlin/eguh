<?php namespace Activities\FileSenderActivity;

use Engine\Petri\Activity;

class FileSenderActivity extends Activity {

    protected $sender;

    public function __construct() {
        parent::__construct();
    }

    public function init() {
        echo "FileSender Init"."\n";
    }

    public function run() {
        echo "FileSender Run"."\n";
    }
}

?>
