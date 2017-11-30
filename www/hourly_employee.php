<?php    #hourly_employee class

    class HourlyEmployee extends Employee implements iCalculateSalary
    {
        const OVERTIME = 5000;

        const MAX_WEEK_HOUR = 40;

        private $_hoursSpent;

        private $_hourlyRate;

        private $_overtimeSalary;

        private $_salary;
        

        /*@override*/
        public function __construct($name, $gender, $hoursSpent, $hourlyRate) {

            $this->_type = "Hourly Employee";
            $this->_status = "Contracted Staff";
            $this->_name = $name;
            $this->_gender = $gender;
            $this->_hoursSpent = $hoursSpent;
            $this->_hourlyRate = $hourlyRate;
           


        }

        public function getHoursSpent() {
            return $this->_hoursSpent;
        }

        public function getHourlyRate() {
            return $this->_hourlyRate;
        }

        


        public function calculateSalary() {
            if($this->_hoursSpent > 40) {


                return $this->_overtimeSalary = ($this->_hourlyRate * HourlyEmployee::MAX_WEEK_HOUR) + HourlyEmployee::OVERTIME;
            }

            return $this->_salary = $this->_hoursSpent * $this->_hourlyRate;
        }

        public function getProfile() {
            echo '<ul>';
            
            echo '<li> Name: '.$this->getName().'</li>';
            echo '<li> Gender: '.$this->getGender().'</li>';
            echo '<li> Type: '.$this->getType().'</li>';
            echo '<li> Status: '.$this->getStatus().'</li>';
            echo '<li> Maximum Weekly Hours: '.HourlyEmployee::MAX_WEEK_HOUR.'</li>';
            echo '<li> Hours Spent: '.$this->getHoursSpent().'</li>';
            echo '<li> Rate: '.$this->getHourlyRate().'</li>';
            echo '<li> Salary: '.$this->calculateSalary().'</li>';



            echo '</ul>';
        }

        

    }


?>