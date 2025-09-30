<script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>

<script type="text/javascript">
    @if (count($errors) > 0)
        $('#newpage').modal('show');
    @endif
</script>

<script>
    $(document).ready(function() {
        $('#textInput').on('input', function() {
            let value = $(this).val();
            value = value.replace(/\s+/g, '-');
            $(this).val(value);
        });
    });
</script>
