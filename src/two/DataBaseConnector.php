<?php

namespace Zend\Test\two;

class DataBaseConnector {

    /**
     * @var StreamProvider $streamProvider
     */
    private $streamProvider;

    /**
     * @var StreamChannel $streamChannel
     */
    private $streamChannel;

    /**
     * DataBaseConnector constructor.
     * @param StreamProvider $streamProvider
     * @param StreamChannel $streamChannel
     */
    public function __construct(StreamProvider $streamProvider, StreamChannel $streamChannel) {
        $this->streamProvider = $streamProvider;
        $this->streamChannel = $streamChannel;
    }

    /**
     * @return array
     */
    public function getConfigs() : array {
        return [$this->streamProvider, $this->streamChannel];
    }

    /**
     * @return StreamProvider
     */
    public function getStreamProvider(): StreamProvider {
        return $this->streamProvider;
    }

    /**
     * @param StreamProvider $streamProvider
     */
    public function setStreamProvider(StreamProvider $streamProvider): void {
        $this->streamProvider = $streamProvider;
    }

    /**
     * @return StreamChannel
     */
    public function getStreamChannel(): StreamChannel {
        return $this->streamChannel;
    }

    /**
     * @param StreamChannel $streamChannel
     */
    public function setStreamChannel(StreamChannel $streamChannel): void {
        $this->streamChannel = $streamChannel;
    }



}