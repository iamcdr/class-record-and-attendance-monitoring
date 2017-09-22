<div class="row">
    <form action="classes.php?s=exec" method="post">
      <input type="hidden" name="section_id" value="<?= $_GET['sid'] ?>">
       <input type="hidden" name="subject_id" value="<?= $_GET['subid'] ?>">
       <input type="hidden" name="year_id" value="<?= $_GET['yid'] ?>">
        <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
            <div class="form-group">
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Percentage</th>
                    </tr>
                    <tr>
                        <td>Written Works:</td>
                        <td><input type="number" class="form-control" name="ww" placeholder="e.g. 30"></td>
                    </tr>
                    <tr>
                        <td>Performance Tasks:</td>
                        <td><input type="number" class="form-control" name="pt" placeholder="e.g. 50"></td>
                    </tr>
                    <tr>
                        <td>Quarterly Assessment:</td>
                        <td><input type="number" class="form-control" name="qa" placeholder="e.g. 80"></td>
                    </tr>
                </table>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="percentage_dist">
            </div>
        </div>
    </form>
</div>

<script>
$(document).ready(function(){

    $('form').submit(function(){
        var ww = parseInt($('input[name="ww"]').val());
        var pt = parseInt($('input[name="pt"]').val());
        var qa = parseInt($('input[name="qa"]').val());
        var percSum = ww+pt+qa;

        if(percSum != 100){
            swal("Total percentage must be equal to 100");
            return false;
        }
    })
})
</script>
