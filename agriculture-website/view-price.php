<?php include('include/config.php');
                                        $pageid=$_GET['city_id'];
                                        $city=$_GET['city'];
                                            $q=" SELECT * FROM `market_price` WHERE yard_id='".$pageid."'";
                                            $result = $con->query($q);
                                            while($data = mysqli_fetch_array($result))
                                            {
                                        ?>        
                                        	<div>                              
                                                <tr>
                                                    <td><?php echo $data['product_name']; ?></td>
                                                    <td><?php echo $data['min_price']; ?></td>
                                					<td><?php echo $data['max_price']; ?></td>
                                                </tr>
                                            </div>
                                             <?php           
                                                }
                                             ?>