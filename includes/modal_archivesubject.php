<script>
    $(document).ready(function() {
        $('#archive_subject<?= $rowSubjects['subject_id'] ?>').click(function() {
            swal({
                title: "Move <?= displayGradeLevelDesc($rowSubjects['subject_id']) ?> to archive?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "subjects.php?s=exec",
                                type: "POST",
                                data: {
                                    archive_subject: true,
                                    subject_id: <?= $rowSubjects['subject_id'] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Archived!',
                                            text: "Moved <?= displaySubjectDesc($rowSubjects['subject_id']) ?> to archive successfully.",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "subjects.php"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>
   
