<?php

/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/18/18
 * Time: 4:24 PM
 */
interface UserCustomer
{
    public function setName($name);

    public function getName();
}

class UseDocter implements UserCustomer
{
    private $name;

    public function setName($name)
    {
        // TODO: Implement setName() method.
        $this->name = $name;
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }
}

interface Customer
{
    public function setfirstName($fName);

    public function getfirstName();

    public function setlastName($lName);

    public function getlastName();
}

class Teacher implements Customer
{

    private $fName;
    private $lName;

    public function setfirstName($fName)
    {
        // TODO: Implement setfirstName() method.
        $this->fName = $fName;
    }

    public function getfirstName()
    {
        // TODO: Implement getfirstName() method.
        return $this->fName;
    }

    public function setlastName($lName)
    {
        // TODO: Implement setlastName() method.
        $this->lName = $lName;
    }

    public function getlastName()
    {
        // TODO: Implement getlastName() method.
        return $this->lName;
    }
}

//su dung Adapter to change.
class UserToCustomer implements Customer
{

    protected $user;

    protected $firstName;
    protected $lastName;

    public function __construct(UserCustomer $user)
    {
        $this->user = $user;
        $fullname = $this->user->getName();

        $pieces = explode("", $fullname);
        $this->firstName = $pieces[0];
        $this->lastName = $pieces[1];
    }

    public function setfirstName($fName)
    {
        // TODO: Implement setfirstName() method.
        $this->firstName = $fName;

    }

    public function getfirstName()
    {
        // TODO: Implement getfirstName() method.
        return $this->firstName;

    }

    public function setlastName($lName)
    {
        // TODO: Implement setlastName() method.
        $this->lastName = $lName;

    }

    public function getlastName()
    {
        // TODO: Implement getlastName() method.
        return $this->lastName;
    }
}

$user = new UserToCustomer();
$user->setName("Thanh Meo");
$adapter = new UserToCustomer($user);
//Sử dụng
$firstName = $adapter->getFirstName();
$lastName = $adapter->getLastName();
echo "Customer's first name: {$firstName}, last name: {$lastName}";