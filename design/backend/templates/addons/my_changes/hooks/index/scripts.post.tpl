<script>
$(document).ready(function() {
    $('#carrier_key_1 option').each(function() {
        if ($(this).val() !== "" && $(this).val() !== "ups") {
            $(this).hide();
        }
    });
})
</script>