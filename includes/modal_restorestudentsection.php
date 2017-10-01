<script>
    $(document).ready(function() {
        $('#restore_studentsec<?= $rowClass[0] ?>').click(function() {
            swal({
                title: "Restore <?= displayStudentName($rowClass['student_id']) ?> to <?= displaySectionDesc($rowClass['section_id'])?>?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            url: "archives.php?s=exec",
                            type: "POST",
                                data: {
                                    restore_studentsec: true,
                                    stud_sec_id: <?= $rowClass[0] ?>
                            },
                            success: function(response) {
                                console.log(response);
                                swal({
                                    title: 'Restored!',
                                    text: "Restored <?= displayStudentName($rowClass['student_id']) ?> to <?= displaySectionDesc($rowClass['section_id'])?> successfully",
                                    type: 'success'
                                }).then(function(response) {
                                    window.location.href = "archives.php?s=stud_sec"
                                })
                            }
                        })
                    })
                },
            })
        })
    })
</script>
