<?php

class Employee {
    public string $firtsName;
    public string $lastName;
    public string $address;
    public string $birthday;
    public string $role;
  

    public function __construct($data)
    {
        $this->firstName = $data['first_name'];
        $this->lastName = $data['last_name'];
        $this->address = $data['address'];
        $this->birthday = $data['birthday'];
        $this->role = $data['role'];
    }
    public function getAddress(): mixed
    {
        return $this->address;
    }


    public function getBirthday(): mixed
    {
        return $this->birthday;
    }

  public function setAddress(mixed $address): void
    {
        $this->address = $address;
    }


    public function setBirthday(mixed $birthday): void
    {
        $this->birthday = $birthday;
    }

}