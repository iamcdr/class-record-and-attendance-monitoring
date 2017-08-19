<script>
    $(document).ready(function() {
        $('#archive_section<?= $rowSection[0] ?>').click(function() {
            swal({
                title: "Move <?= displaySectionDesc($rowSection[0]) ?>  to archive?",
                confirmButtonText: 'Yes',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: "sections.php?s=exec",
                                type: "POST",
                                data: {
                                    archive_section: true,
                                    section_id: <?= $rowSection[0] ?>
                                },
                                    success: function(){
                                        swal({
                                            title: 'Archived!',
                                            text: "Moved <?= displaySectionDesc($rowSection[0]) ?> to archive successfully.",
                                            type: 'success'
                                        })
                                            .then(function(){
                                             window.location.href= "sections.php"
                                        })
                                    }
                            })
                    })
                },
            })
        })
    })
</script>

