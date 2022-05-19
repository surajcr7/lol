<?php

    function url($uri = '') {
        require "config.php";

        return $config['base_url'].$uri;
    }