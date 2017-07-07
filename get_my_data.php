<?php

    require 'config/config.php';

    include('include/header.php'); 
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
    
    @media screen and (max-width: 600px) {
        .myDiv {
            max-height: 300px;
            overflow-y: scroll;
            position: relative;
            top: -25px;
        }
        
        .inspire h3 {
            font-size: 18px;
        }
        
        .inspire a h5 {
            font-size: 12px;
        }
        
        .center {
            position: relative;
            top: -30px;
        }
        
        .myDivTwo {
            position: relative;
            top: -30px;
        }
        
        
        
        
    }
</style>

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
                   echo '<a href=http://'. $data['link'] .'><h5>'.$data['link'].'</h5></a></div>';
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
                <a href="."><button style="padding: 10px 42px;" class="btn btn-primary">Back</button></a>
            </div>
        </div>
    </div>
    <?php include('include/footer.php');  ?>