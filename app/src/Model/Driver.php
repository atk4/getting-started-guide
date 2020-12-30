<?php

namespace Exemplar\Model;

use Atk4\Data;

class Driver extends Data\Model {
    function init(): void
    {
        parent::init();

        $this->addField('name');
    }
}