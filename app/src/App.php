<?php

namespace Exemplar;

use Atk4\Ui;

class App extends \Atk4\Ui\App {

    public function __construct($defaults = [])
    {
        try {
            parent::__construct($defaults);
        } catch (\ErrorException $e) {
            $this->caughtException($e);
        }

        $this->initLayout([Ui\Layout\Maestro::class]);
    }

}

