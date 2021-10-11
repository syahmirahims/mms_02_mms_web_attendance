<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMS Attendance</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/welcome.css') }}">
</head>

<body>
    <div class="container">
        <div class="card">
            <h2 class="header">MMS ATTENDANCE</h2>
            <hr>
            <div class="card-body">
                <p>Welcome to MMS Attendance Login System!</p>
                
                <br>
                
                <?php
                if (isset($userName)) {
                    echo "<p>Hello " .$userName. "! Method for clocking remains the same as the previous system.</p>";
                    echo "<p>Click the button below to start.</p>";
                } else {
                    echo "<p>This system uses your MMS account to sign in. Method for clocking remains the same as the previous system.</p>";
                    echo "<p>Click the button below to start.</p>";
                }
                ?>

                <br>
                
                <form action="/signin" method="GET">
                    <button type="submit" class="btn btn-info">
                        <?php 
                        if (isset($userName)) {
                            echo "Proceed";
                        } else {
                            echo "Log In";
                        }
                        ?>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Developed by Syahmi Rahim</p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/67c061dc5a.js" crossorigin="anonymous"></script>
    
</body>
</html>