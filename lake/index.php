<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LakeLazy Resort</title>

    <style>
        .form {
            align-items: center;
        }

        #cancel {
            cursor: pointer;
            margin-left: 10px;
            background-color: blueviolet;
            padding: 20px;
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>



    <h1>LakeLazy Resort</h1>
    <form class="form" action="" method="post">
        <label for="">Enter Temp:</label>
        <input type="text" name="temp" id="temp" required> <br><br>
        <input style="cursor: pointer;" type="submit" value="submit">
        <input type="reset" value="Cancel">
    </form>
    <p id="cancel">Refresh</p>
    <?php echo "Activity: ";  ?>

    <br>
</body>

<script>
    document.getElementById("cancel").addEventListener('click', function() {
        window.location.href = window.location.href;
    });
</script>

</html>

<!-- php code here   -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $temp = $_POST['temp'];

    if ($temp >= 95) {
        # code...
        echo "Visit our shop";
    } elseif ($temp >= 80 && $temp < 95) {
        # code...
        echo "Go for swimming";
    } elseif ($temp >= 70) {
        # code...
        echo "Go for tennis";
    } elseif ($temp > 20 && $temp < 40) {
        # code...
        echo "Go for Skiing";
    } else {
        echo "Visit our shop";
    }
}
?>