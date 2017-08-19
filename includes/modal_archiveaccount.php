<script>
    $(document).ready(function() {
        $('#archive_account<?= $rowAccounts['user_id'] ?>').click(function() {
            swal({
                title: "Move <?= $rowAccounts['first_name'] . " " . $rowAccounts['last_name'] ?> account to archive?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "accounts.php?s=exec",
                                type: "POST",
                                data: {
                                    archive_account: true,
                                    user_id: <?= $rowAccounts['user_id'] ?>
                                },
                                    success: function(response){
                                        swal({
                                            title: 'Archived!',
                                            text: "Successfully archived account.",
                                            type: 'success'}
                                             ).then(function(response){
                                             window.location.href= "accounts.php"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>
