<script>
    $(document).ready(function() {
        $('#activate_grading<?= $rowGP[0] ?>').click(function() {
            swal({
                title: "Activate <?= displayGradingPeriod($rowGP[0])?> ?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "gradingperiod.php?s=exec",
                                type: "POST",
                                data: {
                                    activate_gradingperiod: true,
                                    gradingperiod_id: <?= $rowGP[0] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Activated!',
                                            text: "Activated <?= displayGradingPeriod($rowGP[0]) ?> successfully!",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "gradingperiod.php"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    });
</script>

