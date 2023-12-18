<?php

require_once './connection.php';
if(isset($_GET['artid'])){
    $id = $_GET['artid'];
    $sql ="SELECT * FROM MyBlog WHERE id ='$id'";
    $result = $conn->query($sql);
}else{
    header("Location: ./index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="icon" href="./Assets/web/67_White.png" type="image/x-icon" />

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.ico">
<!-- <link rel="icon" type="image/png" href="./assets/img/favicon.ico"> -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Mundana Template by WowThemesNet</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,700" rel="stylesheet">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- Main CSS -->
<link href="./main.css" rel="stylesheet"/>
</head>
<body>

    
<!--------------------------------------
HEADER
--------------------------------------->
<?php
    while($row= $result->fetch_assoc()) { 
?>
<div class="container">
	<div class="jumbotron jumbotron-fluid mb-3 pl-0 pt-0 pb-0 bg-white position-relative">
		<div class="h-100 tofront">
			<div class="row justify-content-between">
				<div class="col-md-6 pt-6 pb-6 pr-6 align-self-center">
					<p class="text-uppercase font-weight-bold">
						<a class="text-danger" href="./index.php">My blog</a>
					</p>
					<h1 class="display-4 secondfont mb-3 font-weight-bold"><?php echo $row['Title'];?></h1>
					<!-- <p class="mb-3">
						 Analysts told CNBC that the currency could hit anywhere between $1.35-$1.40 if the deal gets passed through the U.K. parliament.
					</p> -->
					<div class="d-flex align-items-center">
                    <?php
                            $sql1 = "SELECT * FROM Detila";
                            $result1 = $conn->query($sql1);
                            while($row1= $result1->fetch_assoc()) { ?>
						<img class="rounded-circle" src="Assets/profile/<?php echo $row1['Profile_Pic'] ?>" width="70">
						<small class="ml-2">
                        <?php
                                echo $row1['Name'];
                            }
                        ?> 
                        <span class="text-muted d-block"><?php echo $row['date'];?> &middot;</span>
						</small>
					</div>
				</div>
				<div class="col-md-6 pr-0">
					<img src="Assets/blog/<?php echo $row['picture']?>" style="height: 100%;object-fit: cover;">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Header -->
    
<!--------------------------------------
MAIN
--------------------------------------->
<div class="container pt-4 pb-4">
	<div class="row justify-content-center">
		<div class="col-lg-2 pr-4 mb-4 col-md-12">
			<div class="sticky-top text-center">
				
				<div class="share d-inline-block">
					<!-- AddToAny BEGIN -->
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
					</div>
					<script async src="https://static.addtoany.com/menu/page.js"></script>
					<!-- AddToAny END -->
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-8">
			<article class="article-post">
            
			<p>
                <?php echo $row['Description'] ?>
			</p>
			<!-- <p>
				 Burn rate release facebook termsheet equity technology. Interaction design rockstar network effects handshake creative startup direct mailing. Technology influencer direct mailing deployment return on investment seed round.
			</p>
			<p>
				 Termsheet business model canvas user experience churn rate low hanging fruit backing iteration buyer seed money. Virality release launch party channels validation learning curve paradigm shift hypotheses conversion. Stealth leverage freemium venture startup business-to-business accelerator market.
			</p>
			<p>
				 Freemium non-disclosure agreement lean startup bootstrapping holy grail ramen MVP iteration accelerator. Strategy market ramen leverage paradigm shift seed round entrepreneur crowdfunding social proof angel investor partner network virality.
			</p> -->
			</article>
			
		</div>
	</div>
</div>

    
<div class="container pt-4 pb-4">
	<h5 class="font-weight-bold spanborder"><span>Read next</span></h5>
	<div class="row">
		<div class="col-lg-6">
        <?php
                $sql2 = "SELECT * FROM MyBlog WHERE id <> '$id' ORDER BY RAND() LIMIT 1";
                $result2 = $conn->query($sql2);
                while($row2= $result2->fetch_assoc()) {?>
			<div class="card border-0 mb-4 box-shadow h-xl-300">
				<div style="background-image: url(Assets/blog/<?php echo $row2['picture']?>); height: 150px; background-size: cover; background-repeat: no-repeat;">
				</div>
                
				<div class="card-body px-0 pb-0 d-flex flex-column align-items-start">
					<h2 class="h4 font-weight-bold">
					<a class="text-dark" href="./article.php?artid=<?php echo $row2['Id'];?>"><?php echo $row2['Title']?></a>
					</h2>
					<p class="card-text">
                        <?php
                                $part = substr($row2['Description'], 0, 200);
                                $lastSpace = strrpos($part, ' ');
                                $part = substr($part, 0, $lastSpace);
                                echo $part . "...";
                        ?>
					</p>
					<div>
						<!-- <small class="d-block"><a class="text-muted" href="./author.html">Favid Rick</a></small> -->
						<small class="text-muted"><?php echo $row2['date']?></small>
					</div>
				</div>

                <?php }?>
			</div>
		</div>

		<div class="col-lg-6">
            <div class="flex-md-row mb-4 box-shadow h-xl-300">
        <?php
                $sql3 = "SELECT * FROM MyBlog WHERE id <> '$id' ORDER BY RAND() LIMIT 3";
                $result3 = $conn->query($sql3);
                while($row3= $result3->fetch_assoc()) {?>

			
				<div class="mb-3 d-flex align-items-center">
					<img height="80" src="/Assets/blog/<?php echo $row3['picture']?>">
					<div class="pl-3">
						<h2 class="mb-2 h6 font-weight-bold">
						<a class="text-dark" href="./article.php?artid=<?php echo $row3['Id'];?>"><?php echo $row3['Title']?></a>
						</h2>
						<div class="card-text text-muted small">
                        <?php
                                $part = substr($row3['Description'], 0, 100);
                                $lastSpace = strrpos($part, ' ');
                                $part = substr($part, 0, $lastSpace);
                                echo $part . "...";
                        ?>
						</div>
						<small class="text-muted"><?php echo $row3['date']?></small>
					</div>
				</div>
        <?php } ?>
				

			</div>
		</div>
	</div>
</div>

<?php } ?>
</body>
</html>