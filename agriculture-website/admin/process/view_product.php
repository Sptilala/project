<?php 
								$q = "SELECT * from `product`";
							    $result = $con->query($q);
							    while($data = mysqli_fetch_array($result))
								{
?>
				   				    <tr>
								    <td><?php echo $data['id']; ?></td>
								    <td><?php echo $data['product_name']; ?></td>
								    <td><?php echo $data['category_type']; ?></td>
								    <td><?php echo $data['discription']; ?></td>
								    <td><?php echo $data['image']; ?></td>
								    <td><?php echo $data['date']; ?></td>
								    <td><a href="update-product.php?id=<?php echo $data['id']; ?>">Edit</a></td>
  								    <td><a href="delete-product.php?id=<?php echo $data['id']; ?>">Delete</a></td>
								   </tr>
<?php								    
								 
								}
?>