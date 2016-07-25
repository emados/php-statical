<?php

require_once __DIR__ . '/vendor/autoload.php';

var_dump(Lang::current());

Lang::force('ar');

var_dump(Lang::current());