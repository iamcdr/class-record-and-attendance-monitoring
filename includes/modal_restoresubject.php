<script>
    $(document).ready(function() {
        $('#restoreSubjects<?= $rowSubjects['subject_id'] ?>').click(function() {
            swal({
                title: "Restore <?= displaySubjectDesc($rowSubjects['subject_id']) ?>?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "archives.php?s=exec",
                                type: "POST",
                                data: {
                                    restore_subject: true,
                                    subject_id: <?= $rowSubjects['subject_id'] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Restored!',
                                            text: "Restored <?= displaySubjectDesc($rowSubjects['subject_id']) ?> successfully.",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "archives.php?s=subjects"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>

