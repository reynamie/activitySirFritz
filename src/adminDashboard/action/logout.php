
<?php

session_start();
session_unset();
session_destroy();
?>

<script>
// Clear localStorage items//
localStorage.removeItem("AdminAuth");
localStorage.removeItem("AdminUsername");
localStorage.clear(); // optional

  window.location.href = "../../../admin/index.html";
</script>
