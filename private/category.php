<?php

/*Ici on va afficher les categories de la categorie principale ex: PHP/MySql -> PHP7*/

var_dump($slug);


    foreach(childCategory() as $category){ $title = $category['title'];?>
        
        <div class="category<?php echo $category['id'];?>">
        <a href="<?php echo $router->generate('category', array('slug' => slug($title)));  ?>"><h3><?php echo $title;?></h3></a>
        
        </div>
    <?php    

    }


?>














