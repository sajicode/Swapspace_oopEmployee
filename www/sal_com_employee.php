<?php    #salary_employee class

    class SalaryCommissionEmployee extends Employee
    {

        /*@override*/
        public function __construct($name, $gender, $income) {

            $this->_type = "Salary Commission Employee";
            $this->_status = "Full-time";
            $this->_name = $name;
            $this->_gender = $gender;
            $this->_income = $income;

        }

        

    }


?>