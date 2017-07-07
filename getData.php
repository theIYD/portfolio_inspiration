<?php

    require 'config/config.php';
    
    include('include/header.php'); 
    include('include/footer.php'); 

    //Create a query
    $query = 'SELECT * FROM users';
    
    //Get the result
    $result = mysqli_query($connec, $query);

    //Fetch the links
    $all_links = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //var_dump($all_links);

    //Free the result
    mysqli_free_result($result);

    //Close the connection
    mysqli_close($connec);
?> 

<div class="container">
    <div class="row">
        <h2>Portfolio's</h2>
        <?php foreach($all_links as $a_link) : ?>
            <div class="well">
                <h3><?php echo $a_link['name']; ?></h3>
                <a target="_blank" href="https://<?php echo $a_link['link']; ?>"><h5><?php echo $a_link['link']; ?></h5></a>
            </div>
        <?php endforeach;  ?>
        <a href="."><button class="btn btn-default">Back</button></a>
    </div>
</div>


