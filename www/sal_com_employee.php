<?php    #salary_commission_employee class

    class SalaryCommissionEmployee extends Employee implements iCalculateSalary
    {
    	

    	const PERCENTAGE = 0.1;

    	private $_baseSalary;

    	private $_salary;

        /*@override*/
        public function __construct($name, $gender, $baseSalary) {

            $this->_type = "Salary Commission Employee";
            $this->_status = "Full-time Staff";
            $this->_name = $name;
            $this->_gender = $gender;
            $this->_baseSalary = $baseSalary;

        }

        public function getBaseSalary() {
        	return $this->_baseSalary;
        }


        public function calculateSalary() {
            
            return $this->_salary = ($this->_baseSalary + (SalaryCommissionEmployee::PERCENTAGE * $this->_baseSalary));
        }


        public function getProfile() {
            echo '<ul>';
            
            echo '<li> Name: '.$this->getName().'</li>';
            echo '<li> Gender: '.$this->getGender().'</li>';
            echo '<li> Type: '.$this->getType().'</li>';
            echo '<li> Status: '.$this->getStatus().'</li>';
            echo '<li> Base Salary: '.$this->getBaseSalary().'</li>';
 			echo '<li> Percentage: '.SalaryCommissionEmployee::PERCENTAGE.'</li>';
            echo '<li> Salary: '.$this->calculateSalary().'</li>';


            echo '</ul>';
        }

        

    }


?>