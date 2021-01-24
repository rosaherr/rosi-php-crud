<script>
    <?php        
        if(isset($_SESSION ['message'])) {
            echo "alert('".$_SESSION ['message']."')";
            unset($_SESSION ['message']);
        }
    ?>
</script>