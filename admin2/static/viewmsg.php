<?php 
    require_once '../../connection.php';
    require_once './header.php';
    $id = $_GET['id'];
?>
<link rel="stylesheet" href="css/mydetails.css">

            <main class="content">
				<div class="container-fluid p-0">
                    <form action="php/add/skills.php" method="post" enctype="multipart/form-data">

                            <div class="mb-3">
                                <h1 class="h3 d-inline align-middle">Read Message</h1>
                                <!-- <a class="badge bg-dark text-white ms-2" href="#!">
                                        You can watch and change the details
                                    </a> -->
                            </div>
                            <?php
                                    $sql2 = "UPDATE Admin_chat SET Looking = '1' WHERE Id ='$id'";
                                    if ($conn->query($sql2) === TRUE) {
                                        // echo "Record updated successfully";
                                    } 

                                    $sql1 = "SELECT * FROM Admin_chat WHERE Id ='$id'";
                                    $result1 = $conn->query($sql1);

                                    while($row1= $result1->fetch_assoc()) { 
                            ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Name</h5>
                                        </div>
                                        <div class="card-body">
                                            <input type="text" class="form-control" name="title" placeholder="Name"  value="<?php echo $row1['Name'] ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Email</h5>
                                        </div>
                                        <div class="card-body">
                                        <input type="text" class="form-control" name="title" placeholder="Email" value="<?php echo $row1['email'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Subject</h5>
                                        </div>
                                        <div class="card-body">
                                            <input type="text" class="form-control" name="pesentage" placeholder="Subject" value="<?php echo $row1['Subject'] ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Message</h5>
                                        </div>
                                        <div class="card-body">
                                        <textarea class="form-control" name="message" placeholder="Message" readonly><?php echo $row1['Message'] ?></textarea>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                            <?php } ?>

                           
                            <div class="card">
                                <div class="card-body">
                                    <div class="finishbtn">
                                        <button class="btn btn-secondary" type="button" onclick="goBack()">Cancel</button>
                                        <!-- <button class="btn btn-primary" type="submit">Save and change</button> -->
                                        
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