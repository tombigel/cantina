<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html lang="he" class="no-js ie ie6 lte7 lte8 lte9"> <![endif]-->
<!--[if IE 7 ]>    <html lang="he" class="no-js ie ie7 lte7 lte8 lte9"> <![endif]-->
<!--[if IE 8 ]>    <html lang="he" class="no-js ie ie8 lte8 lte9"> <![endif]-->
<!--[if IE 9 ]>    <html lang="he" class="no-js ie ie9 lte9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="he" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>The Cantina</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS : implied media="all" -->
  <!-- <link rel="stylesheet" href="css/style.css?v=2"> -->
  <!-- <link rel="stylesheet" href="css/grid-rtl.css?v=2"> -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.6.min.js"></script>

</head>

<body dir="rtl">

  <div id="container" class="container_12">

    <header class="region clearfix">
        <nav class="block grid_10 alpha">
			 <?php print theme('links__system_main_menu', array(
		          'links' => $main_menu,
		          'attributes' => array(
		            'id' => 'main-menu-links',
		            'class' => array('links', 'clearfix'),
		          ),
		          'heading' => array(
		            'text' => t('Main menu'),
		            'level' => 'h2',
		            'class' => array('element-invisible'),
		          ),
		        )); ?>
		<!--
            <ul>
                <li><a href="#">בית</a></li>
                <li><a href="#">לינק</a></li>
                <li><a href="#">לינק</a></li>
                <li><a href="#">לינק</a></li>
                <li><a href="#">לינק</a></li>
            </ul>
-->
        </nav>
        <div id="login" class="block grid_2 omega">
            <a href="#">כניסה</a>
        </div>
    </header>

    <div id="main" class="clearfix">

        <section id="content-intro" class="region clearfix">
			
            <div class="block grid_8 alpha">
                <p>טקסט</p>
                <h2>סלוגן</h2>
            </div>
            <div class="block grid_4 omega">
                <div id="logo-video">לוגו/וידאו</div>
            </div>
        </section>

    

        <section id="content-main" class="region container_12">
            <div class="node">
region: content
   <?php print render($page['content']); ?>              
  
            </div>
        </section>


    </div>

    <footer class="clearfix region">
        <div class="block grid_7 alpha">
            ניווט תחתון וקופי
			  <?php print render($page['footer_firstcolumn']); ?>
		        <?php print render($page['footer_secondcolumn']); ?>
		        <?php print render($page['footer_thirdcolumn']); ?>
		        <?php print render($page['footer_fourthcolumn']); ?>
        </div>
        <div class="block grid_5 omega">
            לוגואים
		 <?php if ($page['footer']): ?>
		      <div id="footer" class="clearfix">
		        <?php print render($page['footer']); ?>
		      </div> <!-- /#footer -->
		    <?php endif; ?>        
</div>
    </footer>
  </div> <!--! end of #container -->


  <!-- Javascript at the bottom for fast page loading -->
  <script src="js/libs/jquery-1.4.3.min.js"></script>
  <script src="js/script.js"></script>

  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet
       change the UA-XXXXX-X to be your site's ID -->
  <script>
  /*
   var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  */
  </script>

</body>
</html>
