<script>
    $(document).ready(function() {
        $('#restoreStudent<?= $rowStudents[0] ?>').click(function() {
            swal({
                title: "Restore <?= displayStudentName($rowStudents[0]) ?>?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "archives.php?s=exec",
                                type: "POST",
                                data: {
                                    restore_student: true,
                                    student_id: <?= $rowStudents[0] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Restored!',
                                            text: "Restored <?= displayStudentName($rowStudents[0]) ?> successfully.",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "archives.php?s=students"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>

