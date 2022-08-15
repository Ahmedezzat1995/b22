<?php
class user {
    public $id;
    public $name;
    public $email;
    private $password;
    private $gender; // male , female

    public function getGender()
    {
        return $this->gender == 'm' ? 'male' : 'female';
    }

    public function setGender($gender)
    {
        // m , f
        if($gender != 'm' && $gender != 'f'){
            echo "Supported genders m,f";
            return $this;
        }
        $this->gender = $gender;
    }




    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        if(strlen($password) <= 8){
            echo "password must be greater than 8 digits";
        }else{
            $this->password = password_hash($password,PASSWORD_BCRYPT);
        }
        return $this;
    }
}

$user = new user;

