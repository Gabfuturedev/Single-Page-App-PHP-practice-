<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar {
            height: 70px;
            width: 100%;
            background-color: black;
            line-height: 70px;
        }

        .nav {
            color: white;
            font-size: 15px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
            background-color: #faae88;
            
        }.nav:hover{
            font-size: 20px;
            transition: 0.5s ease-out;
        }

        .container {
            height: 100%;
            width: 100%;
            display: flex;
            position: relative;
           
        }

        .products {
            height: 100%;
            width: 60%;
            
            display: flex;
            position: relative;
           
            justify-content: space-between;
            padding: 10px;
            color: white;
            flex-wrap: wrap;
        }

        .des {
            height: 100%;
            width: 27%;
            
            top: 0;
            position: relative;
            display: flex;
            flex-direction: column;
            border-radius: 30px;
           
      
        }

        .prod1, .prod2, .prod3, .prod4 {
            height: 300px;
            width: 300px;
            background-color: black;
            margin: 10px;
            overflow: hidden;
            position: relative;
        }

        .p1 {
            height: 200px;
            width: 300px;
        }

        h1, h5 {
            color: white;
        }

        .p1-view {
            position: absolute;
            bottom: 0;
            right: 0;
        }a{
        color: white;
        border: 1px solid black;
        text-decoration: none;
        background-color: orange;
        border-radius: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }body{
        background-color: #FDDCCE;
    }
    </style>
</head>
<body>
    <?php include("nav.php");?>

    
    <?php
    if(isset($_GET["nav"])) {
        switch($_GET["nav"]){
            case "product":
                include("product.php");
                break;
            case "contact":
                include("contact.php");
                break;
            case "about":
                include("about.php");
                break;
        }
    }
    ?>

    
</div>

        
    </div>
</div>
   
    
</body>
</html>
