<?php
    $host = "heffalump.db.elephantsql.com";
    $user = "sqdfduqm";
    $pass = "ghx2QdG27NJUg7w73xPIG9FEnrjDBD2p";
    $db = "sqdfduqm";
    
    // Open a PostgreSQL connection
    $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
      or die ("Could not connect to server\n");
      if($con)
      {
          echo "Connected";
      }
    
    // $query = 'SELECT * FROM table';
    // $results = pg_query($con, $query) or die('Query failed: ' . pg_last_error());
    
    // $row = pg_fetch_row($results);
    // echo $row[0] . "\n";


    // Closing connection
    pg_close($con); 
?>