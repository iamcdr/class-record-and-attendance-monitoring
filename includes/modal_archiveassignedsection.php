<script>
    $(document).ready(function() {
        $('#archive_assignsection<?= $rowAssign['student_level_id'] ?>').click(function() {
            swal({
                title: "Unassign <?= displayStudentName($_GET['sid']) ?> from <?= displaySectionDesc($rowAssign['section_id'])?>?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "students.php?s=exec",
                                type: "POST",
                                data: {
                                    unassign_section: true,
                                    stud_sec_id: <?= $rowAssign['student_level_id'] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Archived!',
                                            text: "Unassigned <?= displayStudentName($_GET['sid']) ?> from <?= displaySectionDesc($rowAssign['section_id'])?> successfully.",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "students.php?s=assg_sc&sid=<?= $_GET['sid'] ?>"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>

