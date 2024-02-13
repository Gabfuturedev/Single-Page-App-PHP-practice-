<h1>PRODUCT PAGE</h1>

<div class="container">
<div class="products">

    <!-- product 1 !-->
    <div class="prod1">
        <img src="prod1.png" class="p1">
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
    <img src="prod4.png" class="p1">
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
        <?php
            if (isset($_GET['box'])) {
                $boxId = $_GET['box'];
                $descriptions = [
                    'box1' => 'Description for ROOM 1.',
                    'box2' => 'Description for ROOM 2.',
                    'box3' => 'Description for ROOM 3.',
                    'box4' => 'Description for ROOM 4.',
                ];

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
        border: 1px solid;
        display: flex;
        position: relative;

    }.des{
        margin: 3%;
        height: 100%;
        width: 27%;
        border: 1px solid;
        
            top: 0;
            position: relative;
    }
    .prod1,.prod2,.prod3,.prod4{
        height: 300px;
        width: 300px;
        background-color: black;
        margin: 10px;
        overflow: hidden;
        position: relative;

    }.p1{
        height: 200px;
        width: 300px;
    }h1,h5{
        color: white;
    }.p1-view{
       position:absolute;
        bottom: 0;
        right: 0;
            

    }
 
</style>

