<?php

namespace ZendTest\Test\two;

use http\Exception;
use Zend\Test\two\DataBaseConnector;
use Zend\Test\two\EntityManager;
use Zend\Test\two\StreamChannel;
use Zend\Test\two\StreamProvider;
use Zend\Test\two\UserController;
use PHPUnit\Framework\TestCase;

class UserControllerTest extends TestCase {

    /**
     * @var EntityManager
     */
    private $entityManagerOK;

    /**
     * @var EntityManager
     */
    private $entityManagerKO;

    /**
     * @var UserController
     */
    private $userController;

    /**
     * @var DataBaseConnector
     */
    private $databaseConnector;

    protected function setUp() : void {
/*        $this->streamProvider = new StreamProvider();
        $this->streamChannel = new StreamChannel($host, $protocol, $port, $options);
        $this->databaseConnector =  new DataBaseConnector($streamProvider, $streamChannel);
        $this->entityManager = new EntityManager($databaseConnector);*/
        $this->databaseConnector = \Mockery::mock(DataBaseConnector::class);
        $this->entityManagerOK = \Mockery::mock(EntityManager::class);
        $this->entityManagerOK->shouldReceive('insertUser')->andReturn(true);
    }

    protected function tearDown() : void {
        parent::tearDown();
        \Mockery::close();
    }

    public function testUserCreatedWithValidMail() {
        $this->userController = new UserController($this->databaseConnector);
        $results = $this->userController->handleUser('addUser', ['name' => 'Samir', 'mail' => 'dldlfk@jdflk.com']);
        $this->assertEquals('User Added', $results);
    }

    public function testUserCreatedWithInvalidMail() {
        $this->userController = new UserController($this->databaseConnector);
        $this->expectException(\Exception::class);
        $results = $this->userController->handleUser('addUser', ['name' => 'Samir', 'mail' => 'dldlfkjdflk.com']);
        //$this->assertEquals('Error : Cannot create User Samir', $results);
    }

}
