<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>password</th>
        </thead>
        <tbody>
            <?php
        require'./conection.php';
        $query="SELECT *FORM users";
        $result=mysqli_query($con,$query);
        if (mysqli_num_rows($result)>0) {
            $row=mysqli_fetch_assoc($result);
            ?>
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['lastName']?></td>
    <td><?php echo $row['password']?></td>
    
</tr>
    <?php
}        
    ?>


        </tbody>
    </table>
</body>
</html>