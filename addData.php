<?php
    
    require 'config/config.php';

    if (isset($_POST['submit-form'])) {
        $name = $_POST['username'];
        $link = $_POST['web-link'];

        $query = "INSERT INTO users (name, link) VALUES('$name', '$link')";

        if(!mysqli_query($connec, $query)) {
          echo '<div class="container"><h3 class="alert alert-danger"><span class="glyphicon glyphicon-remove">Failed</span></h3></div>';
        } else {
          echo '<div class="container"><h3 class="alert alert-success"><span class="glyphicon glyphicon-ok">Success</span></h3></div>';

        }

        header("refresh:2; url=index.html");
      }
?>

<style>
    .title {
        color: #fff;
        font-weight: 700;
        font-family: 'Roboto', Helvetica, sans-serif;
    }
    p {
        font-size: 22px;
        text-align: center;
        color: #fff;
        font-family: 'Roboto', Helvetica, sans-serif;
    }
    .wrap-content {
        width: 100%;
        height: 100vh;
        /*background: #64B5F6;*/
        font-family: 'Roboto', Helvetica, sans-serif;
        padding-left: 2em;
        padding-right: 2em;
    }
    
    hr {
        width: 50%;
    }
    
    label {
        color: #fff;
        font-size: 18px;
        letter-spacing: 1px;
    }
    
    .myDiv {
        position: relative; 
        top: 100px;
    }
    
    @media screen and (max-width: 600px){
        p {
            font-size: 16px;
        }
        
        label {
            font-size: 16px;
            letter-spacing: inherit;
        }
        
        .myDiv {
            top: 50px;
        }
        
        .center {
            text-align: center;
        }
    }
    
</style>
<?php include('include/header.php') ?>
 <div class="wrap-content">
     <div class="container myDiv">
    <div class="row">
      <h2 class="title" align="center">Portfolio's Collection</h2>
      <hr>
      <p>It is a crowd sourced website where users can enter the link of portfolio's which can be used <br> as an inspiration to those who are beginners in building a portfolio of themselves.</p>
      <form method="post" action="" style="position: relative; top: 50px;">
        <div class="form-group">
          <label for="username">Name of the portfolio owner</label>
          <input class="form-control" type="text" name="username" value="">
        </div>

        <div class="form-group">
          <label for="web-link">Inspiration Link:</label>
          <input class="form-control" type="text" name="web-link" value="">
        </div>
        <div class="center">
        <input type="submit" name="submit-form" class="btn btn-success">
        </div>
      </form>
    </div>
    </div>
 </div>
  
<?php include('include/footer.php') ?>