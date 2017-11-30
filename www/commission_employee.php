<?php    #commission_employee class

    class CommissionEmployee extends Employee implements iCalculateSalary
    {

        private $_totalSales;

        private $_percentage;

        private $_percentageCommission;

        

        /*@override*/
        public function __construct($name, $gender, $totalSales, $percentage) {

            $this->_type = "Commission Employee";
            $this->_status = "Contracted Staff";
            $this->_name = $name;
            $this->_gender = $gender;
            $this->_totalSales = $totalSales;
            $this->_percentage = $percentage;
         


        }

        public function getTotalSales() {
            return $this->_totalSales;
        }

        public function getPercentage() {
            return $this->_percentage;
        }


        public function calculateSalary() {

            return $this->_percentageCommission = $this->_totalSales * $this->_percentage;
        }

        public function getProfile() {
            echo '<ul>';
            
            echo '<li> Name: '.$this->getName().'</li>';
            echo '<li> Gender: '.$this->getGender().'</li>';
            echo '<li> Type: '.$this->getType().'</li>';
            echo '<li> Status: '.$this->getStatus().'</li>';
            echo '<li> Total Sales: '.$this->getTotalSales().'</li>';
            echo '<li> Percentage: '.$this->getPercentage().'</li>';
            echo '<li> Salary: '.$this->calculateSalary().'</li>';


            echo '</ul>';
        }

        

    }


?>