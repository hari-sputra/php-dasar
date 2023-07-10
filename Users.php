<?php
class Users
{
    private $employee_id, $fullname, $role, $password;

    function login($employee_id, $password)
    {
        $this->employee_id = $employee_id;
        $this->password = $password;
    }

    function get_employee_id()
    {
        return $this->employee_id;
    }

    function get_employee_password()
    {
        return $this->password;
    }
}
