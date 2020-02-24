<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Keefe</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto mt-0 p-1 text-uppercase">
				    	<form class="form-inline ml-1 mt-1">
				      		<input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
				      		<button class="btn btn-outline-success my-2 my-sm-0 mr-3" type="submit">Search</button>
				    	</form>
				    <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          ADMIN
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Edit</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">log out</a>
			        </div>
			        </li>
                </ul>
            </div>
        </div>
	</div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/header-bg.jpg');">
        <div class="container"></div>
    </header>
    <body>
        <div class="row mt-5 pt-5 mr-5">
        <div class="col-md-2 bg-dark op-4 p-5 pt-5">
			<ul class="nav flex-column ml-1 mb-5 md-3">
			  
			  <li class="nav-item">
			    <a class="nav-link text-white" href="index.php">Dashboard</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" data-toggle="modal" href="#portfolioModal1">Tambah Item</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="items.php">Kelola Item</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="customers.php">Customers</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="orderdetails.php">Detail Pemesanan</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="logout.php">Logout</a><hr class="bg-secondary">
			  </li>
			</ul>
        </div>
    	<div class="col-md-10 p-2 pt-5 ">
    		<a class="nav-link text-black mt-2" href="#" ><h3>Dashboard</h3></a><hr class="bg-secondary mt-1"></li>
        	<div class="alert alert-danger">                       
                        &nbsp; &nbsp; Welcome to EDGE Skateshop! So, if you're looking for an Element skateboard, why not visit the EDGE Skateshop? 
						It's that easy. If you have a favorite skate brand, 
						this is the easiest and most straightforward way to get it.A lot of skate brands who are well known for one thing, 
						like decks, also sell completes with 
						their own special wheels, along with other brands for things like trucks, bearings, etc.
                    </div>
					<br />
			
			<div class="alert alert-default" style="background-color:black;">
                       <p style="color:white;text-align:center;">
                       &copy 2020 Keefe | All Rights Reserved |  Design by : NakEdgy Team

						</p>
                        
                    </div>
            
        </div>
     </div>

     <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <form enctype="multipart/form-data" method="post" action="additem.php">
                                       <fieldset>
                                        
                                            
                                                <p>Name of Item:</p>
                                                <div class="form-group">
                                                
                                                    <input class="form-control" placeholder="Name of Item" name="item_name" type="text" required>
                                               
                                                 
                                                </div>
                                            
                                                
                                                <p>Price:</p>
                                                <div class="form-group">
                                                
                                                    <input id="priceinput" class="form-control" placeholder="Price" name="item_price" type="text" required>
                                               
                                                 
                                                </div>
                                                
                                                
                                                <p>Choose Image:</p>
                                                <div class="form-group">     
                                                    <input class="form-control"  type="file" name="item_image" accept="image/*" required/>
                                               
                                                </div>
                                       
                                       
                                         </fieldset>
                                      
                                
                                  </div>
                                  <div class="modal-footer">
                                   
                                    <button class="btn btn-success btn-md" name="item_save">Save</button>
                                    
                                     <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
                                    
                                    
                                       </form>
                                  </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    	</div>
     </body>
	              
        <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      $('#example').dataTable();
    });
    </script>
          <script>
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>