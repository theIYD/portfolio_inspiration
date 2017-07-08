<?php

    require 'config/config.php';
    require 'config/constants.php';

    include('include/header.php'); 
?>

<head>
    <link rel="stylesheet" href="include/assets/styles/get.css">
</head>

<div class="wrap-content">
    <div class="container">
        <div class="row">
            <h2 class="title">Inspirations</h2>
            <hr>

           <div class="col-md-12">
               <div class="myDiv">

               <?php 
               require 'config/config.php';

                $page = @$_GET['page'];

                if($page == 0 || $page == 1) {
                    $page1 = 0;
                } else {
                    $page1 = ($page * 4) - 4;
                }

               $q = "SELECT * FROM `users` ORDER BY `id` DESC LIMIT $page1, 4";
               $r = mysqli_query($connec, $q);

               while($data = mysqli_fetch_array($r)) {
                   echo '<div class="well inspire"><h3>'. $data['name'] .'</h3>';
                   echo '<a href=http://'. $data['link'] .'><h5>'.$data['link'].'</h5></a>';
                   echo '<em><p class="description">'. $data['profession']. '</p></em></div>';
               }

               //Free the result
                mysqli_free_result($r);

                //Close the connection
                mysqli_close($connec);


               ?>
            </div>
           </div>
           </div>
           <div class="center">
            <div class="pagination pagination-sm">
                <?php
                require 'config/config.php';

                    $query = 'SELECT * FROM users';
                    $result = mysqli_query($connec, $query);
                    $count = mysqli_num_rows($result);

                    $calc = $count/4;   
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
            <div class="myDivTwo" style="text-align: center;">
                <a href="<?php echo ROOT_URL; ?>"><button class="btn btn-info">Back</button></a>
            </div>
        </div>
    </div>
    <?php include('include/footer.php');  ?>