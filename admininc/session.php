<?php
 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['jose']) || (trim($_SESSION['jose']) == '')) { ?>
<script>
window.location = "../admin/index.php";
</script>
<?php
}
$session_id=$_SESSION['jose'];
?>