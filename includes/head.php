<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/favicons/favicon.ico" type="image/x-icon" />
<link rel="icon" href="images/favicons/mstile-310x310.png" type="image/x-icon" />
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicons/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="images/favicons/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/favicons/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/favicons/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/favicons/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="images/favicons/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="images/favicons/images/favicons/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="images/favicons/favicon-128.png" sizes="128x128" />
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="images/favicons/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="images/favicons/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="images/favicons/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="images/favicons/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="images/favicons/mstile-310x310.png" />

<link href="css/style.css" rel="stylesheet" />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700' rel='stylesheet' type='text/css'>
<link href="css/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<?php
function setCurrentPage($requestUri, $className)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo $className;
}
function getCurrentPage()
{
    return $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
}
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80375418-1', 'auto');
  ga('send', 'pageview');

</script>