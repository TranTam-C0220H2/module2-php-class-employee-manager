<?php


class Employee
{
    protected $avatar;
    protected $lastName;
    protected $firstName;
    protected $birthDay;
    protected $address;
    protected $jobPosition;
    protected $group;

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setJobPosition($jobPosition)
    {
        $this->jobPosition = $jobPosition;
    }

    public function setGroup($group)
    {
        $this->group = $group;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    function getLastName()
    {
        return $this->lastName;
    }

    public function getBirthDay()
    {
        return $this->birthDay;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getJobPosition()
    {
        return $this->jobPosition;
    }

    public function getGroup()
    {
        return $this->group;
    }

}