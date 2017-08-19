<script>
    $(document).ready(function() {
        $('#archive_student<?= $rowStud['student_id'] ?>').click(function() {
            swal({
                title: "Move <?= displayStudentName($rowStud['student_id']) ?> to archive?",
                text: "Confirming this would mean that the student information will not be viewed by other accounts either administrator or teacher.",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "students.php?s=exec",
                                type: "POST",
                                data: {
                                    archive_student: true,
                                    student_id: <?= $rowStud['student_id'] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Archived!',
                                            text: "Moved <?= displayStudentName($rowStud['student_id']) ?> to archive successfully.",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "students.php"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>
   
