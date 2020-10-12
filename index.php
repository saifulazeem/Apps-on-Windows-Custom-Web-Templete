
<?php

include("connection.php");



?>

<html>
    <head>
        <meta charset="utf-8">
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
                Home
        </title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

        <script src="https://kit.fontawesome.com/4cc19ef96e.js" crossorigin="anonymous"></script>

    </head>

    <body>
        
        
            <div class="fluid-container sticky-top" id="navbar-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <br>
                            <a href="index.html"><h3 style="color: #fff;">Apps on Windows</h3></a>
                        </div>
                        <div class=" col-lg-8 col-md-8 col-sm-12 ">

                            <br>
                            <br>

                            <nav class="" id="ul-container">
                                
                                <ul>
                                    <li><a style="border: 3px solid; border-left-style: hidden; border-right-style: hidden; border-top-style: hidden;" href="index.php">HOME</a></li>
                                    <li><a href="single.php">APPS</a></li>
                                    <li><a href="contactus.html">CONTACT US</a></li>
                                    <li><a href="about.html">ABOUT US</a></li>
                                </ul>
                            </nav>    
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- <div class="container" id="search-container">
               
            </div> -->
            
            
            <div class="container" id="main-body">
                <br>
               
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                            <!-- <form class="md-form active-cyan active-cyan-2 mb-3">
                                <input class="form-control" type="search" name="search_feild" placeholder="Search for Apps">
                                <button class="btn btn-primary">Search</button>
                            </form> -->
                            <div class="input-group md-form form-sm form-2 pl-0">
                                <input class="form-control my-0 py-1 lime-border" name="search-feild" type="text" placeholder="Search for Apps" aria-label="Search">
                                <div class="input-group-append">
                                  <span class="input-group-text lime lighten-2" id="basic-text1"><i type="submit" name="search_btn" class="fas fa-search text-grey"
                                      aria-hidden="true"></i></span>
                                </div>
                              </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <table  class="table table-striped  table-hover table-condensed">
                            <thead style="  opacity: 1; color: rgb(131, 40, 40);text-align:center;">
                                <tr>
                                <th COLSPAN="2" ><h3>Popular Apps/ Games</h3></th>
                                <!-- <th ><h3><?php //echo get_theme_mod('wp_fileinfo_table-col2-text','Extension Type Name'); ?></h3></th> -->
                                
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">

                                <?php
                                    $cat='Game';
                                    $game_data_qry=$con->prepare("SELECT * FROM playstore_apps_data WHERE category=?");
                                    $game_data_qry->bind_param("s",$cat);
                                    $game_data_qry->execute();
                                    $res=$game_data_qry->get_result();
                                    while($data_row=$res->fetch_assoc())
                                    {
                                        $id=$data_row['id'];
                                        $img_url=$data_row['img_url'];
                                        $app_name=$data_row['app_name'];
                                    
                                ?>
                            
                                <tr>
                                
                                <td><img src="<?php echo $img_url ?>"  class="lazyload" alt="<?php echo $app_name ?>" width="32" height="32">
                                </td>
                                <td style="text-align:left;"><span><a href="single.php?mid=<?php echo $id ?>"><?php echo $app_name ?></a></span></td>
                                </tr>
                               
                                    <?php }
                                    $game_data_qry->close();
                                     ?>

                                </tbody>
                            </table>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <table  class="table table-striped  table-hover table-condensed">
                            <thead style="  opacity: 1; color: rgb(131, 40, 40);text-align:center;">
                                <tr>
                                <th COLSPAN="2" ><h3>New + Updated</h3></th>
                                <!-- <th ><h3><?php //echo get_theme_mod('wp_fileinfo_table-col2-text','Extension Type Name'); ?></h3></th> -->
                                
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                                        
                                <?php

                                    $cat='App';
                                    $qry_2=$con->prepare("SELECT * FROM playstore_apps_data WHERE category=? ORDER BY id DESC LIMIT 13  ");
                                    $qry_2->bind_param("s",$cat);
                                    $qry_2->execute();
                                    $res=$qry_2->get_result();
                                    while($data_row=$res->fetch_assoc())
                                    {
                                        $id=$data_row['id'];
                                        $img_url=$data_row['img_url'];
                                        $app_name=$data_row['app_name'];

                                ?>
                            
                                <tr>
                                
                                    <td><img src="<?php echo $img_url ?>"  class="lazyload" alt="<?php echo $app_name ?>" width="32" height="32">
                                    </td>
                                    <td style="text-align:left;"><span><a href="single.php?mid=<?php echo $id ?>"><?php echo $app_name ?></a></span></td>
                                    </tr>
                                    <?php }
                                    $qry_2->close();
                                     ?>
                                   
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="fluid-container" id="footer">
                
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8"><p style="color: #fff; text-align: center;">© 2020 All copyrights Reserved Appsforwindows</p></div>
                    <div class="col-2"></div>
                </div>

                
            </div>
            


    </body>

</html>