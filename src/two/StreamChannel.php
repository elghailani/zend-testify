<?php

namespace Zend\Test\two;

class StreamChannel {

    private $host;

    private $protocol;

    private $port;

    private $options;

    /**
     * StreamChannel constructor.
     * @param $host
     * @param $protocol
     * @param $port
     * @param $options
     */
    public function __construct($host, $protocol, $port, $options) {
        $this->host = $host;
        $this->protocol = $protocol;
        $this->port = $port;
        $this->options = $options;
    }

    /**
     * @return mixed
     */
    public function getHost() {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host): void {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getProtocol() {
        return $this->protocol;
    }

    /**
     * @param mixed $protocol
     */
    public function setProtocol($protocol): void {
        $this->protocol = $protocol;
    }

    /**
     * @return mixed
     */
    public function getPort() {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port): void {
        $this->port = $port;
    }

    /**
     * @return mixed
     */
    public function getOptions() {
        return $this->options;
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options): void {
        $this->options = $options;
    }



}