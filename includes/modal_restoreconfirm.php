<script>
    $(document).ready(function() {
        $('#restore_confirm<?= $filepass ?>').click(function() {
            swal({
                title: "Restore <?= $filename ?>?",
                text: "Please input your password to confirm restoring this backup file.",
                confirmButtonText: 'Yes',
                input: 'password',
                inputAttributes: {
                    'name': 'password_auth'
                },
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            url: "includes/backupandrestore_exec.php",
                            type: "POST",
                            dataType: "json",
                            data: {
                                restore_confirmation: true,
                                password_auth: $('input[name="password_auth"]').val(),
                                backup_file: "<?= $filename ?>"
                            },
                            complete: function(data) {
                                console.log(data);
                                if (data["responseText"] == "error") {
                                    swal({
                                        title: 'Failed!',
                                        text: "Failed to restore backup file, password is incorrect",
                                        type: 'error'
                                    })
                                } else {
                                    swal({
                                            title: 'Restored!',
                                            text: "Successfully restored a backup file",
                                            type: 'success'
                                        })
                                        .then(function() {
                                            window.location.href = "backupandrestore.php"
                                        })
                                }
                            }
                        })
                    })
                },
            })
        })
    })
</script>
