<?php
    /***************   some Universal Constants here        **********************/
   /*************/     $script_name = "1337x -Movie Bunkers ";         /********************/
  /*************/      $site_name = "Movie Bunkers";         /*******************/
 /*************/       $site_link = $_SERVER['SERVER_NAME'];  /******************/
/**************        END OF UNIVERSAL CONSTANTS           ******************/
 //$search = $_POST['word'];
//$whomtosents    = $whomtosent;
?>
<html>
<head>
      <title><?php echo $script_name ?> </title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=0.8">
      <!--===============================================================================================-->
      <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <!--===============================================================================================-->
</head>
<body>
   <div >
      <center>
    <font color="black" size="5"><b>Movie</b><u>B</u>unkers <i class="fa fa-film" aria-hidden="true"></i> - 1337x</font><br><br>
  </center>
            <div>
              <center>
                <form action="?" >
               <input type="text" class="text"  pattern=".{3,}" name="word" placeholder="Search Torrent Here...">
               <input type="submit" name="submit" class="buttonsu" value="Submit">
                </form>
                <p style="font-size:12px">Note: If Any Issues In Viewing The Page Please Refresh 2 or 3 Times</p>
              </center>
            </div>


</div>

   <?php
            if (isset($_GET['page'])) { $pagea  = $_GET["page"];
            if (!empty($pagea)) { $page1 = $pagea; }
            else{ $page1 = 1; } }
            else{ $page1 = 1; }

 ?>
  <!--for for showing search results -->
  <div class="limiter">
  	<div class="container-table100">
      <div class="wrap-table100">
        <div class="table100">
<?php

    if (isset($_GET['word'])) { $search  = $_GET["word"];
    $url = "https://1337x.to/search/".$search."/".$page1."/";
    $raw = file_get_contents($url);
    //echo $raw;
    $table_making = '<table><thead><tr class="table100-head"><th>Torrent</th><th>Seeds</th><th>Leechers</th><th>Date Added</th><th>Size</th><th>Uploader</th><tr></thead>';
    echo $table_making;
    $re = '/<tbody>(.*?)<\/tbody>/ms';
    preg_match_all($re, $raw, $matches, PREG_SET_ORDER, 0);
    //echo $matches[0][1];
    //$result = str_replace('</tr>','</tr><br>',$matches[0][1]);
    $re01 = '/<i class="flaticon-message"><\/i>.*?<\/span>/m';
    $re02 = '/<span class="seeds">.*?<\/span>/m';
    $result = @str_replace('<a href="/torrent/','<a href="magnet_link.php?link=',$matches[0][1]);
    $result = preg_replace($re01, '', $result);
    $result = preg_replace($re02, '', $result);
    echo $result;
    }
 ?>



</div>
</div>
</div>
</div>

    <!--for next page and backpage -->

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

  <center>
       <?php $full_url = $_SERVER['REQUEST_URI']; $qurey_url = '?'.$_SERVER['QUERY_STRING']; $full_url1 = str_replace($qurey_url,'', $full_url); ?>
  <button class="buttonnav" onclick="window.location.href = '<?php echo $full_url1; ?>';">Clear</button>
  <button class="buttonnav" onclick="window.location.href = '<?php $page2 = $page1 + 1; $next_page = $full_url1.'?word='.$search.'&page='.$page2;  echo $next_page ?>';"> Next Page</button>
  <button class="buttonnav" onclick="window.location.href = '<?php $page3 = $page1 - 1; $prev_page = $full_url1.'?word='.$search.'&page='.$page3; echo $prev_page ?>';">Previous Page</button>
  </center>
  <br>
 </body>
