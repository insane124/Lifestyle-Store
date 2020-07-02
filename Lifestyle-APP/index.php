<?php
	// if already logged in, go to products page
	if(isset($_SESSION["email_id"])){
		header("location: products.php");
	}

	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LifeStyle Stores</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<?php
			require './includes/header.php';
		?>
		<div id="banner-image">
			<div class="container">
				<div id="banner_content">
					<h1>We sell lifestyle</h1>
					<p>Flat 40% OFF</p>
					<a href="products.php">
						<button class="btn btn-danger btn-lg active">Shop Now</button>
					</a>
				</div>
			</div>
		</div>
            
                <div class="container">
                    <h2>Shop from our Exquisite collection of products!</h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="thumbnail">
                            <a href="products.php" class="thumbnail" ><img src="images/camera.jpg" alt="camera pic"></a>
                            <div class="caption">
                                <h3>Cameras</h3>
                                <p>Choose among the best cameras</p>
                            </div>
                        </div>
                        </div>    
                          
                          <div class="col-sm-4">
                              <div class="thumbnail">
                             <a href="products.php" class="thumbnail" > <img src="images/fashion.jpg" alt="fashion pic"></a>
                             <div class="caption">
                                <h3>Fashion</h3>
                                <p>Shop our luxury collection of fashion!</p>
                            </div>
                              </div>
                          </div>
                        
                        
                          <div class="col-sm-4">
                              <div class="thumbnail">
                                  <a href="products.php" class="thumbnail" > <img src="images/watch.jpg" alt="watch pic"></a>
                             <div class="caption">
                                <h3>Watches</h3>
                                <p>Shop our best collection of watches</p>
                            </div>
                              </div>
                          </div>
                        </div>
                    </div>
                    
                    
             
            <br>
            <br>
            <br>
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>