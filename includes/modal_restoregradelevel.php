<script>
    $(document).ready(function() {
        $('#restoreGradelevel<?= $rowGradeLvl['gradelevel_id'] ?>').click(function() {
            swal({
                title: "Restore <?= displayGradeLevelDesc($rowGradeLvl['gradelevel_id']) ?>?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "archives.php?s=exec",
                                type: "POST",
                                data: {
                                    restore_gradelevel: true,
                                    gradelevel_id: <?= $rowGradeLvl['gradelevel_id'] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Restored!',
                                            text: "Restored <?= displayGradeLevelDesc($rowGradeLvl['gradelevel_id']) ?> successfully.",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "archives.php?s=glvl"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>

