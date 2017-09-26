<script>
    $(document).ready(function() {
        $('#archive_assignadvclass<?= $rowClass[0] ?>').click(function() {
            swal({
                title: "Unassign <?= displayName($_GET['tid']) ?> from <?= displaySectionDesc($rowClass['section_id'])?>?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "teachers.php?s=exec",
                                type: "POST",
                                data: {
                                    unassign_adv_class: true,
                                    teach_class_id: <?= $rowClass[0] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Archived!',
                                            text: "Unassigned <?= displayName($_GET['tid']) ?> from <?= displaySectionDesc($rowClass['section_id'])?> successfully.",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "teachers.php?s=assg_adv_cls&tid=<?= $_GET['tid'] ?>"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>

