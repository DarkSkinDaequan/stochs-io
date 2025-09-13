<!DOCTYPE html>
<html>  
    <?php 
    $offers = [['name' => 'chocolate cookie','price' => 2.5],
    ['name' => 'ice-cream','price' => 3.5]
    ];
    ?>

<body>

  <div class="lollipop">
    <div class="stick"></div>
  </div>
  <div class="lollipop">
    <div class="stick"></div>
  </div>
  <div class="lollipop">
    <div class="stick"></div>
  </div>
  
</body>

        <title> echo Command</title>
            <a href="https://raw.githubusercontent.com/DarkSkinDaequan/stochs-io/refs/heads/main/login.php" style="text-decoration: none;">
  <button>Go to Login Page</button>
</a>
        <h1>
            Welcome to the Store
        </h1>
        <p><?php echo $offers[0]['name']; ?> =
         $<?php echo $offers[0]['price']; ?> </p>   
        <p><?php echo $offers[1]['name']; ?> =
         $<?php echo $offers[1]['price']; ?> </p>       
        
    </head>


</html>
