<?php 
    require_once './header.php';
?>
<link rel="stylesheet" href="css/mydetails.css">

            <main class="content">
				<div class="container-fluid p-0">
                <form action="php/add/myexpertise.php" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Adding new My Expertise</h1>
						<!-- <a class="badge bg-dark text-white ms-2" href="#!">
                                You can watch and change the details
                            </a> -->
					</div>
                    
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Title</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="Title" placeholder="Enter  Title">
								</div>
							</div>

                            
                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Description</h5>
								</div>
								<div class="card-body">
                                    <textarea class="form-control" name="Description" id="ad_description" placeholder="Type Here..."></textarea>

							</div>

							
						</div>

						
					</div>

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