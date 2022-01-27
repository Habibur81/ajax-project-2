<?php

    $con = new mysqli('localhost', 'root', '', 'ajaxcrud');

    $q = "select * from ajaxinsert";

    $query = mysqli_query($con, $q);

    if (mysqli_num_rows($query) > 0)
    {
        while ($result = mysqli_fetch_array($query)){

?>
            <tr>
                <td><?php echo $result['id']?></td>
                <td><?php echo $result['username']?></td>
                <td><?php echo $result['password']?></td>
            </tr>

<?php
        }
    }

?>
