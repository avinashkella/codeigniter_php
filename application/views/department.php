<!DOCTYPE html>
<html>
<?php
session_start();

?>
<head>
	<title>Education</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/ci/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ci/assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ci/assets/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ci/assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
<style type="text/css">
	#bdy{
		margin:0px;
	}
	.home-sec {
    padding-top: 10px;
    padding-bottom: 30px;
    background: url(http://localhost/ci/imges/image.jpg) no-repeat center center;
    padding: 0;
    -webkit-background-size: cover;
    background-size: cover;
    color:#fff;
    background-attachment: fixed;
}

    .home-sec .overlay {
        background: rgba(38, 57, 88, 0.89);
        min-height: 500px;
    }

    .home-sec h6 {
        color: #000000;
        font-weight: 900;
        font-size: 15px;
        text-transform: uppercase;
        padding-bottom: 20px;
    }

    .home-sec h3 {
        text-transform: uppercase;
    }
    #faculty-sec {
    background-color:#fff;
    color: #000;
}

    #faculty-sec .header-line {
        color: #000;
    }
#faculty-secs {
    background-color:#fff;
    color: #000;
}

    #faculty-secs .header-line {
        color: #000;
    }	
    .faculty-div h4 {
    line-height:30px;
    font-weight:700;
}
.faculty-div {
    padding: 30px;
}

    .faculty-div hr {
        border: 1px solid #1A94C4;
    }

    .faculty-div h3 {
        font-size: 25px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .faculty-div p {
        padding-top: 10px;
        padding-bottom: 15px;
    }

    .faculty-div img {
        border: 10px double #000;
    }
    .tag-line {
    background: #E9E9E9;
    color: #000;
}

    .tag-line h2 {
        font-size: 20px;
        font-weight: 900;
        padding: 5px 10px 10px 5px;
        color: #005E5A;
    }

        .tag-line h2 > i {
            margin-left: 8px;
            margin-right: 8px;
        }

</style>
</head>
<script src="http://localhost/ci/assets/js/jquery-1.10.2.js"></script>
<script src="http://localhost/ci/assets/js/bootstrap.js"></script>
<script src="http://localhost/ci/assets/js/jquery.flexslider.js"></script>
<script src="http://localhost/ci/assets/js/scrollReveal.js"></script>
<script src="http://localhost/ci/assets/js/jquery.easing.min.js"></script>
<script src="http://localhost/ci/assets/js/custom.js"></script>


<body id="bdy">
	<div class="home-sec" id="home" >
           <div class="overlay">
 			<div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <li>
                              <h3>DEPARTMENTS </h3>
                              <form method="GET"  action="http://localhost/ci/index.php/test_con"> 
                           		<h6>
                                <select name="number" id="number">
                                  <option value="0">
                                    SELECT DEPARTMENT HERE
                                  </option>
                                  <?php foreach($departments as $department) { ?>
                                  <option value="<?php echo $department->id ?>">
                                    <?php echo $department->name ?>
                                  </option>
                                  <?php } ?>
                                </select>
                              </h6>

                            <button type="submit">Search</button>
                                
                                <?php
                                  if(isset($_POST['number'])){
                                  $_SESSION['number'] = $_POST['number'];
                                  $var = $_SESSION['number'];
                                  
                                  echo $_SESSION['number'];
                                }
                                  ?>
                              </form>

                        </li>
                        
                    
                    </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>




                    


                      



       <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> LIST UNIVERSITIES IN PAKISTAN <i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>
        
    </div>







    <div id="faculty-sec" >
    	<div class="container set-pad" id="first">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">TOP UNIVERSITIES</h1>
                    
                </div>

            </div>
             <!--/.HEADER LINE END-->

        				<div class="row" >
           
           				<?php foreach ($list as $list){ ?>	    
                 			<div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     			<div class="faculty-div">

                     				<a href="<?= $list->link ?>" target="_blank"><img src="<?= $list->img ?>" width="300" height="423"  class="img-rounded" />
                   						<h3 ><?= $list->name ?> </h3>
                 						<hr />
                        
                  		 					<p >
                       								<?= $list->location ?>
                       
                   							</p>
                				</div>
                   			</div>
                      	<?php } ?>
                      	</div>
        </div>
    </div>
</body>
</html>