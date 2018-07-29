<?php
$link = mysqli_connect("localhost", "root", "", "ims");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



// attempt insert query execution
$sql = 'select location from location';
$view_db=mysqli_query($link, $sql);
if(!$view_db){
    die('cant retrive' .mysqli_error());
}?>
<thead>
<td>Location</td>


</tr>
</thead>
<?php while ($row=mysqli_fetch_assoc($view_db))
{ ?>
    <table>

        <tr>
            <tbody>
            <tr>
                <td>
                    <?php echo $row['location'];?>
                </td>
                <td>
                    <form action="del_location.php" method="post">
                        <button type="submit" name="submit" value=" <?php echo $row['location'];?>">Del</button>
                    </form>
                </td>

            </tr>
            </tbody>
    </table>
    <?php
}?>
