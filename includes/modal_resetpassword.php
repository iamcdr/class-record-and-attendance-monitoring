<script>
    $(document).ready(function() {
        $('#resetPass<?= $rowAccounts['user_id'] ?>').click(function() {
            swal({
                title: "Reset Password of <?= displayName($rowAccounts['user_id']) ?> ?",
                text: "Confirming this would change the password into system-generated password.",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "accounts.php?s=exec",
                                type: "POST",
                                data: {
                                    reset_pass: true,
                                    user_id: <?= $rowAccounts['user_id'] ?>
                                },
                                    success: function(result){
                                        swal({
                                            title: 'New Password Sent!',
                                            text: "New password has been sent to contact number of <?= displayName($rowAccounts['user_id']) ?> .",
                                            type: 'success'
                                        })
                                            .then(function(){
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

