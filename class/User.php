<?php



class User{

     
    private $userId;
    private $firstName;
    private $lastName;
    private $birthday;
    private $email;
    

 
   
    
    public Function getAge()
    {

        $datanas = $this->getBirthday();
        $today = date("Y-m-d");
        $eta= date_diff(date_create($datanas), date_create($today));

        return $eta ->format('%y');
    }

    public Function isAdult(){
    if ($eta>=18){
        
        return true;

      }else {
        return false;
      }
    }
    
    public function cambia_mayus($param)
    {
        $param=strtolower($param);
        $param=ucwords($param);

        
        return $param;

    }

    

    
        public function getFirstName()
        {
                return $this->firstName;
        }

        
        public function setFirstName($firstName)
        {
                $this->firstName = $firstName;

                return $this;
        }

       
        public function getLastName()
        {
                return $this->lastName;
        }

        
        public function setLastName($lastName)
        {
                $this->lastName = $lastName;

                return $this;
        }

        
        public function getBirthday()
        {
                return $this->birthday;
        }

      
        public function setBirthday($birthday)
        {
                $this->birthday = $birthday;

                return $this;
        }

        
        public function getEmail()
        {
                return $this->email;
        }

       
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

       
        public function getUserId()
        {
                return $this->userId;
        }

       
        public function setUserId($userId)
        {
                $this->userId = $userId;

                return $this;
        }
}

