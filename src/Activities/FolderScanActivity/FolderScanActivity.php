<?php namespace Activities\FolderScanActivity;

use Engine\Petri\Activity;

class FolderScanActivity extends Activity {

    private $folderPath = "/home/slin/test";

    public function __construct() {
        parent::__construct();
    }

    public function init() {

    }

    public function run() {

        $directory = dir($this->folderPath);

        $folders = scandir($this->folderPath);

        var_dump($folders);
    }
}

?>
