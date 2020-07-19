<?php

namespace Zend\Test\two;

class UserController {

    /**
     * @var DataBaseConnector;
     */
    public $databaseConnector;

    /**
     * UserController constructor.
     * @param DataBaseConnector $databaseConnector
     */
    public function __construct(DataBaseConnector $databaseConnector) {
        $this->databaseConnector = $databaseConnector;
    }

    public function handleUser($action, $data) {

        if ($action == 'addUser') {
            if ($data !== null && $data['name'] !== null && isset($data['mail'])) {
                $user = new UserEntity();

                if (!filter_var($data['mail'], FILTER_VALIDATE_EMAIL)) {
                    throw new \Exception('Email Not Valid');
                }

                $user->setName($data['name']);
                $user->setMail($data['mail']);

                $db = new EntityManager($this->databaseConnector, ['db', 'host']);

                $result = $db->insertUser($user);

                if ($result == true) {
                    $returnData = 'User Added';
                } else {
                    $returnData = 'Error : Cannot create User ' . $data['name'];
                }

            }

        } elseif ($action == 'editUser') {
            if ($data['userData'] !== null && $data['userData']['id'] !== null && $data['userData']['mail'] !== null && $data['userData']['name'] !== null) {

                if (!filter_var($data['mail'], FILTER_VALIDATE_EMAIL)) {
                    throw new \Exception('Email Not Valid');
                }

                $user = new UserEntity();

                $user->setId($data['userData']['id']);
                $user->setMail($data['userData']['mail']);
                $user->setName($data['userData']['name']);

                $db = new EntityManager($this->databaseConnector, ['db', 'host']);

                if ($db->deleteUser($user)) {
                    $returnData = 'User updated';
                } else {
                    $returnData = 'Error : User could not be updated';
                }

            } else {
                $returnData = 'Incomplete Data';
            }
        }

        return $returnData;

    }

}