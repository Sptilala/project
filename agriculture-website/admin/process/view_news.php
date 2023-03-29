<?php 
								$q = "SELECT * from `daily_news`";
							    $result = $con->query($q);
							    while($data = mysqli_fetch_array($result))
								{
?>
				   				    <tr>
								    <td><?php echo $data['id']; ?></td>
								    <td><?php echo $data['product_name']; ?></td>
								    <td><?php echo $data['news']; ?></td>
								    <td><?php echo $data['image']; ?></td>
								    <td><?php echo $data['updated_at']; ?></td>
								    <td><a href="update-news.php?id=<?php echo $data['id']; ?>">Edit</a></td>
  								    <td><a href="delete-news.php?id=<?php echo $data['id']; ?>">Delete</a></td>
								   </tr>
<?php								    
								 
								}
?>