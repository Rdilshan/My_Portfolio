<?php 
    header("Pragma: no-cache");
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
						<h1 class="h3 d-inline align-middle">Edit Blog</h1>
						<!-- <a class="badge bg-dark text-white ms-2" href="#!">
                                You can watch and change the details
                            </a> -->
					</div>
                    <?php
                            $sql1 = "SELECT * FROM MyBlog WHERE Id ='$id'";
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
									<input type="text" class="form-control" name="Name" id="title" placeholder="Enter skill Title"  value="<?php echo $row1['Title'] ?>">
								</div>
							</div>
                            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Description</h5>
								</div>
								<div class="card-body">
                                        <div class="pb-5">
                                            <div id="ad_description"> <?php echo $row1['Description'] ?></div>
                                        </div>
								</div>
							</div>
                            <input type="hidden"  id="currentImg" value="<?php echo $row1['picture']; ?>">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Profile Picture</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-input">
                                        <div class="preview">
                                            <img id="profile-preview" src="../../Assets/blog/<?php echo $row1['picture']; ?>">
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
                                    <button class="btn btn-secondary">Cancel</button>
                                    <button class="btn btn-primary" onclick="editing()">Save and change</button>
                                </div>
                            </div>
                        </div>
				</div>
			</main>

		</div>
	</div>

	<script src="js/app.js"></script>
    <script src="js/addblog.js"></script>
    <script>
                    var quill = new Quill('#ad_description', {
                    modules: {
                        toolbar: true
                    },
                    placeholder: 'Type Here...',
                    // readOnly: true,
                    theme: 'snow'
                });
    </script>
    <script type="text/javascript">
    function showPreview(event, previewId) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById(previewId);
            preview.src = src;
            preview.style.display = "block";
        }
    }
    </script>

</body>

</html>
