<?php
include "connection.php";


?>
<!doctype html>
<html>
    <head>
        <title>Load more data using jQuery,AJAX, and PHP</title>
        <!-- <link href="style.css" type="text/css" rel="stylesheet"> -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
        <script>
        $(document).ready(function(){

// Load more data
$('.load-more').click(function(){
    var row = Number($('#row').val());
    var allcount = Number($('#all').val());
    var rowperpage = 10;
    row = row + rowperpage;

    if(row <= allcount){
        $("#row").val(row);

        $.ajax({
            url: 'getData.php',
            type: 'post',
            data: {row:row},
            beforeSend:function(){
                $(".load-more").text("Loading...");
            },
            success: function(response){

                // Setting little delay while displaying new content
                setTimeout(function() {
                    // appending posts after last post with class="post"
                    $(".tb_row:last").after(response).show().fadeIn("slow");

                    var rowno = row + rowperpage;

                    // checking row value is greater than allcount or not
                    if(rowno > allcount){

                        // Change the text and background
                        $('.load-more').text("Hide");
                        $('.load-more').css("background","darkorchid");
                    }else{
                        $(".load-more").text("Load more");
                    }
                }, 2000);

            }
        });
    }else{
        $('.load-more').text("Loading...");

        // Setting little delay while removing contents
        setTimeout(function() {

            // When row is greater than allcount then remove all class='post' element after 3 element
            $('.tb_row:nth-child(10)').nextAll('.tb_row').remove();

            // Reset the value of row
            $("#row").val(0);

            // Change the text and background
            $('.load-more').text("Load more");
            $('.load-more').css("background","#15a9ce");
            
        }, 2000);


    }

});

});

        </script>
    </head>
    <style>


/* Load more */
.load-more{
    width: 100%;
    background: #15a9ce;
    text-align: center;
    color: white;
    padding: 10px 0px;
    font-family: sans-serif;
}

.load-more:hover{
    cursor: pointer;
}

    </style>
    <body>
       

            <?php
            $rowperpage = 10;

            // counting total number of posts
            $allcount_query = "SELECT count(*) as allcount FROM playstore_apps_data";
            $allcount_result = mysqli_query($con,$allcount_query);
            $allcount_fetch = mysqli_fetch_array($allcount_result);
            $allcount = $allcount_fetch['allcount'];

            // select first 5 posts
            $query = "select * from playstore_apps_data order by id asc limit 0,$rowperpage ";
            $result = mysqli_query($con,$query) or die("Error: " . mysqli_error($con));
            ?>

             <!--Start -->
             <div class="Most-like-app-container" >
                            <table  class="table table-striped  table-hover table-condensed">
                                <thead style="  opacity: 1; color: rgb(131, 40, 40);text-align:center;">
                                    <tr>
                                    <th COLSPAN="2" ><h3>Recent Apps</h3></th>
                                    <!-- <th ><h3><?php //echo get_theme_mod('wp_fileinfo_table-col2-text','Extension Type Name'); ?></h3></th> -->
                                    
                                    </tr>
                                </thead>
                                <tbody style="text-align:center;">

            <?php

            while($row = mysqli_fetch_array($result)){

                $mid = $row['id'];
                $title = $row['app_name'];
                $conttent = $row['img_url'];
                // $shortcontent = substr($content, 0, 160)."...";
                // $link = $row['link'];
            ?>

                

                   
                                
                                    <tr class="tb_row" id="post_<?php echo $mid; ?>">
                                    
                                    <td><img src="<?php echo $conttent ?>"  class="lazyload" alt="Anime Slayer أنمي سلاير Download on Windows" width="32" height="32">
                                    </td>
                                    <td style="text-align:left;"><span><a href="single.php?mid=<?php echo $mid ?>"><?php echo $title ?></a></span></td>
                                    </tr>
                                    

                                

                    <!-- End -->
                    <!-- <h1><?php //echo $title; ?></h1>
                    <p>
                        <?php //echo $shortcontent; ?>
                    </p> -->
                    <!-- <a href="'.$link.'" target="_blank" class="more">More</a> -->
            

            <?php
            }
            ?>
               </tbody>
                            </table>
                    </div> 

            <button class="btn btn-primary load-more">Load More</button>
            <input type="hidden" id="row" value="0">
            <input type="hidden" id="all" value="<?php echo $allcount; ?>">

        
    </body>
</html>