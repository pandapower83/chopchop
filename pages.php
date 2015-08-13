<!DOCTYPE HTML>
<html lang="en-US">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">

	<title>Primer - Page</title>

	<?php include( 'templates/_styles.php'); ?>

</head>

<body>

    <div id="primer-wrapper">

        <?php include('templates/primer/sidebar.php'); ?>

        <main class="main" id="primer-content-wrapper">

            <button class="c-hamburger c-hamburger--htx js-menu-toggle primer-menu-toggle">
              <span>toggle menu</span>
            </button>

            <div class="container">


                <h1 class="primer-title">Pages</h1>

                to add...
                <?php //echo getBlock('Headings', 'atoms/headings'); ?>

            </div>

        </main>

    </div><!--/#wrapper -->

    <?php include('templates/_js.php'); ?>

</body>

</html>