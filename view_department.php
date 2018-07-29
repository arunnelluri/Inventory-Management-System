<?php
$link = mysqli_connect("localhost", "root", "", "ims");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



// attempt insert query execution
$sql = 'select emp,divi, sec from department';
$view_db=mysqli_query($link, $sql);
if(!$view_db){
    die('cant retrive' .mysqli_error());
}?>
  <thead>
        <td>Employe</td>
        <td>Division</td>
        <td>Section</td>

        </tr>
        </thead>
<?php while ($row=mysqli_fetch_assoc($view_db))
{ ?>
    <table>

        <tr>
        <tbody>
        <tr>
            <td>
                <?php echo $row['emp'];?>
            </td>
            <td> <?php echo $row['divi'];?></td>
            <td> <?php echo $row['sec'];?></td>
            <td>
                <form action="del_department.php" method="post">
                    <button type="submit" name="submit" value="<?php echo $row['emp'];?>">Del</button>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
    <?php
}?>
