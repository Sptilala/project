<?php 
								$q = "SELECT * from `market_price`";
							    $result = $con->query($q);
							    while($data = mysqli_fetch_array($result))
								{
?>
				   				    <tr>
								    <td><?php echo $data['id']; ?></td>
								    <td><?php echo $data['product_name']; ?></td>
								    <td><?php echo $data['min_price']; ?></td>
								    <td><?php echo $data['max_price']; ?></td>
								    <td><a href="update-price.php?id=<?php echo $data['id']; ?>">Edit</a></td>
  								    <td><a href="delete-price.php?id=<?php echo $data['id']; ?>">Delete</a></td>
								   </tr>
<?php								    
								 
								}
?>