<?php
    require_once('../../../private/initialize.php');
    $id = $_GET['id'] ?? '1';//PHP > 7.0
    include(SHARED_PATH . '/staff_header.php');
?>

    <div id="content">
        <?php echo 'Page ID = ' . htmlspecialchars($id); ?>
    </div>

<?php
    include(SHARED_PATH . '/staff_footer.php');
?>