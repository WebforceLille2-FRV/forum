<?php

    
    foreach(getCategory() as $category){ 
        $title = $category['title']; 
        $id = $category['id'];?>
        
        <div class="category<?php echo $category['id'];?>">
        <a href="<?php echo $router->generate('category', array('slug' => slug($title)));?>"><h3><?php echo $title;?></h3></a>
        <p><?php echo $category['description']; ?></p>
        </div>
    <?php    

    }


?>