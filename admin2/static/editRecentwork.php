
<?php 
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
    require_once '../../connection.php';
    require_once './header.php';
    $id = $_GET['id'];
?>
<style>
    /* Add the following CSS for the loading indicator */
    #loadingIndicator {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 50px;
    height: 50px;
    border: 5px solid #f3f3f3;
    border-top: 5px solid #3498db;
    border-radius: 50%;
    animation: spin 2s linear infinite;
    z-index: 20000;
    }

    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
    }

</style>
        <link rel="stylesheet" href="css/mydetails.css">
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <div id="loadingIndicator"></div>  
            <main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Edit Recent Work</h1>
						<!-- <a class="badge bg-dark text-white ms-2" href="#!">
                                You can watch and change the details
                            </a> -->
					</div>
                    <?php
                            $sql1 = "SELECT * FROM MyWork WHERE Id ='$id'";
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
									<input type="text" class="form-control" id="Name" placeholder="Enter skill Title" value="<?php echo $row1['Title'] ?>">
								</div>
							</div>

                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Type</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" id="Type" placeholder="Enter skill Title" value="<?php echo $row1['type'] ?>">
								</div>
							</div>
                            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Link</h5>
								</div>
								<div class="card-body">
									<input type="url" class="form-control" id="Link" placeholder="Enter skill Title" value="<?php echo $row1['sampleLink'] ?>">
								</div>
							</div>
                            
                            <input type="hidden"  id="currentImg" value="<?php echo $row1['picture']; ?>">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0"> Picture</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-input">
                                        <div class="preview">
                                            <img id="profile-preview" src="../../Assets/mywork/<?php echo $row1['picture']; ?>">
                                        </div>
                                        <label for="profile-image">Upload Image</label>
                                        <input type="file" id="profile-image" name="profilepic" accept="image/*" onchange="showPreview(event, 'profile-preview');">
                                    </div>
                                </div>
                            </div>
							
						</div>

					</div>
                    <?php } ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="finishbtn">
                                    <button class="btn btn-secondary" onclick="goBack()">Cancel</button>
                                    <button class="btn btn-primary" onclick="editing()">Save and change</button>

                                </div>
                            </div>
                        </div>
				</div>
			</main>

		</div>
	</div>

	<script src="js/app.js"></script>

    <script type="text/javascript">

        function goBack() {
            // Use the history object to navigate back to the previous page
            window.history.back();
        }
    function showPreview(event, previewId) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById(previewId);
            preview.src = src;
            preview.style.display = "block";
        }
    }
    </script>
<script src="js/addrecent.js"></script>
</body>

</html>

