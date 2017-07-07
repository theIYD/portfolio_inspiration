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

<style>
    .wrap-content {
        width: 100%;
        height: 100vh;
        /*background: #64B5F6;*/
        font-family: 'Roboto', Helvetica, sans-serif;
    }
    .title {
        text-align: center;
        color: #fff;
        font-family: 'Roboto', Helvetica, sans-serif;
        font-weight: 900;
    }
    hr {
        width: 50%;
        margin-bottom: 50px;
    }
    .inspire {
        color: #000;
    }
    .inspire h3 {
        font-family: 'Roboto', Helvetica, sans-serif;
        font-weight: 900;
        color: #000;
    }
    .inspire a h5 {
        color: #000;
        font-weight: 700;
    }
    .inspire a {
        text-decoration: underline;
        text-decoration-color: #000;
    }
</style>
<div class="wrap-content">
<div class="container" style="position: relative; top: 10%;">
    <div class="row">
        <h2 class="title">Inspirations</h2>
        <hr>
        <?php foreach($all_links as $a_link) : ?>
            <div class="well inspire">
                <h3><?php echo $a_link['name']; ?></h3>
                <a target="_blank" href="http://<?php echo $a_link['link']; ?>"><h5><?php echo $a_link['link']; ?></h5></a>
            </div>
        <?php endforeach;  ?>
        <a href="."><button class="btn btn-default">Back</button></a>
    </div>
</div>
</div>


