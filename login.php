<?php
include("server.php");
include("Users.php");

$user = new Users();

if (isset($_POST["login"])) {

    if (strlen($_POST['employee_id']) == 0) {
        header("location:index.php?message=employee ID must be filled");
    } else if (strlen($_POST['password']) == 0) {
        header("location:index.php?message=password must be filled");
    } else {
        $user->login($_POST['employee_id'], $_POST['password']);
        $id = $user->get_employee_id();
        $password = $user->get_employee_password();
        $sql = "SELECT * FROM users WHERE employee_id=$id AND password='$password'";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            header("location:dashboard/index.php");
        } else {
            header("location:index.php?message=employee ID or password is incorrect");
        }
    }
}
