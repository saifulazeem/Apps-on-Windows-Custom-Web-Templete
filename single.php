<?php

include("connection.php");

if (isset($_GET['mid']))
    {
        $idd=$_GET["mid"];
        $m_query=$con->prepare("SELECT * FROM playstore_apps_data WHERE id=?");
	    $m_query->bind_param("s",$idd);
        $m_query->execute();
        $resultt=$m_query->get_result();

    while($m_row=$resultt->fetch_assoc())
    {
        $t_id=$m_row['id'];
        $playstore_id=$m_row['playstore_id'];
        $appliction_name=$m_row['app_name'];
        $app_dev=$m_row['developer'];
        $app_cat=$m_row['category'];
        $app_icon=$m_row['img_url'];
        $description=$m_row['description'];
        $app_version=$m_row['version'];
        $app_req_android=$m_row['required_android'];
        $app_size=$m_row['size'];
        $app_permissions=$m_row['permissions'];
        $app_dev_email=$m_row['dev_email'];
        $app_dev_web=$m_row['dev_website'];
        $app_dev_address=$m_row['dev_address'];
        $app_installs=$m_row['installs'];
        $app_specific_cat=$m_row['specific_cat'];
        $app_last_updated=$m_row['last_updated_on'];
        $app_overall_rating=$m_row['overall_rating'];
        $app_apk_file=$m_row['apk_file'];

        // echo "<h1>no working </h1>";
     }
   $m_query->close();

    }
    

else
{
    // echo '<h1>No idea</h1>';
    $idd=1;
    $m_query=$con->prepare("SELECT * FROM playstore_apps_data WHERE id=?");
	    $m_query->bind_param("s",$idd);
        $m_query->execute();
        $resultt=$m_query->get_result();

    while($m_row=$resultt->fetch_assoc())
    {
        $t_id=$m_row['id'];
        $playstore_id=$m_row['playstore_id'];
        $appliction_name=$m_row['app_name'];
        $app_dev=$m_row['developer'];
        $app_cat=$m_row['category'];
        $app_icon=$m_row['img_url'];
        $description=$m_row['description'];
        $app_version=$m_row['version'];
        $app_req_android=$m_row['required_android'];
        $app_size=$m_row['size'];
        $app_permissions=$m_row['permissions'];
        $app_dev_email=$m_row['dev_email'];
        $app_dev_web=$m_row['dev_website'];
        $app_dev_address=$m_row['dev_address'];
        $app_installs=$m_row['installs'];
        $app_specific_cat=$m_row['specific_cat'];
        $app_last_updated=$m_row['last_updated_on'];
        $app_overall_rating=$m_row['overall_rating'];
        $app_apk_file=$m_row['apk_file'];

        // echo "<h1>no working </h1>";
     }
   $m_query->close();
}


?>
<html>
    <head>
        <meta charset="utf-8">
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
                Single Page
        </title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

        <script src="https://kit.fontawesome.com/4cc19ef96e.js" crossorigin="anonymous"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    </head>

    <body>
        
        
            <div class="fluid-container sticky-top" id="navbar-header" >
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <br>
                            <a href="index.html"><h3 style="color: #fff;">Apps on Windows</h3></a>
                        </div>
                        <div class="col-8 ">

                            <br>
                            <br>

                            <nav class="" id="ul-container">
                                
                                <ul>
                                    <li><a  href="index.html">HOME</a></li>
                                    <li><a style="border: 3px solid; border-left-style: hidden; border-right-style: hidden; border-top-style: hidden;" href="single.php">APPS</a></li>
                                    <li><a href="contactus.html">CONTACT US</a></li>
                                    <li><a href="aboutus.html">ABOUT US</a></li>
                                </ul>
                            </nav>    
                        </div>
                    </div>
                    
                </div>
            </div>
            <br>
            <br>
            <!-- <div class="container" id="search-container">
                
            </div> -->
            
            <div class="container" id="main-body">

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
                <div class="row" style="padding: 15px;">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <section>
                            <article>
                                    <h2 style="color: #4d4d4d;"><?php echo $appliction_name ?></h2>
                                    <br>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <img src="<?php echo $app_icon ?>" data-src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" class="lazyload" alt="Anime Slayer أنمي سلاير Download on Windows" width="200" height="200">
                                    
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-12">
                                                <br>
                                                <h3 style="color: #4d4d4d;">Description</h3>
                                            <p style="text-align: justify;"><?php
                                                if(strlen($description) > 100) {
                                                    $textdisplaylist = '<div style="text-align: justify;">'.substr($description,0,500).'</div>';
                                                } else {
                                                    $textdisplaylist = '<div style="text-align: justify;">'.substr($description,0,100).'</div>';
                                                }
                                                ?>
                                                <?php echo $textdisplaylist; ?>
                                            </p>
 
                                               <form method="post"> <button style="margin-left:120px; width:50%;" name="download_btn" class="btn btn-primary">Download</button></from>
                                                <?php 
                                                if (isset($_POST['download_btn']))
                                                {
                                                    $file_name = basename($app_apk_file); 
   
                                                // Use file_get_contents() function to get the file 
                                                // from url and use file_put_contents() function to 
                                                // save the file by using base name 
                                                    if(file_put_contents( $file_name,file_get_contents($app_apk_file)))
                                                    { 
                                                        echo "File downloaded successfully"; 
                                                    } 
                                                    else { 
                                                        echo "File downloading failed.";
                                                        echo'<br>'; 
                                                        echo $app_apk_file;
                                                    }
                                                }
                                                  ?>
                                            </div>
                                            
                                        </div>
                                        </div>
                                        <div class="row">
                                            
        
                                            <h3 style="color: #4d4d4d;">App Details</h3>
                                            <table class="table table-striped table-bordered table-hover table-condensed">
                                                <!-- <thead>
                                                    <tr>
                                                    <th>Developer</th>
                                                    <th>Category</th>
                                                    <th>Format</th>
                                                    <th>Ratings</th>
                                                    </tr>
                                                </thead> -->
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">Developer</th>
                                                    <td><?php echo $app_dev ?></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">Type</th>
                                                    <td><?php echo $app_cat ?></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">Rating</th>
                                                    <td><?php echo $app_overall_rating ?></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">Last Updated</th>
                                                    <td><?php echo $app_last_updated ?></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">Version</th>
                                                    <td><?php echo $app_version ?></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">Size</th>
                                                    <td><?php echo $app_size ?></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">Developer Email</th>
                                                    <td><?php echo $app_dev_email ?></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">Category</th>
                                                    <td><?php echo $app_specific_cat ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                                   
                                             <h3  style="color: #4d4d4d;">About this app</h3>
                                             <p style="text-align: justify;"> <?php
                                                // if(strlen($description) > 100) {
                                                //     $textdisplaylist = '<div style="text-align: justify;">'.substr($description,0,500).'</div>';
                                                // } else {
                                                //     $textdisplaylist = '<div style="text-align: justify;">'.substr($description,0,100).'</div>';
                                                // }
                                                echo $description
                                                ?></p>
        
                                            <h3 style="color: #4d4d4d;">How to install <?php echo $appliction_name ?>?</h3>
                                            <p style="text-align: justify;"><i>Instruction on how to install <?php echo $appliction_name ?> on Windows XP/7/8/10 Pc & Laptop</i>
        
                                                In this post, I am going to show you how to install <?php echo $appliction_name ?> on Windows PC by using Android App Player such as BlueStacks, Nox, KOPlayer,
                                                Before you start, you will need to download the apk installer file, you can find download button on top of this page. Save it to easy-to-find location.
        
                                                [Note]: You can also download older versions of this app on bottom of this page.
                                                
                                                Below you will find a detailed step-by-step guide, but I want to give you a fast overview how it works. All you need is an emulator that will emulate an
                                                 Android device on your Windows PC and then you can install applications and use it - you see you're actually playing it on Android, but this runs not on a
                                                  smartphone or tablet, it runs on a PC.If this doesn't work on your PC, or you cannot install, comment here and we will help you! </p>
        
                                                  <table class="table table-striped table-bordered table-hover table-condensed">
                                                    <!-- <thead>
                                                        <tr>
                                                        <th>Developer</th>
                                                        <th>Category</th>
                                                        <th>Format</th>
                                                        <th>Ratings</th>
                                                        </tr>
                                                    </thead> -->
                                                    <tbody>
                                                        <tr>
                                                        <th scope="row">Application 1</th>
                                                        <td><a href="http://bluestacks.com">Bluestacks</a></td>
                                                        </tr>
                                                        <tr>
                                                        <th scope="row">Application 2</th>
                                                        <td><a href="http://bignox.com">Bignox</a></td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
        
                                                <h3 style="color: #4d4d4d;">Step By Step Guide To Install <?php echo $appliction_name ?> using BlueStacks</h3>
                                                <p style="text-align: justify;">
                                                    <b>Step 1)</b> Download & Install BlueStacks at: <a href="http://bluestacks.com">http://bluestacks.com</a>
        
                                                </p>
                                                
                                                <p style="text-align: justify;">
                                                    <b>Step 2)</b> Open the apk file: Double-click the apk file to launch BlueStacks and install the application. If your apk file doesn't automatically open BlueStacks,
                                                     right-click on it and select Open with... Browse to the BlueStacks. You can also drag-and-drop the apk file onto the BlueStacks home screen
        
                                                </p>
                                                
                                                <p style="text-align: justify;">
                                                    <b>Step 3)</b> After install, just click Run to open, it works like a charm :D.
        
                                                </p>
        
                                                <h3 style="color: #4d4d4d;">How to install <?php echo $appliction_name ?> on Windows PC using NoxPlayer</h3>
                                                <p style="text-align: justify;">
                                                    <b>Step 1)</b> Download & Install NoxPlayer at: <a href="http://bignox.com">http://bignox.com</a> . The installation is easy to carry out.
        
                                                </p>
                                                
                                                <p style="text-align: justify;">
                                                    <b>Step 2)</b> Drag the apk file to Nox and drop it. The File Manager will show up. Click the Open XXX Folder button under the file sign that turns blue.
        
                                                </p>
                                                
                                                <p style="text-align: justify;">
                                                    <b>Step 3)</b> Then you will be able to install the apk you just download from your computer to Nox or move/copy the file to other locations in Nox.
        
                                                </p>
                                        
                                        </article>
                                </section>
                               
        
                                <div class="old-versions">
                                    <table class="table table-striped  table-hover table-condensed">
                                        <thead style="  opacity: 1; color: rgb(131, 40, 40);text-align:center;">
                                            <tr>
                                                <th COLSPAN="5">
                                                    <h3 >Previous Versions</h3>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><span></span><a href="#abc"> <?php echo $appliction_name ?>  </a></span></td>
                                                <td>2.3.9</td>
                                                <td>21.4 MB</td>
                                                <td><a href="#downloads"><i class="fas fa-download"></i></a></td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><span></span><a href="#abc"> Slayer أنمي سلاير  on Windows PC  </a></span></td>
                                                <td>2.3.9</td>
                                                <td>21.4 MB</td>
                                                <td><a href="#downloads"><i class="fas fa-download"></i></a></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><span></span><a href="#abc"> Slayer أنمي سلاير  on Windows PC  </a></span></td>
                                                <td>2.3.9</td>
                                                <td>21.4 MB</td>
                                                <td><a href="#downloads"><i class="fas fa-download"></i></a></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><span></span><a href="#abc"> Slayer أنمي سلاير  on Windows PC  </a></span></td>
                                                <td>2.3.9</td>
                                                <td>21.4 MB</td>
                                                <td><a href="#downloads"><i class="fas fa-download"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <!-- <div class="contact-form">
                                    <h3 style="color: #4d4d4d;">CONTACT US</h3>
                                    <br>
                                    <form >
                                        <input class="form-control" type="email" name="u_email" placeholder="Email Address Here..." required>
                                        <br>
                                        <textarea class="form-control" type="text" name="u_message" placeholder="Your Message.." required ></textarea>
                                        <br>
                                       <input style=" width: 30%; margin-left: 33%;" class="btn btn-primary" type="submit" name="send_message" value="Send">
                                    </form>
        
                                </div> -->

                                
                                        
                                <div class="panel-body">
                                        <h3 style="color: #4d4d4d;">DISCUSSION</h3>
                                        <textarea placeholder="Write your comment here!" class="pb-cmnt-textarea"></textarea>
                                        <form class="form">
                                                        <!-- <div class="btn-group">
                                                            <button class="btn" type="button"><span class="fa fa-picture-o fa-lg"></span></button>
                                                            <button class="btn" type="button"><span class="fa fa-video-camera fa-lg"></span></button>
                                                            <button class="btn" type="button"><span class="fa fa-microphone fa-lg"></span></button>
                                                            <button class="btn" type="button"><span class="fa fa-music fa-lg"></span></button>
                                                        </div> -->
                                                        <br>
        
                                            <button style="float: right;" class="btn btn-primary" type="button">Comment</button>
                                        </form>
                                </div>
                               
                                         
                                  

                               
        
                    </div>
                                
                              
                
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        
                           <?php
                            include("loadmore.php");
                           ?>
                            

                            
                            <div class="most-pop-apps">
                                <table  class="table table-striped  table-hover table-condensed">
                                    <thead style="  opacity: 1; color: rgb(131, 40, 40);text-align:center;">
                                        <tr>
                                        <th COLSPAN="2" ><h3>Games</h3></th>
                                        <!-- <th ><h3><?php //echo get_theme_mod('wp_fileinfo_table-col2-text','Extension Type Name'); ?></h3></th> -->
                                        
                                        </tr>
                                    </thead>
                                    <tbody style="text-align:center;">
                                    
                                        <tr>
                                        
                                        <td><img src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" data-src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" class="lazyload" alt="Anime Slayer أنمي سلاير Download on Windows" width="32" height="32">
                                        </td>
                                        <td><span>Anime Slayer أنمي سلاير</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://i0.wp.com/cdna.c3dt.com/icon/419703-com.olzhas.carparking.multyplayer.png?w=32" data-src="https://i0.wp.com/cdna.c3dt.com/icon/419703-com.olzhas.carparking.multyplayer.png?w=32" class="lazyload" alt="Car Parking Multiplayer Download on Windows" width="32" height="32">
                                            </td>
                                            <td><span>Car Parking Multiplayer</span></td>
                                        </tr>
                                        <tr>
                                        
                                            <td><img src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" data-src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" class="lazyload" alt="Anime Slayer أنمي سلاير Download on Windows" width="32" height="32">
                                            </td>
                                            <td><span>Anime Slayer أنمي سلاير</span></td>
                                         </tr>
                                        <tr>
                                            <td>
                                                <img src="https://i0.wp.com/cdna.c3dt.com/icon/419703-com.olzhas.carparking.multyplayer.png?w=32" data-src="https://i0.wp.com/cdna.c3dt.com/icon/419703-com.olzhas.carparking.multyplayer.png?w=32" class="lazyload" alt="Car Parking Multiplayer Download on Windows" width="32" height="32">
                                            </td>
                                            <td><span>Car Parking Multiplayer</span></td>
                                        </tr>
                                        <tr>
                                        
                                            <td><img src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" data-src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" class="lazyload" alt="Anime Slayer أنمي سلاير Download on Windows" width="32" height="32">
                                            </td>
                                            <td><span>Anime Slayer أنمي سلاير</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://i0.wp.com/cdna.c3dt.com/icon/419703-com.olzhas.carparking.multyplayer.png?w=32" data-src="https://i0.wp.com/cdna.c3dt.com/icon/419703-com.olzhas.carparking.multyplayer.png?w=32" class="lazyload" alt="Car Parking Multiplayer Download on Windows" width="32" height="32">
                                            </td>
                                             <td><span>Car Parking Multiplayer</span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td><img src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" data-src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" class="lazyload" alt="Anime Slayer أنمي سلاير Download on Windows" width="32" height="32">
                                            </td>
                                            <td><span>Anime Slayer أنمي سلاير</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://i0.wp.com/cdna.c3dt.com/icon/419703-com.olzhas.carparking.multyplayer.png?w=32" data-src="https://i0.wp.com/cdna.c3dt.com/icon/419703-com.olzhas.carparking.multyplayer.png?w=32" class="lazyload" alt="Car Parking Multiplayer Download on Windows" width="32" height="32">
                                            </td>
                                             <td><span>Car Parking Multiplayer</span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td><img src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" data-src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" class="lazyload" alt="Anime Slayer أنمي سلاير Download on Windows" width="32" height="32">
                                            </td>
                                            <td><span>Anime Slayer أنمي سلاير</span></td>
                                        </tr>
        
                                        </tbody>
                                    </table>

                            </div>
                       

                    </div>
                </div>
            </div>
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



