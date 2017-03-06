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
</head>
<script src="http://localhost/ci/assets/js/jquery-1.10.2.js"></script>
<script src="http://localhost/ci/assets/js/bootstrap.js"></script>
<script src="http://localhost/ci/assets/js/jquery.flexslider.js"></script>
<script src="http://localhost/ci/assets/js/scrollReveal.js"></script>
<script src="http://localhost/ci/assets/js/jquery.easing.min.js"></script>
<script src="http://localhost/ci/assets/js/custom.js"></script>
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
        min-height: 200px;
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
    background-color:#000;
    color: #fff;
}

    #faculty-sec .header-line {
        color: #fff;
    }
#faculty-secs {
    background-color:#000;
    color: #fff;
}

    #faculty-secs .header-line {
        color: #fff;
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
        border: 10px double #fff;
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

<body id="bdy">


 <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <li>
                              <h3>WELCOME TO <?php
                                    foreach($dept as $d) {
                                        //print_r($d);
                                        echo $d['name'];
                                    } 
                                  ?> EDUCATION
                               </h3>




                        </li>  
                    </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>





 <!--/.LIST OF DEPT DETAIL-->


<div id="faculty-sec" >
        <div class="container set-pad" id="first">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">TOP UNIVERSITIES</h1>
                    
                </div>

            </div>
             <!--/.HEADER LINE END-->

                        <div class="row" >
           
                        <?php  foreach($dept as $d) { ?>      
                            <div  data-scroll-reveal="enter from the bottom after 0.4s">
                                <div class="faculty-div">
                                    <table border="2">    
                                    <tr>
                                        <td><img src="<?= $d['uni1'] ?>" width="300" height="423"  class="img-rounded" /></td>
                                        <td><?= $d['uni1_name'];?><br><?= $d['uni1_detail']; ?></td>

                                    </tr>
                                     
                                    <tr>
                                        <td><img src="<?= $d['uni2'] ?>" width="300" height="423"  class="img-rounded" /></td>
                                        <td><?= $d['uni2_name'];?><br><?= $d['uni2_detail']; ?></td>

                                    </tr> 

                                     </table>   
                                </div>
                            </div>
                        <?php } ?>
                        </div>
        </div>
    </div>
    








<!--/.LIST OF BOOK DETAIL-->


<div id="faculty-sec" >
        <div class="container set-pad" id="first">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">TOP BOOKS</h1>
                    
                </div>

            </div>
             <!--/.HEADER LINE END-->

                        <div class="row" >
           
                        <?php  foreach($dept as $d) { ?>      
                            <div   data-scroll-reveal="enter from the bottom after 0.4s">


                                <div class="faculty-div">   
                                    <tr>
                                        <td><img src="<?= $d['book1'] ?>" width="300" height="423"  class="img-rounded" />
                                        
                                        <img src="<?= $d['book2'] ?>" width="300" height="423"  class="img-rounded" /></td>
                                      </tr>  

                                   

                                        
                                </div>
                            </div>
                        <?php } ?>
                        </div>
        </div>
    </div>
    









</body>
</html>