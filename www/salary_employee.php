<?php    #salary_employee class

    class SalaryEmployee extends Employee
    {
    	private $_salary;

        private $_percentage;

        /*@override*/
        public function __construct($name, $gender, $salary) {

            $this->_type = "Salary Employee";
            $this->_status = "Full-time Staff";
            $this->_name = $name;
            $this->_gender = $gender;
            $this->_salary = $salary;

        }

        public function getSalary() {
        	return $this->_salary;
        }


        public function getProfile() {
            echo '<ul>';
            
            echo '<li> Name: '.$this->getName().'</li>';
            echo '<li> Gender: '.$this->getGender().'</li>';
            echo '<li> Type: '.$this->getType().'</li>';
            echo '<li> Status: '.$this->getStatus().'</li>';
            echo '<li> Salary: '.$this->getSalary().'</li>';


            echo '</ul>';
        }

        

    }


?>