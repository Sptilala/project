 <?php include('include/config.php');

                    $q=" SELECT * FROM `marketing_yard`";
                    $result = $con->query($q);
                    while($data = mysqli_fetch_array($result))
                    {
                ?>
                    <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['market_name']; ?></td>
                   </tr>
                <?php           
                        
                    }

                ?>