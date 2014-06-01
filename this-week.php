<head>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<h1> Comics This Week <br><a href="http://www.jdmcnicholas.com/comic-list/last-month.php"><<</a> <a href="http://www.jdmcnicholas.com/comic-list/last-week.php"><</a> <a href="http://www.jdmcnicholas.com/comic-list/this-week.php">X</a> <a href="http://www.jdmcnicholas.com/comic-list/next-week.php">></a> <a href="http://www.jdmcnicholas.com/comic-list/next-month.php">>></a></h1>
<h3><a href="http://www.jdmcnicholas.com/comic-list/pull-this-week.php">Pull List</a>
</h3>
<div class="releases">
<div class="publisher-strip">
<div class="publisher-box">
<h2>Image</h2>
</div>
</div>
<div class="image-strip">
<?php
$imagecomics = file_get_contents('http://www.tfaw.com/search?_results_start_date_search=-3+days&_results_end_date_search=%2B3+days&_results_prod_type_search=Comics&_results_publishers_search=Image&_results_sstype_search=publisher&_results_sstring_search=Image&_results_ordercombo_search=title_asc&gallery_mode=on&_results_limit_search=90'); //get the html returned from the following url
$imagecomics_doc = new DOMDocument();
libxml_use_internal_errors(TRUE); //disable libxml errors
if(!empty($imagecomics)){ //if any html is actually returned
  $imagecomics_doc->loadHTML($imagecomics);
  libxml_clear_errors(); //remove errors for yucky html
  $imagecomics_xpath = new DOMXPath($imagecomics_doc);
  //get all the Image images
  $imagecomics_image = $imagecomics_xpath->query('//img[@class="cover-image"]');
  if($imagecomics_image->length > 0){
    foreach($imagecomics_image as $image) {
      echo "<div class='image-box'>";
      echo "<img class=cover-image src='http://";
      echo $image->getAttribute('src');
      echo "'><br></div>";
}
  }
}
?>
</div>
<div class="title-strip">
<?php
$imagecomics = file_get_contents('http://www.tfaw.com/search?_results_start_date_search=-3+days&_results_end_date_search=%2B3+days&_results_prod_type_search=Comics&_results_publishers_search=Image&_results_sstype_search=publisher&_results_sstring_search=Image&_results_ordercombo_search=title_asc&gallery_mode=on&_results_limit_search=90'); //get the html returned from the following url
$imagecomics_doc = new DOMDocument();
libxml_use_internal_errors(TRUE); //disable libxml errors
if(!empty($imagecomics)){ //if any html is actually returned
  $imagecomics_doc->loadHTML($imagecomics);
  libxml_clear_errors(); //remove errors for yucky html
  $imagecomics_xpath = new DOMXPath($imagecomics_doc);
  //get all the Image titles
  $imagecomics_title = $imagecomics_xpath->query('//div[@style="margin-bottom:3px; margin-top:0px;"]');
  if($imagecomics_title->length > 0){
      foreach($imagecomics_title as $imagecomicsrow){
          echo "<div class='title-box'>";
          echo $imagecomicsrow->nodeValue . "<br/></div>";
      }
  }
}
?>
</div>
<div class="description-strip">
<?php
$imagecomics = file_get_contents('http://www.tfaw.com/search?_results_start_date_search=-3+days&_results_end_date_search=%2B3+days&_results_prod_type_search=Comics&_results_publishers_search=Image&_results_sstype_search=publisher&_results_sstring_search=Image&_results_ordercombo_search=title_asc&gallery_mode=on&_results_limit_search=90'); //get the html returned from the following url
$imagecomics_doc = new DOMDocument();
libxml_use_internal_errors(TRUE); //disable libxml errors
if(!empty($imagecomics)){ //if any html is actually returned
  $imagecomics_doc->loadHTML($imagecomics);
  libxml_clear_errors(); //remove errors for yucky html
  $imagecomics_xpath = new DOMXPath($imagecomics_doc);
  //get all the Image descriptions
  $imagecomics_description = $imagecomics_xpath->query('//div[@class="description"]');
  if($imagecomics_description->length > 0){
      foreach($imagecomics_description as $imagecomicsrow){
          echo "<div class='description-box'>";
          echo $imagecomicsrow->nodeValue . "<br/></div>";
      }
  }
}
?>
</div>
<div class="publisher-strip">
<div class="publisher-box-middle">
<h2>Marvel</h2>
</div>
</div>
<div class="image-strip">
<?php
$marvelcomics = file_get_contents('http://www.tfaw.com/search?_results_start_date_search=-3+days&_results_end_date_search=%2B3+days&_results_prod_type_search=Comics&_results_publishers_search=%5C%22Marvel%2BComics%5C%22&_results_sstype_search=publisher&_results_sstring_search=%5C%22Marvel%2BComics%5C%22&_results_ordercombo_search=title_asc&gallery_mode=on&_results_limit_search=90');
$marvelcomics_doc = new DOMDocument();
libxml_use_internal_errors(TRUE);
if(!empty($marvelcomics)){
  $marvelcomics_doc->loadHTML($marvelcomics);
  libxml_clear_errors();
  $marvelcomics_xpath = new DOMXPath($marvelcomics_doc);
  $marvelcomics_image = $marvelcomics_xpath->query('//img[@class="cover-image"]');
  if($marvelcomics_image->length > 0){
    foreach($marvelcomics_image as $image) {
      echo "<div class='image-box'>";
      echo "<img class=cover-image src='http://";
      echo $image->getAttribute('src');
      echo "'><br></div>";
}
  }
}
?>
</div>
<div class="title-strip">
<?php
$marvelcomics = file_get_contents('http://www.tfaw.com/search?_results_start_date_search=-3+days&_results_end_date_search=%2B3+days&_results_prod_type_search=Comics&_results_publishers_search=%5C%22Marvel%2BComics%5C%22&_results_sstype_search=publisher&_results_sstring_search=%5C%22Marvel%2BComics%5C%22&_results_ordercombo_search=title_asc&gallery_mode=on&_results_limit_search=90');
$marvelcomics_doc = new DOMDocument();
libxml_use_internal_errors(TRUE);
if(!empty($marvelcomics)){
  $marvelcomics_doc->loadHTML($marvelcomics);
  libxml_clear_errors();
  $marvelcomics_xpath = new DOMXPath($marvelcomics_doc);
  $marvelcomics_title = $marvelcomics_xpath->query('//div[@style="margin-bottom:3px; margin-top:0px;"]');
  if($marvelcomics_title->length > 0){
      foreach($marvelcomics_title as $marvelcomicsrow){
          echo "<div class='title-box'>";
          echo $marvelcomicsrow->nodeValue . "<br/></div>";
      }
  }
}
?>
</div>
<div class="description-strip">
<?php
$marvelcomics = file_get_contents('http://www.tfaw.com/search?_results_start_date_search=-3+days&_results_end_date_search=%2B3+days&_results_prod_type_search=Comics&_results_publishers_search=%5C%22Marvel%2BComics%5C%22&_results_sstype_search=publisher&_results_sstring_search=%5C%22Marvel%2BComics%5C%22&_results_ordercombo_search=title_asc&gallery_mode=on&_results_limit_search=90');
$marvelcomics_doc = new DOMDocument();
libxml_use_internal_errors(TRUE);
if(!empty($marvelcomics)){ 
  $marvelcomics_doc->loadHTML($marvelcomics);
  libxml_clear_errors(); 
  $marvelcomics_xpath = new DOMXPath($marvelcomics_doc);
  $marvelcomics_description = $marvelcomics_xpath->query('//div[@class="description"]');
  if($marvelcomics_description->length > 0){
      foreach($marvelcomics_description as $marvelcomicsrow){
          echo "<div class='description-box'>";
          echo $marvelcomicsrow->nodeValue . "<br/></div>";
      }
  }
}
?>
</div>
<div class="publisher-strip">
<div class="publisher-box-middle">
<h2>DC</h2>
</div>
</div>
<div class="image-strip">
<?php
$dccomics = file_get_contents('http://www.tfaw.com/search?_results_start_date_search=-3+days&_results_end_date_search=%2B3+days&_results_prod_type_search=Comics&_results_publishers_search=dc&_results_sstype_search=publisher&_results_sstring_search=DC&_results_ordercombo_search=title_asc&gallery_mode=on&_results_limit_search=90');
$dccomics_doc = new DOMDocument();
libxml_use_internal_errors(TRUE);
if(!empty($dccomics)){
  $dccomics_doc->loadHTML($dccomics);
  libxml_clear_errors();
  $dccomics_xpath = new DOMXPath($dccomics_doc);
  $dccomics_image = $dccomics_xpath->query('//img[@class="cover-image"]');
  if($dccomics_image->length > 0){
    foreach($dccomics_image as $image) {
      echo "<div class='image-box'>";
      echo "<img class=cover-image src='http://";
      echo $image->getAttribute('src');
      echo "'><br></div>";
}
  }
}
?>
</div>
<div class="title-strip">
<?php
$dccomics = file_get_contents('http://www.tfaw.com/search?_results_start_date_search=-3+days&_results_end_date_search=%2B3+days&_results_prod_type_search=Comics&_results_publishers_search=dc&_results_sstype_search=publisher&_results_sstring_search=DC&_results_ordercombo_search=title_asc&gallery_mode=on&_results_limit_search=90');
$dccomics_doc = new DOMDocument();
libxml_use_internal_errors(TRUE);
if(!empty($dccomics)){
  $dccomics_doc->loadHTML($dccomics);
  libxml_clear_errors();
  $dccomics_xpath = new DOMXPath($dccomics_doc);
  $dccomics_title = $dccomics_xpath->query('//div[@style="margin-bottom:3px; margin-top:0px;"]');
  if($dccomics_title->length > 0){
      foreach($dccomics_title as $dccomicsrow){
          echo "<div class='title-box'>";
          echo $dccomicsrow->nodeValue . "<br/></div>";
      }
  }
}
?>
</div>
<div class="description-strip">
<?php
$dccomics = file_get_contents('http://www.tfaw.com/search?_results_start_date_search=-3+days&_results_end_date_search=%2B3+days&_results_prod_type_search=Comics&_results_publishers_search=dc&_results_sstype_search=publisher&_results_sstring_search=DC&_results_ordercombo_search=title_asc&gallery_mode=on&_results_limit_search=90');
$dccomics_doc = new DOMDocument();
libxml_use_internal_errors(TRUE);
if(!empty($dccomics)){
  $dccomics_doc->loadHTML($dccomics);
  libxml_clear_errors();
  $dccomics_xpath = new DOMXPath($dccomics_doc);
  $dccomics_description = $dccomics_xpath->query('//div[@class="description"]');
  if($dccomics_description->length > 0){
      foreach($dccomics_description as $dccomicsrow){
          echo "<div class='description-box'>";
          echo $dccomicsrow->nodeValue . "<br/></div>";
      }
  }
}
?>
</div>

<div class="publisher-strip">
<div class="publisher-box">
<h2>Dark Horse</h2>
</div>
</div>
<div class="image-strip">
<?php
$imagecomics = file_get_contents('http://www.tfaw.com/search?_results_start_date_search=-3+days&_results_end_date_search=%2B3+days&_results_prod_type_search=Comics&_results_publishers_search=Dark+Horse&_results_sstype_search=publisher&_results_sstring_search=Dark+Horse&_results_ordercombo_search=title_asc&gallery_mode=on&_results_limit_search=90'); //get the html returned from the following url
$imagecomics_doc = new DOMDocument();
libxml_use_internal_errors(TRUE); //disable libxml errors
if(!empty($imagecomics)){ //if any html is actually returned
  $imagecomics_doc->loadHTML($imagecomics);
  libxml_clear_errors(); //remove errors for yucky html
  $imagecomics_xpath = new DOMXPath($imagecomics_doc);
  //get all the Image images
  $imagecomics_image = $imagecomics_xpath->query('//img[@class="cover-image"]');
  if($imagecomics_image->length > 0){
    foreach($imagecomics_image as $image) {
      echo "<div class='image-box'>";
      echo "<img class=cover-image src='http://";
      echo $image->getAttribute('src');
      echo "'><br></div>";
}
  }
}
?>
</div>
<div class="title-strip">
<?php
$imagecomics = file_get_contents('http://www.tfaw.com/search?_results_start_date_search=-3+days&_results_end_date_search=%2B3+days&_results_prod_type_search=Comics&_results_publishers_search=Dark+Horse&_results_sstype_search=publisher&_results_sstring_search=Dark+Horse&_results_ordercombo_search=title_asc&gallery_mode=on&_results_limit_search=90'); //get the html returned from the following url
$imagecomics_doc = new DOMDocument();
libxml_use_internal_errors(TRUE); //disable libxml errors
if(!empty($imagecomics)){ //if any html is actually returned
  $imagecomics_doc->loadHTML($imagecomics);
  libxml_clear_errors(); //remove errors for yucky html
  $imagecomics_xpath = new DOMXPath($imagecomics_doc);
  //get all the Image titles
  $imagecomics_title = $imagecomics_xpath->query('//div[@style="margin-bottom:3px; margin-top:0px;"]');
  if($imagecomics_title->length > 0){
      foreach($imagecomics_title as $imagecomicsrow){
          echo "<div class='title-box'>";
          echo $imagecomicsrow->nodeValue . "<br/></div>";
      }
  }
}
?>
</div>
<div class="description-strip">
<?php
$imagecomics = file_get_contents('http://www.tfaw.com/search?_results_start_date_search=-3+days&_results_end_date_search=%2B3+days&_results_prod_type_search=Comics&_results_publishers_search=Dark+Horse&_results_sstype_search=publisher&_results_sstring_search=Dark+Horse&_results_ordercombo_search=title_asc&gallery_mode=on&_results_limit_search=90'); //get the html returned from the following url
$imagecomics_doc = new DOMDocument();
libxml_use_internal_errors(TRUE); //disable libxml errors
if(!empty($imagecomics)){ //if any html is actually returned
  $imagecomics_doc->loadHTML($imagecomics);
  libxml_clear_errors(); //remove errors for yucky html
  $imagecomics_xpath = new DOMXPath($imagecomics_doc);
  //get all the Image descriptions
  $imagecomics_description = $imagecomics_xpath->query('//div[@class="description"]');
  if($imagecomics_description->length > 0){
      foreach($imagecomics_description as $imagecomicsrow){
          echo "<div class='description-box'>";
          echo $imagecomicsrow->nodeValue . "<br/></div>";
      }
  }
}
?>
</div>

<div class="publisher-strip">
<div class="publisher-box-middle">
<h3>Powered by <a href="http://www.tfaw.com">TFAW.com</a>
</div>
</div>
</div>
