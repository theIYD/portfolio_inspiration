<?php include('include/header.php'); ?>

<style>
    
    main {
        width: 100%;
        height: 100%;
        background: #80CBC4;
        font-family: 'Roboto', Helvetica, sans-serif;
    }
    
    h1 {
        font-weight: 700;
        color: #fff;
    }
    
    .row {
        width: 100%;
        height: 100vh;
        text-align: center;
    }
    
    .wrap-content {
        position: relative;
        top: 30%;
    }
    
    hr {
        width: 50%;
    }
    
    button {
        margin-left: 10px;
        padding: 16px 34px;
        border: none;
        font-weight: 700;
    }
    
    .add:hover {
        background: #004D40;
        color: #fff
    }
    
    .add {
        background: #00796B;
        color: #fff
    }
    
    .get {
        background: #fff;
        color: #000
    }

</style>
<main>
    <div class="container">
    <div class="row">
        <div class="wrap-content">
            <h1>Welcome !</h1>
            <hr>
            <a href="addData.php"><button role="button" class="btn btn-default add">Add Inspiration</button></a>
            <a href="getData.php"><button role="button" class="btn btn-default get">Take inspiration</button></a>
        </div>
    </div>
</div>
</main>


<?php include('include/footer.php'); ?>