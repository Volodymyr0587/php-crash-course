<?php

class User {

    // Access modifiers: public, private, protected.
    //? public - can be accessed from anywhere
    //! private - can only be accessed from inside the class
    //* protected - can only be accessed from inside the class and by inheriting classes

    public $name;
    public $email;
    public $password;

    // A constructor is method that runs when an object is created
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belongs to a class

    // Setter
    public function set_name(string $name): void
    {
        $this->name = $name;
    }

    //Getter
    public function get_name()
    {
        return $this->name;
    }

}

// Instatiate a user object
$user1 = new User('John', 'john@gmail.com', 'password123');
$user2 = new User('Dana', 'dana@gmail.com', 'password456');

$user1->set_name('Volodymyr');
echo $user1->get_name() . '<br>';
echo $user2->get_name();


//? Inheritence

class Employee extends User 
{
    public function __construct($name, $email, $password, public $title) 
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title()
    {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', 'qwerty123', 'Manager');

echo $employee1->get_title();