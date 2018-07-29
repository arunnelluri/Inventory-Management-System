<?php
$link = mysqli_connect("localhost", "root", "", "ims");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



// attempt insert query execution
$sql = 'select spare_name,make, model, no from spare';
$view_db=mysqli_query($link, $sql);
if(!$view_db){
    die('cant retrive' .mysqli_error());
}?>
<table>
  <thead>
        <tr>
            <td>Spare Name</td>
            <td>make</td>
            <td>Modelk</td>
            <td>number</td>
        </tr>
        </thead>
<?php while ($row=mysqli_fetch_assoc($view_db))
{ ?>


        <tbody>
        <tr>
            <td>
                <?php echo $row['spare_name'];?>
            </td>

            <td> <?php echo $row['make'];?></td>
            <td> <?php echo $row['model'];?></td>
            <td> <?php echo $row['no'];?></td>
            <td>
                <form action="del_spare.php" method="post">
                    <button type="submit" name="submit" value="<?php echo $row['spare_name'];?>">Del</button>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
    <?php
}?>
