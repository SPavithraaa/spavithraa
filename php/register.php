<?php
  if(isset($_POST['submit'])) {
    //process the form

    //sanitize the data
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    //hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    //connect to the database
    require_once('db_connect.php');

    //set up and execute the insert query
    $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $hashed_password);
    $statement->execute();

    //close the statement
    $statement->closeCursor();

    //redirect to the login page
    header('Location: login.php');
  }
?>
