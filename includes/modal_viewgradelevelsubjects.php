<script>
    $(document).ready(function() {
        $('#view_subjects<?= $rowGradeLvl['gradelevel_id'] ?>').click(function() {
            swal({
                title: "Assigned Subjects to <?= displayGradeLevelDesc($rowGradeLvl['gradelevel_id']) ?> ",
                type: 'info',
                html: "<?= $subjectsView ?>",
                showCloseButton: true,
            })
        })
    })
</script>

