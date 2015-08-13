<?php require_once('inc/functions.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('inc/meta.php'); ?>
    <title>Primer - Molecules</title>
<?php include('templates/_styles.php'); ?>
</head>
<body>
    
    <div id="primer-wrapper">
    
        <?php include('templates/primer/sidebar.php'); ?>
    
        <main class="main" id="primer-content-wrapper">
            
            <button class="c-hamburger c-hamburger--htx js-menu-toggle primer-menu-toggle">
              <span>toggle menu</span>
            </button>
            
            <div class="container">
                
                
                <h1 class="primer-title">Molecules</h1>
                
                <?php echo getBlock('Heading Groups', 'molecules/heading-groups'); ?>
                
                <?php echo getBlock('Accordions &amp; Tabs', 'molecules/tab-accordion'); ?>
                
            </div>
            
        </main>
    
    </div><!--/#wrapper -->
    
    <?php include('templates/_js.php'); ?>
    
</body>

</html>