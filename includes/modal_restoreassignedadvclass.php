<script>
    $(document).ready(function() {
        $('#restore_assignadvclass<?= $rowClass[0] ?>').click(function() {
            swal({
                title: "Reassign <?= displayName($rowClass['teacher_id']) ?> to <?= displaySectionDesc($rowClass['section_id'])?>?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            url: "archives.php?s=exec",
                            type: "POST",
                                data: {
                                    reassign_adv_class: true,
                                    teach_class_id: <?= $rowClass[0] ?>
                            },
                            success: function(response) {
                                console.log(response);
                                swal({
                                    title: 'Restored!',
                                    text: "Reassigned <?= displayName($rowClass['teacher_id']) ?> to <?= displaySectionDesc($rowClass['section_id'])?> successfully",
                                    type: 'success'
                                }).then(function(response) {
                                    window.location.href = "archives.php?s=teach_adv_class"
                                })
                            }
                        })
                    })
                },
            })
        })
    })
</script>
