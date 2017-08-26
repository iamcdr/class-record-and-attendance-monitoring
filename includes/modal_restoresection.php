<script>
    $(document).ready(function() {
        $('#restoreSection<?= $rowSection[0] ?>').click(function() {
            swal({
                title: "Restore <?= displaySectionDesc($rowSection[0]) ?>?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "archives.php?s=exec",
                                type: "POST",
                                data: {
                                    restore_section: true,
                                    section_id: <?= $rowSection[0] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Restored!',
                                            text: "Restored <?= displaySectionDesc($rowSection[0]) ?> successfully.",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "archives.php?s=sections"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>

