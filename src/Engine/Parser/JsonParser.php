<?php namespace Engine\Parser;

class JsonParser implements ParserInterface {

    public function parse($path) {

        $jsonString = file_get_contents($path);

        return json_decode($jsonString);
    
    }
}

?>
