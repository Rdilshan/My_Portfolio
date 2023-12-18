<?php 
    require_once '../../connection.php';
    require_once './header.php';
?>
<!-- <link rel="stylesheet" href="css/skills.css"> -->
<style>

.red-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: red;
}

</style>
            <main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Message</h1>
						
					</div>
					
                    <div class="row">
                        <!-- support-section start -->
                        <div class="col-sm-12">
                            <div class="card" style="padding: 20px;">
                                <div style="margin-top: 15px;" class="">
                                    <table id="customerTable" class="table table-striped" style="width:100%">
                                        <thead>

                                            <tr>
                                                <th> Name</th>
                                                <th> Name</th>
                                                <th> Email</th>
                                                <th> subject</th>
                                                <th> date </th>
                                                <th>  </th>

                                            </tr>
                                        </thead>

                                        <tbody class="contentable">
                                            <?php 
                                                $i =1;
                                                $sql = "SELECT * FROM `Admin_chat` ORDER BY `Admin_chat`.`Id` DESC";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="<?php if ($row['Looking'] == 0) { echo "red-dot"; } ?>"></div>
                                                </td>

                                                <td> <?php echo $row['Name']; ?> </td>
                                                <td> <?php echo $row['email']; ?>/td>
                                                <td> <?php echo $row['Subject']; ?> </td>
                                                <td> <?php echo $row['Date']; ?></td>
                                                <td> 
                                                        <a href="viewmsg.php?id=<?php echo $row['Id']; ?>"><img src="../../Assets/web/edit1.png" alt="" style="width:25px;height:25px; margin-right:5px;"></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            
                                            

                                        </tbody>
                                    </table>
                                </div> 
                            </div>
                        </div>    
                    </div>
				</div>
			</main>

		</div>
	</div>

	<script src="js/app.js"></script>
    <script src="./js/checklocation.js"></script>

</body>

</html>