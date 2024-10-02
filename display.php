<?php include 'connect.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dispaly data-project</title>
    <!-- css -->
    <link rel="stylesheet" href="styleCD.css">
    <style>
    th,td {
border: 1px double #000;
padding:5px;

}


</style>
</head>

<body>
    <h1>display data</h1>
    <a href="indexCD.php">Back</a>
   
    <?php
    $display_data=mysqli_query($conn,"select * from `phpcrud`");
    $num=1;
    if(mysqli_num_rows($display_data)>0){
        echo " <table>
        <thead>
            <th>Sl no.</th>
            <th>Username</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Action</th>
           
        <thead>
        <tbody>";
        while($row=mysqli_fetch_assoc($display_data)){
?>
   <tr>
                <td><?php echo $num;?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['mobile']?></td>
                <td><?php echo $row['address']?></td>
                <td>
                    <a href="delete.php?delete=<?php echo $row['id']?>" onclick="return confirm('lipa ! Are you sure you want to delete');">Delete</a>
                    <a href="update.php?update=<?php echo $row['id']?>">Edit</a>
                </td>
            </tr>    
     <?php 
     $num++;  
    }
}else{
    echo "<div>No data</div>";
}
    ?>
    
            
    </tbody>    
</table>
</body>
</html>