<?php 

    define('ROOT_URL', 'https://coeval-gangways.000webhostapp.com/');

    $DB_HOST = 'localhost';
    $DB_USERNAME = 'id2171619_portfolioinspiration';
    $DB_PASS = 'idrees786110';
    
    //Create a connection
    $connec = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASS);

  //Check the connection
  if(!$connec) {
    echo 'Did not connect to the server due to some error' . mysqli_connect_errorno();
  }

  //Check if database exist
  if(!mysqli_select_db($connec, 'id2171619_portfolios')) {
    echo 'Could not find the database you are looking for';
  }
?>