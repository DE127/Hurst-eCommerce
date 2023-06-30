<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
if(!isset($_SESSION)) {
    session_start();
}

// SETTINGS
// Config file directory - Directory, where config file must be
define("CONFIG_FILE_DIRECTORY", "../");

// Config file name - Output file with config parameters (database, username etc.)
define("CONFIG_FILE_NAME", "config.php");

// According to directory hierarchy (you may add/remove "../" before CONFIG_FILE_DIRECTORY)
define("CONFIG_FILE_PATH", CONFIG_FILE_DIRECTORY . CONFIG_FILE_NAME);

// Config file name - config template file name
define("CONFIG_FILE_TEMPLATE", "config.tpl");

if (file_exists(CONFIG_FILE_PATH)) {
    echo '<meta http-equiv="refresh" content="0; url=../" />';
    exit;
}

function head() {
    
    $current_page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);  

    if($current_page == 'settings.php'){
        $page = 2; 
    } elseif ($current_page == 'done.php') {
        $page = 3;
    } else {
        $page = 1;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project SECURITY - Installation Wizard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/favicon.png">
    <meta charset="utf-8">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
</head>

<body>

    <div class="container"><br />
        <div class="card bg-light">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <br /><center><h3><i class="fab fa-get-pocket"></i> Project SECURITY - Installation Wizard</h3></center><br />
                        <div class="jumbotron">
                            <ul class="nav nav-tabs nav-fill">
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == 1) { echo 'active'; } ?>"><i class="fas fa-database"></i> Database Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == 2) { echo 'active'; } ?>"><i class="fas fa-user"></i> Administrator Account</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == 3) { echo 'active'; } ?>"><i class="fas fa-check-square"></i> Completed</a>
                                </li>
                            </ul><br />
                            <div class="tab-content" id="TabContent">
<?php
}

function footer() {
?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<?php
}
?>