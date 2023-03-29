<?php 

								$q = "SELECT * FROM `category`";
								
							    $result = $con->query($q);
							    while($data = mysqli_fetch_array($result))
								{
?>
				   				    <tr>
								    <td><?php echo $data['id']; ?></td>
								    <td><?php echo $data['category_name']; ?></td>
								    <td><?php echo $data['date']; ?></td>
								    <td><a href="update-category.php?id=<?php echo $data['id']; ?>">Edit</a>
								    </td>
  								    <td><a href="delete-category.php?id=<?php echo $data['id']; ?>">Delete</a></td>
								   </tr>
<?php								    
								 
								}
?>
