<?php

namespace Zend\Test\two;

/**
 * Class EntityManager
 * @package Zend\Test\two
 */
class EntityManager {

    /**
     * @var DataBaseConnector $databaseConnector
     */
    private $databaseConnector;

    /**
     * @var array
     */
    private $configs;

    /**
     * EntityManager constructor.
     * @param DataBaseConnector $databaseConnector
     * @param array $configs
     */
    public function __construct(DataBaseConnector $databaseConnector, array $configs) {
        $this->databaseConnector = $databaseConnector;
        $this->configs = $configs;
    }


    /**
     * @param UserEntity $user
     * @return bool
     */
    public function insertUser(UserEntity $user) {

        return rand(1,10)<8;

    }

    /**
     * @param UserEntity $user
     * @return bool
     */
    public function updateUser(UserEntity $user) {

        return rand(1,10)<8;

    }

    /**
     * @param UserEntity $user
     * @return bool
     */
    public function deleteUser(UserEntity $user) {

        return rand(1,10)<8;

    }

}