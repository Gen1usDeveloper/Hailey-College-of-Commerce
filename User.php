<?php
class User{
    private $id;
    private $name;
    private $email;
    private $age;
    private $detail;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        if($name == ''){
            $this->name = 'Default';
        } else{
            $this->name = $name;
        }
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        if($email == ''){
            $this->email = 'Default';
        } else{
            $this->email = $email;
        }
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if($age == ''){
            $this->age = 'Default';
        } else{
            $this->age = $age;
        }
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return "<tr>"
                    ."<td>"
                        ."Name: ".$this->getName()." <br>Email: ".$this->getEmail()." <br>Age: ".$this->getAge()
                    ."</td>"
                    ."<td>"
                        ."<a href='./edit.php?user_id=".$this->getId()."'>Update</a>"
                        ." | "
                        ."<a onclick='return confirm(\"Are you sure?\");' href='./delete.php?user_id=".$this->getId()."'>Delete</a>"
                    ."</td>"
                ."</tr>";
    }

}
?>