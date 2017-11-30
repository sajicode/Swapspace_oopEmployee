<?php

    include('salary_calculation.php');
    include('employee.php');
    include('hourly_employee.php');
    include('salary_employee.php');
    include('commission_employee.php');
    include('sal_com_employee.php');
    

    echo "<h1>PAYROLL SYSTEM</H1>";

    $salaryEmployee = new SalaryEmployee("Bosun", "Male", 100000);
    
    $salaryEmployee->getProfile();

    echo "<hr/>";


    $hourlyEmployee = new HourlyEmployee("Gideon", "Male", 50, 2000);

    $hourlyEmployee->getProfile();

    echo "<hr/>";


    $commissionEmployee = new CommissionEmployee("Bola", "Female", 450000, 0.2);

    $commissionEmployee->getProfile();

    echo "<hr/>";


    $salaryCommissionEmployee = new SalaryCommissionEmployee("Funmi", "Female", 100000);

    $salaryCommissionEmployee->getProfile();





?>