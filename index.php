
sdada
asdasdasdas
<?php



/*

session_start();

if (isset($_SESSION['bmsession_id'])) {
    include 'get_.php';
    include_once 'conn.php';

    if (isset($_GET['app'])) {
        include 'app/app_sql.php';
    }

    include 'app/app.php';
} else {
    include 'login/login.php';
}


/// print_r($_SESSION['permission']);


// Initialize notification variables
$cookieValue  = '';
$noti_type    = '';
$noti_message = '';
$showSuccess  = 'false';

// Password check notification
if (isset($_COOKIE["password_incorrect"]) && $_COOKIE["password_incorrect"] === 'pass_correct') {
    $cookieValue  = 'show';
    $noti_type    = 'success';
    $noti_message = '🚀 Welcome to BM System<br>Let’s make great things happen!';
}

// POST status notification
if (isset($_COOKIE["POST"])) {
    switch ($_COOKIE["POST"]) {
        case 'OK':
            $cookieValue  = 'show';
            $noti_type    = 'success';
            $noti_message = '🏆 Well done! Your submission was successful.';
            break;

        case 'NOT-OK':
            $cookieValue  = 'show';
            $noti_type    = 'danger';
            $noti_message = '⚠️ Something went wrong. Your data couldn’t be posted.';
            break;

        case 'FATAL-ERROR':
            $cookieValue  = 'show';
            $noti_type    = 'danger';
            $noti_message = '🚨 A system error occurred. Please try again later.';
            break;
    }
}

// Determine if notification should be shown
if ($cookieValue === 'show') {
    $showSuccess = 'true';
}
?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var showSuccess = <?php echo $showSuccess; ?>;

        if (showSuccess) {
            window.notyf.open({
                type: "<?php echo $noti_type; ?>",
                message: "<?php echo $noti_message; ?>",
                duration: 3000,
                ripple: true,
                dismissible: true,
                position: {
                    x: "right",
                    y: "top"
                }
            });
        }
    });
</script>
