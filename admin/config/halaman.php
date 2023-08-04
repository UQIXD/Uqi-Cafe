<?php

if ($_GET['pages'] == 'dashboard') {
    include("pages/dashboard/index.php");
} elseif ($_GET['pages'] == 'gallery') {
    include("pages/gallery/index.php");
}