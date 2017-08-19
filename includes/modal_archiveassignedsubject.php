<script>
    $(document).ready(function() {
        $('#archive_assignsubject<?= $rowSubj[0] ?>').click(function() {
            swal({
                title: "Unassign <?= displaySubjectDesc($rowSubj[0]) ?> from <?= displayGradelevelDesc($_GET['lvlid'])?>?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "gradelevel.php?s=exec",
                                type: "POST",
                                data: {
                                    unassign_subject: true,
                                    levelsubject_id: <?= $rowSubj[0] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Archived!',
                                            text: "Unassigned <?= displaySubjectDesc($rowSubj[0]) ?> to <?= displayGradelevelDesc($_GET['lvlid'])?> successfully.",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "gradelevel.php?s=assg_sub&lvlid=<?= $_GET['lvlid'] ?>"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>

