<?php require_once('inc/functions.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('inc/meta.php'); ?>
    <title>Primer - Organisms</title>
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
                
                
                <h1 class="primer-title">Organisms</h1>
                
                to add...
                <?php //echo getBlock('Headings', 'atoms/headings'); ?>
                
            </div>
            
        </main>
    
    </div><!--/#wrapper -->
    
    <?php include('templates/_js.php'); ?>
    
</body>

</html>