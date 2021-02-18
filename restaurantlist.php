<html>
      <head>
            <title>List of restaurant in Bukit Jalil</title>
      </head>
      <body>
           <center>
                    <h1>List of restaurant in Bukit Jalil</h1>
                    <br />
                    <br />
                    <table border="1">
                        <tr>
                              <th>Restaurant ID</th>
                              <th>Name of Restaurant</th>
                              <th>Addres of Restaurant</th>
                              <th>Phone of Restaurant</th>
                        </tr>
                        <tr>
                            <td>0</td>  <!--normal column-->
                            <td>Subway</td>
                            <td>Menara Standard Charter</td>
                            <td>03-12345678</td>
                        </tr>
                          <?php
                              //to link the connection to the database first
                              $serverName = "simpledbtp057644.database.windows.net";
                               $connectionOptions = array(
                               "Database" => "simpledbtp057644",
                               "Uid" => "fasyjsmn",
                               "PWD" => "Fassya@1406");

                              //Establishes the connection
                               $conn = sqlsrv_connect($serverName, $connectionOptions);

                              if (!$conn)
                              {
                               die("Error connection: ".sqlsrv_errors());
                               } 
                               else
                               {
                                 echo ("connection done!");
                               }
                          ?>
                    </table>
            </center>
      </body>
</html>
