<?php 
        header("Pragma: no-cache");
        require_once '../../connection.php';
        require_once './header.php';
        $id = $_GET['id'];
?>
<link rel="stylesheet" href="css/mydetails.css">

            <main class="content">
				<div class="container-fluid p-0">
                <form action="php/edit/count.php" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Edit Count</h1>
						<!-- <a class="badge bg-dark text-white ms-2" href="#!">
                                You can watch and change the details
                            </a> -->
					</div>
                    <?php
                            $sql1 = "SELECT * FROM Project_count WHERE Id ='$id'";
                            $result1 = $conn->query($sql1);

                            while($row1= $result1->fetch_assoc()) { 
                    ?>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Title</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="Name" placeholder="Enter  Title" value="<?php echo $row1['name'] ?>">
								</div>
							</div>
                            <input type="hidden" name="id" value="<?php echo $row1['Id'] ?>">
                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">count</h5>
								</div>
								<div class="card-body">
									<input type="number" class="form-control" name="count" placeholder="Enter count" value="<?php echo $row1['count'] ?>">
								</div>
							</div>
						</div>
						
					</div>
                    <?php } ?>
                    
                        <div class="card">
                            <div class="card-body">
                                <div class="finishbtn">
                                <button class="btn btn-secondary" type="button" onclick="goBack()">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save and change</button>
                                </div>
                            </div>
                        </div>
                </form>  
				</div>
			</main>

		</div>
	</div>
    <script>
            function goBack() {
            // Use the history object to navigate back to the previous page
            window.history.back();
        }

    </script>
	<script src="js/app.js"></script>


</body>

</html>