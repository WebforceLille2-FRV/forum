<?php

/*Ici on va afficher les categories de la categorie principale ex: PHP/MySql -> PHP7*/
 echo $slug;

    $q = $db->query("SELECT id FROM category WHERE slug = '".$slug."'");
    $idCategory = $q->fetchColumn();
    
    
    $q2 = $db->query("SELECT * FROM category WHERE parent = '".$idCategory."'");
    $parent = $q2->fetchAll();

    foreach($parent as $subCategory){ $title = $subCategory['title'];?>
        
        <div class="category<?php echo $subCategory['id'];?>">
        <a href="<?php echo $router->generate('topic', array('slug' => slug($title)));  ?>"><h3><?php echo $subCategory['title'];?></h3></a>
        
        </div>
    <?php    

    }


?>














