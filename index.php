<!DOCTYPE html>
<html>

<head>
    <title> Exercice 3 PHP GlobalVariable</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<h1>Computer Science Figures</h1>
    

<div class="ui special cards">
 <?php getData();?>
</div>

  <?php

function getData() {
$file = __DIR__.("/cs_figures.csv");
$csv = file_get_contents($file);
$csv2 = array_map("str_getcsv", explode("\n", $csv));
foreach($csv2 as $key => $data) {
  if ($key>0) {
    echo '<div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button"></div>
          </div>
        </div>
      </div>
      <img src="'.$data[5].'">
    </div>
    <div class="content">
      <a class="header">'.$data[0].'</a>
      <div class="meta">
        <span class="title">'.$data[2].'</span><br><br>
        <span class="description">'.$data[3].'</span>
      </div>
    </div>
     <div class="extra content">
      <span class="right floated">'."Born in ".$data[1].'</span>
    </div>
  </div>';   
  }
}
}

  ?>

  </body>

</html>