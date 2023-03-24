<?php
    require_once('../../../private/initialize.php');
    $id = $_GET['id'] ?? '1';//PHP > 7.0
    include(SHARED_PATH . '/staff_header.php');
    $page_title = 'Subjects';
?>

    <div id="content">
        <a class="back-link" href="<?php echo url_for('/staff/pages/index.php') ?>">&laquo; Back to list</a>
        <div class="page show">
            <?php echo 'Page ID: ' . htmlspecialchars($id); ?>
        </div>
    </div>

<?php
    include(SHARED_PATH . '/staff_footer.php');
?>