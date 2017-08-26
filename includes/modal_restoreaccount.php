<script>
    $(document).ready(function() {
        $('#restoreAcc<?= $rowAcc[0] ?>').click(function() {
            swal({
                title: "Restore <?= $rowAcc['first_name'] . " " . $rowAcc['last_name'] ?>?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            url: "archives.php?s=exec",
                            type: "POST",
                            data: {
                                restore_account: true,
                                user_id: <?= $rowAcc[0] ?>
                            },
                            success: function(response) {
                                swal({
                                    title: 'Restored!',
                                    text: "Successfully restored account.",
                                    type: 'success'
                                }).then(function(response) {
                                    window.location.href = "archives.php?s=accounts"
                                })
                            }
                        })
                    })
                },
            })
        })
    })
</script>
