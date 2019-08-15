<?php
namespace AHT_DT;
    class Request
    {
        public $url;

        public function __construct()
        {
            $this->url = $_SERVER["REQUEST_URI"];
        }
    }

?>