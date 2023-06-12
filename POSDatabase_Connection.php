<?php
    $host = "heffalump.db.elephantsql.com";
    $user = "sqdfduqm";
    $pass = "ghx2QdG27NJUg7w73xPIG9FEnrjDBD2p";
    $db = "sqdfduqm";
    $query = "";
    
    // Open a PostgreSQL connection
    $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
      or die ("Could not connect to server\n");
      if($con)
      {
          echo "Connected";
      }
    
    
    if(isset($_POST['query']))  $query = $_POST['query']; 
    
    $results = pg_query($con, $query) or die('Query failed: ' . pg_last_error());
    
    // $row = pg_fetch_row($results);


    // Closing connection
    pg_close($con); 
?>