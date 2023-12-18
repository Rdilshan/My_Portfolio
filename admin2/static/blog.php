<?php 
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
    require_once '../../connection.php';
    require_once './checkLogin.php';
    require_once './header.php';
?>
<!-- <link rel="stylesheet" href="css/skills.css"> -->
<style>
/* .contentable tr:hover {
    color: white;
    background-color: black;
} */

</style>
            <main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Blog</h1>
						<a class="badge bg-dark text-white ms-2" href="./addclog.php">
                               Adding new Blog
                            </a>
					</div>
					
                    <div class="row">
                        <!-- support-section start -->
                        <div class="col-sm-12">
                            <div class="card" style="padding: 20px;">
                                <div style="margin-top: 15px;" class="">
                                    <table id="customerTable" class="table table-striped" style="width:100%">
                                        <thead>

                                            <tr>
                                                <th> # </th>
                                                <th> Title</th>
                                                <th> Description</th>
                                                <th> picure</th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>

                                        <tbody class="contentable">
                                            <?php 

                                                $i =1;
                                                $sql = "SELECT * FROM `MyBlog` ORDER BY `MyBlog`.`Id` DESC";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td> <?php echo $i; ?> </td>
                                                <td> <?php echo $row['Title']; ?></td>
                                                <td> 
                                                    <?php
                                                        $description = $row['Description'];
                                                        $words = str_word_count($description, 1); 
                                                        $truncatedDescription = implode(' ', array_slice($words, 0, 30)); 

                                                        echo $truncatedDescription;
                                                    ?>
                                                </td>
                                                <td> <div><img src="../../Assets/blog/<?php echo $row['picture']; ?>" alt="" srcset="" style="width: 180px;height: 100px;object-fit: contain;"></div></td>
                                                <td> 
                                                        <a href="editblog.php?id=<?php echo $row['Id']; ?>"><img src="../../Assets/web/edit1.png" alt="" style="width:25px;height:25px; margin-right:5px;"></a>
                                                        <a onclick="deleteRecord(<?php echo $row['Id']; ?>)"><img src="../../Assets/web/delete.png" alt="" style="width:25px;height:25px; margin-right:5px;"></a>
                                                </td>
                                                <?php  $i = $i + 1; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteRecord(idnum) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        
                        window.location.href = 'php/delect/blog.php?delete_id=' + idnum;
                        
                    }
                })
        }
    </script>
	<script src="js/app.js"></script>
    <script src="./js/checklocation.js"></script>
</body>

</html>