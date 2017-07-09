<?php
    
    require 'config/config.php';
    require 'config/constants.php';

    if (isset($_POST['submit-form'])) {
        $name = $_POST['username'];
        $link = $_POST['web-link'];
        $profession = $_POST['profession'];

        $query = "INSERT INTO users (name, link, profession) VALUES('$name', '$link', '$profession')";

        if(!mysqli_query($connec, $query)) {
          echo '<div class="container"><h3 class="alert alert-danger"><span class="glyphicon glyphicon-remove">Failed</span></h3></div>';
        } else {
          echo '<div class="container"><h3 class="alert alert-success"><span class="glyphicon glyphicon-ok">Success</span></h3></div>';

        }

        header("refresh:2; url=index.html");
      }
?>

<head>
    <link rel="stylesheet" href="include/assets/styles/addData.css">
    <title>Add Inspiration</title>
</head>
<?php include('include/header.php') ?>
 <div class="wrap-content">
     <div class="container myDiv">
    <div class="row">
      <h2 class="title" align="center">Portfolio's Collection</h2>
      <hr>
      <form method="post" action="">
        <div class="form-group">
          <label for="username">Name of the portfolio owner</label>
          <input class="form-control" type="text" name="username" placeholder="Enter name">
        </div>

        <div class="form-group">
          <label for="web-link">Inspiration Link:</label>
          <input class="form-control" type="text" name="web-link" placeholder="Link to portfolio">
        </div>
        <div class="form-group">
          <label for="profession">Profession: </label>
          <input class="form-control" type="text" name="profession" placeholder="A line about the person">
        </div>
        <div class="center">
        <input type="submit" name="submit-form" class="btn btn-success">
        <a class="btn btn-default" href="<?php echo ROOT_URL; ?>">Back</a>
        </div>
      </form>
    </div>
    </div>
 </div>
  
<?php include('include/footer.php') ?>