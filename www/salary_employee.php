<?php    #salary_employee class

    class SalaryEmployee extends Employee
    {

        private $income;

        /*@override*/
        public function __construct($name, $gender, $income) {

            $this->_type = "Salary Employee";
            $this->_status = "Full-time";
            $this->_name = $name;
            $this->_gender = $gender;
            $this->_income = $income;

        }

        public function getIncome() {
            return $this->_income;
        }

        public function getProfile() {
            echo '<ul>';
            
            echo '<li> Name: '.$this->getName().'</li>';
            echo '<li> Gender: '.$this->getGender().'</li>';
            echo '<li> Type: '.$this->getType().'</li>';
            echo '<li> Status: '.$this->getStatus().'</li>';
            echo '<li> Income: '.$this->getIncome().'</li>';

            echo '</ul>';
        }

        

    }


?>