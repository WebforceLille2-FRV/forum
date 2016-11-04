<?php

    include 'database.php';
    require_once 'functions.php';

    foreach(getCategory() as $category){?>
        
        <div class="category<?php echo $category['id'];?>">
        <a><h3><?php echo $category['title'];?></h3></a>
        <p><?php echo $category['description']; ?></p>
        </div>
    <?php    
    }


?>