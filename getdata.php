<?php

// configuration
include 'connection.php';

$row = $_POST['row'];
$rowperpage = 2;

// selecting posts
$query = 'SELECT * FROM apps_details limit '.$row.','.$rowperpage;
$result = mysqli_query($con,$query);

$html = '';

while($row = mysqli_fetch_array($result)){
    $id = $row['app_id'];
    $title = $row['title'];
    $content = $row['content'];
    // $shortcontent = substr($content, 0, 160)."...";
    // $link = $row['link'];
    // Creating HTML structure
    $html .= '<tr id="post_'.$id.'" class="tb_row">';
    $html .= '<td> <img src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" data-src="https://i0.wp.com/cdnh.c3dt.com/icon/3558253-studio.animee.kanime.com.kanime.png?w=32" class="lazyload" alt="Anime Slayer أنمي سلاير Download on Windows" width="32" height="32">
    </td>';
    $html .= '<td> <span>'.$title.'</span></td>';
    // $html .= '<p>'.$shortcontent.'</p>';
    // $html .= '<a href="'.$link.'" target="_blank" class="more">More</a>';
    $html .= '</tr>';

}

echo $html;