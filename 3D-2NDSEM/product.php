<h1 style="font-size:40px;">PRODUCT PAGE</h1>
<hr>

<div class="container">
<div class="products">

    <!-- product 1 !-->
    <div class="prod1">
        <img src="prod1.png" class="p1" href="index.php?nav=product&box=box1">
        <h1>Casa De Nove</h1>
        <h5>Good for 5 
            Price $ 500
            5 nights,
            sdsajudasjdasd
            asds
            sdsajudasjdasdasd
        </h5>
       
        <div class="p1-view">"
          <a  href="index.php?nav=product&box=box1">See more</a>
        </div>
    
     
      </div>

    <div class="prod2">
    <img src="prod2.png" class="p1">
        <h1>Casa De Nove</h1>
        <h5>Good for 5 
            Price $ 500
            5 nights,
            sdsajudasjdasd
            asds
            sdsajudasjdasdasd
        </h5>
       
        <div class="p1-view">"
          <a  href="index.php?nav=product&box=box2">See more</a>
        </div>
    
    </div>
    <div class="prod3">
    <img src="prod3.png" class="p1">
        <h1>Casa De Nove</h1>
        <h5>Good for 5 
            Price $ 500
            5 nights,
            sdsajudasjdasd
            asds
            sdsajudasjdasdasd
        </h5>
       
        <div class="p1-view">"
        <a  href="index.php?nav=product&box=box3">See more</a>
        </div>
    
    </div>
    <div class="prod4">
    <img src="prod4.png" class="p1" >
        <h1>Casa De Nove</h1>
        <h5>Good for 5 
            Price $ 500
            5 nights,
            sdsajudasjdasd
            asds
            sdsajudasjdasdasd
        </h5>
       
        <div class="p1-view">"
        <a  href="index.php?nav=product&box=box4">See more</a>
        </div>
    
    </div>
</div>
<div class="des"> 
    <h1>More Details</h1>
        <?php
            if (isset($_GET['box'])) {
                $boxId = $_GET['box'];
                $descriptions = [
                    'box1' => 'Description for ROOM 1.',
                    'box2' => 'Description for ROOM 2.',
                    'box3' => 'Description for ROOM 3.',
                    'box4' => 'Description for ROOM 4.',
                ];
                $products= [
                    'box1' => '<img src="prod1.png" style="height: 50%; width: 90%; border-radius: 20px;">',
                    'box2' => '<img src="prod2.png" style="height: 50%; width: 90%;border-radius: 20px;">',
                    'box3' => '<img src="prod3.png" style="height: 50%; width: 90%;border-radius: 20px;">',
                    'box4' => '<img src="prod4.png" style="height: 50%; width: 90%;border-radius: 20px;">',
                ];
                echo "<H3>$products[$boxId]</H3>";


                echo "<H3>$descriptions[$boxId]</H3>";

                

            }
        ?>
    </div>

</div>
    
  




<style>
    .container{
        height: 100%;
        width: 100%;
        display: flex;
        position: relative;
    }
    .products{
        height: 100%;
        width: 70%;
        
        display: flex;
        position: relative;

    }.des{
        margin: 3%;
        height: 100%;
        width: 27%;
        padding-left: 10px;
      
        
            top: 0;
            position: relative;
        background-color:#faae88 ;
    }
    .prod1,.prod2,.prod3,.prod4{
        height: 300px;
        width: 300px;
        background-color: #faae88;
        margin: 10px;
        overflow: hidden;
        position: relative;
        border-radius: 30px;
        border: 5px solid #faae88;
        box-shadow: 5px 10px 20px black ;
        

    }.p1{
        height: 200px;
        width: 300px;
    }h1,h5{
        color: black;
        padding-left: 10px;
    }.p1-view{
       position:absolute;
        bottom: 0;
        right: 0;
        margin-right: 10px;
        margin-bottom: 3px;
    }.prod1:hover,.prod2:hover,.prod3:hover,.prod4:hover{
        height: 310px;
        width: 310px;
        transition: 0.5s ease-in-out;
        

    }
 
</style>

