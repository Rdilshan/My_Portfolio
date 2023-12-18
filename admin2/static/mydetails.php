<?php 
    require_once '../../connection.php';
    require_once './checkLogin.php';
    require_once './header.php';

?>
<link rel="stylesheet" href="css/mydetails.css">
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
    }

    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
    }

</style>

        <?php 
            $sql = "SELECT * FROM `Detila`";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
        ?>
            <div id="loadingIndicator"></div>
            <main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">My deatails</h1>
						<a class="badge bg-dark text-white ms-2" href="#!">
                                You can watch and change the details
                            </a>
					</div>
                    
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Name</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" id="Name" placeholder="Enter Your name" value="<?php echo  $row['Name'];?>">
								</div>
							</div>

                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Country</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" id="Country" placeholder="Enter your Country" value="<?php echo  $row['Country'];?>">
								</div>
							</div>
                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Role</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" id="Role" placeholder="Enter your Role" value="<?php echo  $row['Role'];?>">
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">About Me</h5>
								</div>
								<div class="card-body">
									<textarea class="form-control" rows="2" id="aboutme" placeholder="who are you.."><?php echo  $row['AboutMe'];?></textarea>
								</div>
							</div>

                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Skill Description</h5>
								</div>
								<div class="card-body">
									<textarea class="form-control" rows="2" id="descskill" placeholder="Description about your skills"><?php echo  $row['Skill_desc'];?></textarea>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Contact details</h5>
								</div>
								<div class="card-body cantactdetails">
									<input class="form-control" type="email" id="email" placeholder="Enter your Email address" value="<?php echo  $row['email'];?>">
                                    <input class="form-control" type="text" id="address" placeholder="Enter your Address" value="<?php echo  $row['address'];?>">
                                    <input class="form-control" type="text" id="telephone" placeholder="Enter your Telephone Number" value="<?php echo  $row['telephone'];?>">
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Profile Picture</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-input">
                                        <div class="preview">
                                            <img id="profile-preview" src="../../Assets/profile/<?php echo  $row['Profile_Pic'];?>">
                                        </div>
                                        <label for="profile-image">Upload Image</label>
                                        <input type="file" id="profile-image" name="profilepic" accept="image/*" onchange="showPreview(event, 'profile-preview');">
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Background Picture 1</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-input">
                                        <div class="preview">
                                            <img id="background1-preview" src="../../Assets/profile/<?php echo  $row['Bg_picture1'];?>">
                                        </div>
                                        <label for="background1-image">Upload Image</label>
                                        <input type="file" id="background1-image"  name="bgepic1" accept="image/*" onchange="showPreview(event, 'background1-preview');">
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Background Picture 2</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-input">
                                        <div class="preview">
                                            <img id="background2-preview" src="../../Assets/profile/<?php echo  $row['Bg_picture2'];?>">
                                        </div>
                                        <label for="background2-image">Upload Image</label>
                                        <input type="file" id="background2-image" name="bgepic2" accept="image/*" onchange="showPreview(event, 'background2-preview');">
                                    </div>
                                </div>
                            </div>

                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Your Cv</h5>
								</div>
								<div class="card-body">

                                        <label for="pdfUpload" class="file-label">
                                            Choose PDF file
                                            <span class="file-name"><?php echo  $row['Cv'];?></span>
                                        </label>
                                        <input type="file" id="pdfUpload" class="file-input" name="yourcv" accept=".pdf">
								</div>
							</div>

						
						</div>
					</div>

                        <div class="card">
                            <div class="card-body">
                                <div class="finishbtn">
                                    <button class="btn btn-secondary">Cancel</button>
                                    <button class="btn btn-primary" onclick="submitdetails()">Save and change</button>
                                </div>
                            </div>
                        </div>
				</div>
			</main>
        <?php } ?>
		</div>
	</div>

	<script src="js/app.js"></script>

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

    <script>
        var fileInput = document.getElementById("pdfUpload");
        var fileNameText = document.querySelector(".file-name");

        fileInput.addEventListener("change", function (e) {
            var fileName = e.target.files[0].name;
            fileNameText.textContent = fileName;
        });
    </script>
    <script src="./js/checklocation.js"></script>
    <script src="./js/submitdetails.js"></script>

</body>

</html>
