<?php
  if(isset($_POST['submit'])) {
    //process the form

    //sanitize the data
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    //connect to the database
    require_once('db_connect.php');

    //set up and execute the select query
    $query = "SELECT * FROM users WHERE username = :username";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();

    //fetch the result
    $user = $statement->fetch();

    //verify the password
    if(password_verify($password, $user['password'])) {
      //log the user in
      session_start();
      $_SESSION['user'] = $user;
    }

    //close the statement
    $statement->closeCursor();

    //redirect to the homepage
    header('Location: index.php');
  }
?>