<?php
    require_once('../../../private/initialize.php');

    // Handle form values sent by new.php
    if (requestIsPost()) {
        $menu_name = $_POST['menu_name'] ?? '';
        $position = $_POST['position'] ?? '';
        $visible = $_POST['visible'] ?? '';

        echo "Form parameters<br />";
        echo "Menu name: " . $menu_name . "<br />";
        echo "Position: " . $position . "<br />";
        echo "Visible: " . $visible . "<br />";
    } else {
        redirectTo('/staff/subjects/new.php');
    }
