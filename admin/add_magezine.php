<?php include "header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Magezine
            <small>Add</small>
        </h1>
    </section>  
    
    <?php
    if(isset($_SESSION['error'])){?>
    <br>
    <div class="alert alert-<?= $_SESSION['error']['status']?>">
        <?= $_SESSION['error']['message']?>
        <div data-dismiss="alert" class="pull-right"><i class="fa fa-times"></i></div>
    </div>
    <?php unset($_SESSION['error']);} ?>
    
    
    <form action="add_magezine_process.php" method="post" enctype="multipart/form-data" role="form">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">
            <label>Magezine</label>
            <select id="magezine" name="magezine" class="form-control select2">
                <?php
                $db = new SafeDb();
                $result = $db->select('list_of_mags');
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['name'] . '">' . $row['name'] . '<option>';
                }
                ?>
            </select> 
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">
            <label>Month</label>
            <select id="month" name="month" class="form-control select2">
                <option>January</option>
                <option>February</option>              
                <option>March</option>
                <option>April</option>
                <option>May</option>              
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
            </select> 
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">
            <label>Year</label>
            <select id="year" name="year" class="form-control select2">
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
            </select> 
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label>Description</label>
            <textarea name="description"></textarea>
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label>Select Images</label>
            <input type="file" id="images" name="images[]" multiple accept="image/jpeg">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="submit" value="ADD" class="btn btn-primary">
        </div> 
        <form>

            </div><!-- /.content-wrapper -->
            <?php include "footer.php"; ?>