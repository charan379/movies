<!DOCTYPE html>
<html>
<head>

  <title>Movie Bunkers - 1337x </title>
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


  <!-- snackbar style -->
  <style>#snackbar { visibility: hidden; min-width: 250px; margin-left: -125px; background-color: #333; color: #fff; text-align: center; border-radius: 2px; padding: 16px; position: fixed; z-index: 1; left: 50%; bottom: 30px; font-size: 17px;}#snackbar.show { visibility: visible; -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s; animation: fadein 0.5s, fadeout 0.5s 2.5s;}@-webkit-keyframes fadein { from {bottom: 0; opacity: 0;} to {bottom: 30px; opacity: 1;}}@keyframes fadein { from {bottom: 0; opacity: 0;} to {bottom: 30px; opacity: 1;}}@-webkit-keyframes fadeout { from {bottom: 30px; opacity: 1;} to {bottom: 0; opacity: 0;}}@keyframes fadeout { from {bottom: 30px; opacity: 1;} to {bottom: 0; opacity: 0;}}</style>
  <style>.responsive {  width: 100%;  max-width: 400px;  height: auto; }</style><!-- responsive img work -->
</head>
<body>

<div class="container">
<?php
/**********get main data except ads**************/
        $link_for_magnet = $_GET["link"];
        $url = 'https://1337x.to/torrent/'.$link_for_magnet;
        $raw = file_get_contents($url);

        $re = '/<div class="tab-content">(.*?)<div role="tabpanel" class="tab-pane" id="comments">/ms';
        preg_match_all($re, $raw, $matches);
        $matched_data = $matches[1][0];
/*************** img section work repalce relative tags with absolute tags********************/
        $re3 = '/data-original="(.*?)"/sm';
        $count3 = preg_match_all($re3, $raw, $images);
        $re4 = '/<img src=\"\/(.*)\"/mU';
        for ($y = 0; $y < $count3; $y++) {
                                                        echo '<br><img src="'.$images[1][$y].'" alt="loading" >';
                                            $matched_data = preg_replace($re4, '<img class="responsive" src="get_img.php?images='.$images[1][$y].'" alt="loading"', $matched_data, 1);
                                          }
         echo $matched_data;
/***************magnet link data get and display *********************/

                $re2 = $re = '/magnet:\?xt=urn:btih:(.*?)"/sm';
                preg_match_all($re2, $raw, $magnet);
                $magnet_link = "magnet:?xt=urn:btih:".$magnet[1][0];
                            //echo $magnet_link;

                echo '<textarea class="textinput" rows="4" cols="50" name="comment" id="myInput" form="myInput">'.$magnet_link.'</textarea>';
                echo '<button class="buttonsu" onclick="myFunction()">Copy Magnet Link</button><div id="snackbar">Text has been copied</div>';


?>
<button class="buttonsu" onclick="window.location.href = '<?php echo $magnet_link; ?>';">Download Movie</button>
<div class="container">
  <center>
     <b> Note : To Download Movie You Must Have Installed An Torrent Client On Your Device</b>
  </center>
</div>
<!-- snackbar work -->
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
   var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  copyText.select();
  document.execCommand("Copy");
// alert("Copied the text: \n" + copyText.value);
}
</script>


<style>
       .container {
           max-width: 820px;
           margin: 0px auto;
           margin-top: 50px;
       }
       .comment {
           float: left;
           width: 100%;
           height: auto;
       }
       .commenter {
           float: left;
       }
       .commenter img {
           width: 35px;
           height: 35px;
       }
       .comment-text-area {
           float: left;
           width: 100%;
           height: auto;
       }

       .textinput {
           float: left;
           width: 100%;
           min-height: 75px;
           outline: none;
           resize: none;
           border: 1px solid grey;
       }
   </style>
