<?php
include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!--  <button class="btn btn-dark my-5"> <a href="index.php" class="text-light">ADD USER</a>

        </button> -->
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Ack Id</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Material</th>
                    <th scope="col">Thickness</th>
                    <th scope="col">Color</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from crud";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $customer = $row['customer'];
                        $profile = $row['profile'];
                        $material = $row['material'];
                        $thickness = $row['thickness'];
                        $color = $row['color'];
                        $weight = $row['weight'];
                        $remarks = $row['remarks'];

                        echo '<tr>
        <th scope="row">' . $id . '</th>
        <td>' . $customer . '</td>
        <td>' . $profile . '</td>
        <td>' . $material . '</td>
        <td>' . $thickness . '</td>
        <td>' . $color . '</td>
        <td>' . $weight . '</td>
        <td>' . $remarks . '</td>
        <td>
        <button class="btn btn-info" > <a href="update.php? updateid=' . $id . '" class="text-light">Update</a></button>
        <button class="btn btn-danger"> <a href="delete.php? deleteid=' . $id . '" class="text-light">Delete</a></button>


    </td>
    </tr>';
                    }
                }


                ?>

            </tbody>
        </table>
    </div>

</body>

</html>