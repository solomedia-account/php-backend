<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http_equiv="X-UL-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BACKEND</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
       <div class="container my-5">
            <h2> LIST OF CLIENTS </h2>
            <a class="btn btn-primary" href="./create.php" role="button">NEW CLIENT</a>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>address</th>
                        <th>data created</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                include "conn.php";


                $sql = "SELECT * FROM clients";
                     $result = $connection->query($query);


                    if(!$result){
                        die("INVALID QUERY" . $connection->error);
                    }
                    while($row = $result->fetch_assoc()){
                        echo "
                               <tr>
                                    <td>$row[id]</td>
                                    <td>$row[name]</td>
                                    <td>$row[email]</td>
                                    <td>$row[phone]</td>
                                    <td>$row[address]</td>
                                    <td>$row[CREATED_AT]</td>
                                    <td>

                                    </td>
                               </tr>
                                                ";
                ?>

                </tbody>
            </table>

       </div>
</body>
</html>