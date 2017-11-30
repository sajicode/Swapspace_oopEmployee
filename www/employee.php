<?php   #employee class

    abstract class Employee
    {
        protected $_name;
        protected $_gender;
        protected $_status;
        protected $_type;
    

        function getName() {

            return $this->_name;
        }

        function setName($name) {

            $this->_name = $name;
        }

        function getGender() {

            return $this->_gender;
        }

        function setGender($gender) {

            $this->_gender = $gender;
        }

        function getStatus() {

            return $this->_status;
        }

        function setStatus($status) {

            $this->_status = $status;
        }

        function getType() {

            return $this->_type;
        }

        function setType($type) {

            $this->_type = $type;
        }

        abstract public function getProfile();



    }

?>