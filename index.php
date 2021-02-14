<?php

class Students{
    private $id;
    private $name;
    private $email;
    private $mobile_number;

   

    public function set_student($id,$name,$email,$mobile_number){
        $this->id            = $id;
        $this->name          = $name;
        $this->email         = $email;
        $this->mobile_number = $mobile_number;
    }

    public function get_id(){
        return $this->id;
    }
    
    public function get_name(){
        return $this->name;
    }

    public function get_email(){
        return $this->email;
    }

    public function get_mob_number(){
        return $this->mobile_number;
    }

    public function print_data_s()
    {
        echo "id :".$this->get_id().", email:".$this->get_email().", Name :". $this->get_name().", mobile_number :".$this->get_mob_number();
    }

}

class Teacher extends Students{
    private $salary;
    private $subject = array();
    // public $bind="";
    

    public function set_teacher($id,$name,$email,$mobile_number,$salary,$subject)
    {
        $this->set_student($id,$name,$email,$mobile_number);
        $this->salary        = $salary;
        $this->subject       = $subject;
    }

    public function get_salary(){
        return $this->salary;
    }

    public function get_subject(){
        $bind="";
        for($i= 0 ;$i<count($this->subject);$i++)
        {
            $bind .= $this->subject[$i].", ";
        }
        return $bind;
    }

    public function print_data_t()
    {
       
       echo "id :".$this->get_id().", email:".$this->get_email().", Name :". $this->get_name().", mobile_number : ".$this->get_mob_number().", salary: ".$this->get_salary().", subject: ";
       
       echo($this->get_subject());
    }
   
}

$student1 = new Students();
$student1->set_student(123443,"Alabed","Suheib@orange.com",0777777777);
$student1->print_data_s();

echo "<br>";
$teacher1 = new Teacher();
$subject = array ("English", "Arabic", "Math", "science");
$teacher1->set_teacher(96432,"Suheib","Suheib@orange.com",777788888,8,$subject);
$teacher1->print_data_t();
?>
