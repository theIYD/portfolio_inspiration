<?php
    
    require 'config/config.php';

    if (isset($_POST['submit-form'])) {
        $name = $_POST['username'];
        $link = $_POST['web-link'];

        $query = "INSERT INTO users (name, link) VALUES('$name', '$link')";

        if(!mysqli_query($connec, $query)) {
          echo '<div class="container"><h3 class="alert alert-danger">Data Not Inserted</h3></div>';
        } else {
          echo '<div class="container"><h3 class="alert alert-success">Data Inserted</h3></div>';

        }

        header("refresh:2; url=addData.php");
      }
?>

<?php include('include/header.php') ?>
  <div class="container" style="position: relative; top: 100px;">
    <div class="row">
      <h2>Portfolios Collection</h2>
      <hr>
      <p>It is a crowsourced website where users can enter the link of portfolio's which can be used as an inspiration to those who are beginners in building a portfolio of themselves.</p>
      <form method="post" action="" style="position: relative; top: 50px;">
        <div class="form-group">
          <label for="username">Name of the portfolio owner</label>
          <input class="form-control" type="text" name="username" value="">
        </div>

        <div class="form-group">
          <label for="web-link">Inpiration Link:</label>
          <input class="form-control" type="text" name="web-link" value="">
        </div>
        <input type="submit" name="submit-form" class="btn btn-defualt">
        <a href="."><button role="button" class="btn btn-info">Back</button></a>
      </form>
    </div>
  </div>
<?php include('include/footer.php') ?>