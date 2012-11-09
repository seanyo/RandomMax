<!doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <title>Random Max of Kindness</title>  
  <meta name="description" content="Random Maxes">  
  <meta name="author" content="Sean Yo">  
  <link rel="stylesheet" href="min.css">

</head>  
<body>  
<?php 
$imagesDir = 'maxes/';
$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$randomImage = $images[array_rand($images)];
?>

<div class="header">
    <h1>Random Max of Kindness</h1>
</div>

<div class="max"><?php echo '<img src="'.$randomImage.'" alt="" />' ?></div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36224463-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>  
</html> 
