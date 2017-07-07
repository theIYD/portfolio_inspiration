<?php

    require 'config/config.php';

    include('include/header.php'); 
    include('include/footer.php'); 

    
?>

<style>
    .wrap-content {
        width: 100%;
        height: 100vh;
        /*background: #64B5F6;*/
        font-family: 'Roboto', Helvetica, sans-serif;
        padding-left: 4em;
        padding-right: 4em;
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
    .center {
        width: 100%;
        height: auto;
        text-align: center;
    }
</style>

<div class="wrap-content">
    <div class="container">
        <div class="row">
            <h2 class="title">Inspirations</h2>
            <hr>

           <div class="col-md-12">

               <?php 
               require 'config/config.php';

                $page = @$_GET['page'];

                if($page == 0 || $page == 1) {
                    $page1 = 0;
                } else {
                    $page1 = ($page * 3) - 3;
                }

               $q = "SELECT * FROM users LIMIT $page1, 3";
               $r = mysqli_query($connec, $q);

               while($data = mysqli_fetch_array($r)) {
                   echo '<div class="well inspire"><h3>'. $data['name'] .'</h3>';
                   echo '<a href=http://'. $data['link'] .'><h5>'.$data['link'].'</h5></a></div>';
               }

               //Free the result
                mysqli_free_result($r);

                //Close the connection
                mysqli_close($connec);


               ?>

           </div>
           <div class="center">
            <div class="pagination pagination-lg">
                <?php
                require 'config/config.php';

                    $query = 'SELECT * FROM users';
                    $result = mysqli_query($connec, $query);
                    $count = mysqli_num_rows($result);

                    $calc = $count/3;   
                    $calc = ceil($calc);

                    mysqli_free_result($result);

                    //Close the connection
                    mysqli_close($connec);

                ?>
                    <?php for($i=1; $i<=$calc; $i++) { ?>
                    <li><a href="get_my_data.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php } ?>
                    </div>
            </div>
            <a href="."><button class="btn btn-default">Back</button></a>
        </div>
    </div>
</div>