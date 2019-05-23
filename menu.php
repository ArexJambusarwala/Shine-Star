<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>Shine Foods</title>
        <!--Bootstrap style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></link>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Style -->
        <link rel="stylesheet" type="text/css" href="Stylesheets/styles.css">
        <link rel="stylesheet" type="text/css" href="Stylesheets/menustyles.css">
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
      <!--Font-->
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    </head>
    <body>
        <!-- Navbar -->
        <?php include('./Components/navbar.php')?>
        <!-- Navbar -->


        <!--Chapati Variants-->
        <div class="container">
            <h1 style="color: #4ca1af">Curries along with 3 Chapatis    <i class="fa fa-question-circle" 
            aria-hidden="true" data-toggle="tooltip" data-placement="bottom" data-html="true" id="chapati-tooltip"
            title="
                    <p style='font-size:20px;'>3 chapatis served along with 2 curries</p>
                    <p style='font-size:20px;'>One complimentary buttermilk</p>
                    <p style='font-size:20px;'>One packet costs 45/-</p>"></i></h1>
            
            <div class="table-responsive">          
                <table class="table">
                  <tbody>
                    <tr>
                        <td>Paneer Curry</td>
                        <td>
                            <div class="item-img-wrapper">
                                <img class="item-img" src="" alt="Item image here">
                            </div>
                            <!--<div class="button-header">
                                <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                            </div> -->    
                        </td>
                    </tr>
                    <tr>
                        <td>Spinach+Daal</td>
                        <td>
                            <div class="item-img-wrapper">
                                <img class="item-img" src="" alt="Item image here">
                            </div>                          
                            <!--<div class="button-header">
                                <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                            </div> -->    
                        </td>
                      </tr>
                      <tr>
                        <td>Beans & Carrot Curry</td>
                        <td>
                            <div class="item-img-wrapper">
                                <img class="item-img" src="" alt="Item image here">
                            </div>
                            <!--<div class="button-header">
                                <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                            </div> -->    
                        </td>
                      </tr>
                      <tr>
                        <td>Beans & Alu Curry</td>
                        <td>
                            <div class="item-img-wrapper">
                                <img class="item-img" src="" alt="Item image here">
                            </div>
                            <!--<div class="button-header">
                                <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                            </div> -->    
                        </td>
                      </tr>
                      <tr>
                        <td>Capsicum & Alu Curry</td>
                        <td>
                            <div class="item-img-wrapper">
                                <img class="item-img" src="" alt="Item image here">
                            </div>
                            <!--<div class="button-header">
                                <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                            </div> -->    
                        </td>
                      </tr>
                      <tr>
                        <td>Beetroot Curry</td>
                        <td>
                            <div class="item-img-wrapper">
                                <img class="item-img" src="" alt="Item image here">
                            </div>
                            <!--<div class="button-header">
                                <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                            </div> -->    
                        </td>
                      </tr>
                      <tr>
                        <td>Brinjal Curry</td>
                        <td>
                            <div class="item-img-wrapper">
                                <img class="item-img" src="" alt="Item image here">
                            </div>
                            <!--<div class="button-header">
                                <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                            </div> -->    
                        </td>
                      </tr>
                      <tr>
                        <td>Cluster Beans Curry</td>
                        <td>
                            <div class="item-img-wrapper">
                                <img class="item-img" src="" alt="Item image here">
                            </div>
                            <!--<div class="button-header">
                                <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                            </div> -->    
                        </td>
                      </tr>
                      <tr>
                        <td>Ladys finger Curry</td>
                        <td>
                            <div class="item-img-wrapper">
                                <img class="item-img" src="" alt="Item image here">
                            </div>
                            <!--<div class="button-header">
                                <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                            </div> -->    
                        </td>
                      </tr>
                      <tr>
                        <td>Ivy Gourd Curry</td>
                        <td>
                            <div class="item-img-wrapper">
                                <img class="item-img" src="" alt="Item image here">
                            </div>
                            <!--<div class="button-header">
                                <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                            </div> -->    
                        </td>
                      </tr>
                      <tr>
                        <td>Bottle Gourd Curry</td>
                        <td>
                            <div class="item-img-wrapper">
                                <img class="item-img" src="" alt="Item image here">
                            </div>
                            <!--<div class="button-header">
                                <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                            </div> -->    
                        </td>
                      </tr>

                  </tbody>
                </table>
            </div>
        </div>
        <!--Chapati -->

        <!-- Rice -->
        <div class="rice-wrapper">
        <h1 style="color: white;">Rice varieties    <i class="fa fa-question-circle" 
            aria-hidden="true" data-toggle="tooltip" data-placement="bottom" data-html="true" id="rice-tooltip"
            title="
                    <p style='font-size:20px; color:#4ca1af;'>One narmal rice served with one type poder rice mixed in a curry</p>
                    <p style='font-size:20px; color:#4ca1af;'>One complimentary buttermilk</p>
                    <p style='font-size:20px; color:#4ca1af;'>One packet costs 45/-</p>"></i></h1>
        <div class="container">
            <div class="row" id="rice-variants">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h2 style="text-align: center; color: white;">Normal Rice</h2>
                    <ul class="item-ul">
                        <li>Pulihora</li>
                        <li>Zeera Rice</li>
                        <li>Tomato Rice</li>
                        <li>Fried Rice</li>
                        <li>Veg Biryani</li>
                        <li>Pongal</li>
                        <li>Bisi Bela Bath</li>
                        <li>Curd rice (Daddojanam)</li>
                        <li>Pea Rice</li>
                        <li>Corn Rice</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h2 style="text-align: center; color: white;">Powder Rice For Mixing</h2>
                    <ul class="item-ul">
                        <li>Peanut Powder Rice</li>
                        <li>Red gram Powder Rice (Kandi Podi)</li>
                        <li>Sesame Powder Rice (Nuvvulu)</li>
                        <li>Sweet neem Powder Rice (karivepaku)</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h2 style="text-align: center; color: white;">Curries</h2>
                    <ul class="item-ul">
                        <li>Beans & Carrot curry</li>
                        <li>Beans & Alu curry</li>
                        <li>Capsicum & Alu curry</li>
                        <li>Beetroot Curry</li>
                        <li>Brinjal</li>
                        <li>Cluster Beans curry</li>
                        <li>Ladys finger curry</li>
                        <li>Ivy gourd curry</li>
                        <li>Bottle ground curry</li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <!-- Rice -->

        <!-- Butter Milk-->
        <h1 style="color: #4ca1af">Complementary Butter Milk</h1>
        <div class="container">
                <div class="table-responsive">          
                    <table class="table">
                      <tbody>
                        <tr>
                            <td style="text-align: center;">Jeera</td>
                            <td style="text-align: center;">
                                <div class="item-img-wrapper">
                                    <img class="item-img" src="" alt="Item image here">
                                </div>
                                <!--<div class="button-header">
                                    <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                                </div> -->    
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">Masala</td>
                            <td style="text-align: center;">
                                <div class="item-img-wrapper">
                                    <img class="item-img" src="" alt="Item image here">
                                </div>                          
                                <!--<div class="button-header">
                                    <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                                </div> -->    
                            </td>
                          </tr>
                          <tr>
                            <td style="text-align: center;">Salt+Nimboo</td>
                            <td style="text-align: center;">
                                <div class="item-img-wrapper">
                                    <img class="item-img" src="" alt="Item image here">
                                </div>
                                <!--<div class="button-header">
                                    <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                                </div> -->    
                            </td>
                          </tr>
                          <tr>
                            <td style="text-align: center;">Mint leaf</td>
                            <td style="text-align: center;">
                                <div class="item-img-wrapper">
                                    <img class="item-img" src="" alt="Item image here">
                                </div>
                                <!--<div class="button-header">
                                    <a><i class="fa fa-plus" aria-hidden="true"></i>Add Item</a>
                                </div> -->    
                            </td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <!-- Butter Milk-->

        <!--Footer-->
        <?php include('./Components/footer.php');?>
        <!--Footer -->
        <script>
            $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip(); 
            });
        </script>
        <?php 
  echo "<script>";
  if(isset($_SESSION['access_token'])){
    echo "document.getElementById('logout').style.display='inline-block';";
    echo "document.getElementById('register').style.display='none';";
  }
  else
  {
    echo "document.getElementById('register').style.display='inline-block';";
    echo "document.getElementById('logout').style.display='none';";
  }
  echo "</script>";

?>

    </body>
</html>