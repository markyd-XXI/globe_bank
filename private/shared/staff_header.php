
<!doctype html>

<html lang="en">
<head>
    <title>GBI - <?php echo (!isset($pageTitle) ? 'Staff Area' : htmlspecialchars(urlencode($pageTitle))); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css') ?>" />
</head>

<body>
<header>
    <h1>GBI Staff Area</h1>
</header>
<navigation>
    <ul>
        <li><a href= "<?php echo url_for('/staff/index.php') ?>">Menu</a></li>
    </ul>
</navigation>