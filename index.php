<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body style="margin:50px;">
    <h1>List of Employees</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "mtystore";

            //Creat connection
            $connection = new mysqli($servername, $username, $password, $database);
            if ($connection->connect_error) {
                die("Connection failed". $connection->connect_error);
            }

            //erad all row from database tabel
            $sql = "SELECT * FROM employees";
            $result = $connection->query($sql);

            while ($row = $result->fetch_assoc()) {
                 echo "<tr>
                    <td>". $row["id"] ."</td>
                    <td>". $row["first_name"] ."</td>
                    <td>". $row["last_name"] ."</td>
                    <td>". $row["email"] ."</td>
                    <td>". $row["phone"] ."</td>
                    <td>". $row["address"] ."</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='update'>Update</a>
                        <a class='btn btn-primary btn-sm' href='delete'>Delete</a>
                    </td>
                </tr> ";
            }
               
            ?>
        </tbody>
    </table>
</body>
</html>