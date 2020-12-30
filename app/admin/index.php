<?php

include '../vendor/autoload.php';

use Atk4\Ui;
use Exemplar\App;
use Exemplar\Model;

$app = new App('Admin');

Ui\Form::addTo($app)->setModel(new Model\Driver($app->db));


