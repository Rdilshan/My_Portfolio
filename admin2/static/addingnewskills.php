<?php 
    require_once './header.php';
?>
<link rel="stylesheet" href="css/mydetails.css">

            <main class="content">
				<div class="container-fluid p-0">
                    <form action="php/add/skills.php" method="post" enctype="multipart/form-data">

                            <div class="mb-3">
                                <h1 class="h3 d-inline align-middle">Adding new skils</h1>
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
                                            <input type="text" class="form-control" name="title" placeholder="Enter skill Title">
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">color</h5>
                                            <h6 style="font-size: 12px;color: #939ba2;">(click and chnage you want color)</h6>
                                        </div>
                                        <div class="card-body">
                                            <input type="color" class="form-control" name="color" placeholder="Enter your Country">
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">pesentage</h5>
                                        </div>
                                        <div class="card-body">
                                            <input type="text" class="form-control" name="pesentage" placeholder="Enter pesentage your skills">
                                        </div>
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