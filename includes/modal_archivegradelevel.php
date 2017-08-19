<script>
    $(document).ready(function() {
        $('#archive_gradelevel<?= $rowGradeLvl['gradelevel_id'] ?>').click(function() {
            swal({
                title: "Move <?= displayGradeLevelDesc($rowGradeLvl['gradelevel_id']) ?> to archive?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "gradelevel.php?s=exec",
                                type: "POST",
                                data: {
                                    archive_gradelevel: true,
                                    gradelevel_id: <?= $rowGradeLvl['gradelevel_id'] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Archived!',
                                            text: "Moved <?= displayGradeLevelDesc($rowGradeLvl['gradelevel_id']) ?> to archive successfully.",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "gradelevel.php"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>

