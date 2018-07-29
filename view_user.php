<?php
$link = mysqli_connect("localhost", "root", "", "ims");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



// attempt insert query execution
$sql = 'select f_name,l_name, mobile_no, email,intercome from users';
$view_db=mysqli_query($link, $sql);
if(!$view_db){
    die('cant retrive' .mysqli_error());
    }?>
               <thead>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Mobile</td>
                <td>email</td>
                <td>Intercome</td>
            </tr>
            </thead>
    <?php while ($row=mysqli_fetch_assoc($view_db))
    { ?>
        <table>

            <tbody>
            <tr>
                <td>
                    <?php echo $row['f_name'];?>
                </td>

                <td> <?php echo $row['l_name'];?></td>
                <td> <?php echo $row['mobile_no'];?></td>
                <td> <?php echo $row['email'];?></td>
                <td> <?php echo $row['intercome'];?></td>
                <form action="del_user.php" method="post">
                    <td><button type="submit" name="submit" value="<?php echo $row['f_name'];?>">Del</button></td>
                </form>
            </tr>
            </tbody>
        </table>
<?php
    }?>
