<div class="row">
    <form action="sections.php?s=exec" method="post">
        <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">
           <div class="form-group">
               <label>Grade Level Assignation</label>
               <select name="gradelevel_assg" class="form-control">
                   <option value="">=-Please Select-=</option>
                   <?php
                   $queryGl = "SELECT * FROM gradelevel WHERE archive_status = 0 ORDER BY gradelevel_id ASC";
                   $resultGl = mysqli_query($connection, $queryGl) or die(mysqli_error($connection));

                   while($rowGl = mysqli_fetch_array($resultGl)){
                   ?>
                   <option value="<?= $rowGl['gradelevel_id'] ?>"><?= $rowGl['gradelevel_description'] ?></option>

                   <?php } ?>
               </select>

           </div>
            <div class="form-group">
                <label>Section Description</label>
                <input class="form-control" type="text" name="section_description">
            </div>
            <div class="form-group">
                <input type="submit" name="add_section" class="btn btn-success">
            </div>
        </div>
    </form>
</div>
