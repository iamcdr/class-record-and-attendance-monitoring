<script>
    $(document).ready(function() {
        $('#archive_assigngradelevel<?= $rowSubj[0] ?>').click(function() {
            swal({
                title: "Unassign <?= displayGradeLevelDesc($rowSubj['level_id']) ?> from <?= displaySubjectCode($_GET['sid'])?>?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "gradelevel.php?s=exec",
                                type: "POST",
                                data: {
                                    unassign_gradelevel: true,
                                    levelsubject_id: <?= $rowSubj[0] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Archived!',
                                            text: "Unassigned <?= displaySubjectDesc($rowSubj[0]) ?> to <?= displayGradelevelDesc($_GET['lvlid'])?> successfully.",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "subjects.php?s=assg_gl&sid=<?= $_GET['sid'] ?>"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>

