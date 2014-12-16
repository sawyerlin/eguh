<?php namespace Activities\FolderScanActivity;

use Engine\Petri\Activity;

class FolderScanActivity extends Activity {

    private $folderPath = "/home/slin/test";

    public function __construct($datas) {
        parent::__construct($datas);
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
