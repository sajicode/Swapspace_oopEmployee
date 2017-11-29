<?php    #commissionEmployee class

    class CommissionEmployee extends Employee
    {

        /*@override*/
        public function __construct($name, $gender, $income) {

            $this->_type = "Commission Employee";
            $this->_status = "Part-time";
            $this->_name = $name;
            $this->_gender = $gender;
            $this->_income = $income;

        }

        

    }


?>