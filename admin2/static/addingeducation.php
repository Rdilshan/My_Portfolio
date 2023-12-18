<?php 
    require_once './header.php';
?>
        <link rel="stylesheet" href="css/mydetails.css">
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
            
            <main class="content">
				<div class="container-fluid p-0">
                <!-- <form action="php/add/education.php" method="post" enctype="multipart/form-data"> -->
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Adding new Education</h1>
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
									<input type="text" class="form-control" id="Name" placeholder="Enter Title">
								</div>
							</div>

                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Description</h5>
								</div>
								<div class="card-body">
                                        <div class="pb-5">
                                            <div id="ad_description"></div>
                                        </div>
								</div>
							</div>
							
						</div>
						
					</div>

                        <div class="card">
                            <div class="card-body">
                                <div class="finishbtn">
                                <button class="btn btn-secondary" type="button" onclick="goBack()">Cancel</button>
                                        <button class="btn btn-primary" type="submit" onclick="checking()">Save and change</button>
                                </div>
                            </div>
                        </div>
                <!-- </form> -->
				</div>
			</main>

		</div>
	</div>
    <script>
            function goBack() {
            // Use the history object to navigate back to the previous page
            window.history.back();
        }

        function checking(){
            var quillContent = quill.root.innerHTML;
            var inputValue = document.getElementById('Name').value;

            var data = new FormData();
            data.append('quill_content', quillContent);
            data.append('input_value', inputValue);

           
            var r = new XMLHttpRequest();
                r.onreadystatechange = function() {
                    if (r.readyState == 4) {
                        
                        var text = r.responseText;
                        console.log(text);
                        if(text == "Success"){
                            window.location.href = "education.php";
                        }
                    } 
                }

                r.open("POST", "php/add/education.php", true);
                r.send(data);
        }
        
        
    </script>
	<script src="js/app.js"></script>

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

</body>

</html>