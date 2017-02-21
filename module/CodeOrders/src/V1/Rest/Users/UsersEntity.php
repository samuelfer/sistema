<?php
namespace CodeOrders\V1\Rest\Users;

class UsersEntity
{
    protected $id;
    protected $username;
    protected $password;
    protected $first_name;
    protected $last_name;
    protected $role;
    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getFirstName() {
        return $this->first_name;
    }

    function getLastName() {
        return $this->last_name;
    }

    function getRole() {
        return $this->role;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    function setFirstName($first_name) {
        $this->first_name = $first_name;
        return $this;
    }

    function setLastName($last_name) {
        $this->last_name = $last_name;
        return $this;
    }

    function setRole($role) {
        $this->role = $role;
        return $this;
    }


}
