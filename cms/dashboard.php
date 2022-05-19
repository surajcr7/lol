<?php
    session_start();
    require "../misc/functions.php";
    require "../misc/loggedin.php";
    require "includes/header.php";
    require "includes/nav.php";
?>

    <main class="row">
        <div class="col-12 bg-white my-3 py-3">
            <div class="row">
                <div class="col">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </main>
        
<?php require "includes/footer.php"; ?>