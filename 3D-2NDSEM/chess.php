<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .white, .black {
            width: 12.5%; /* 100% / 8 columns = 12.5% */
            padding-bottom: 12.5%; /* To maintain square aspect ratio */
        }

        .white {
            background-color: white;
        }

        .black {
            background-color: black;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            border: solid;
            border-width: 1px;
            width: 80%; /* Adjust the width as needed */
            margin: auto; /* Center the container */
        }
    </style>
    <title>Responsive Chessboard</title>
</head>
<body>
    <div class="container">
        <?php
        for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j < 8; $j++) {
                if (($i + $j) % 2 == 0) {
                    echo "<div class='white'></div>";
                } else {
                    echo "<div class='black'></div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
