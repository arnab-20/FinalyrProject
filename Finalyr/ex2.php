<?php
									$db_host = 'localhost'; // Nama Server
									$db_user = 'root'; // User Server
									$db_pass = ''; // Password Server
									$db_name = 'finalyr'; // Nama Database
									 
									$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
									if (!$conn) {
										die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
									}
									  $id = $_SESSION['bID'];
									$sql = "SELECT  Name,dob,email,mob FROM borrowers WHERE bID='$id'";
											 
									$query = mysqli_query($conn, $sql);
									 
									if (!$query) {
										die ('SQL Error: ' . mysqli_error($conn));
									}
									 
									echo '<table>
											<thead>
												<tr>
													<th>PRODUCT ID</th>
													<th>TRANSACTION DATE</th>
													<th>AMOUNT</th>
													<th>QUANTITY</th>
													<th>TOTAL</th>
												</tr>
											</thead>
											<tbody>';
											 
									while ($row = mysqli_fetch_array($query))
									{
										echo '<tr>
												<td>'.$row['Name'].'</td>
												<td>'.$row['dob'].'</td>
												<td>'.$row['email'].'</td>
												<td>'.$row['mob'].'</td>
												
											</tr>';
									}
									echo '
										</tbody>
									</table>';
									 
									// Should we need to run this? read section VII
									mysqli_free_result($query);
									 
									// Should we need to run this? read section VII
									mysqli_close($conn);
									?>