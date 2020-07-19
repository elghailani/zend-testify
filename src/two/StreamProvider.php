<?php

namespace Zend\Test\two;

use Zend\Http\Response\Stream;

class StreamProvider implements StreamProviderInterface{

    public function loadStream() {
        return new Stream();
    }

}