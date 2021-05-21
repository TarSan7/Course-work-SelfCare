@if($errors->any())
<?php
$var = implode("\\n", $errors->all());
?>
    <script>
    var Errors = "<?php echo $var; ?>";
    alert(Errors);
    </script>
    @endif
@if(session('success'))
<script>
    alert("Thank you for message!");
    </script>
@endif