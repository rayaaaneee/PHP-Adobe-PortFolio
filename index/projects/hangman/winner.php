<?php require_once 'header.php';

$game = unserialize($_SESSION['game']);
unset($_SESSION['game']);

if (!isset($_SESSION['game'])) {
    header('Location: ./');
    exit;
}
?>
<div class="main-container-winner-page">
</div>
<?php require_once 'footer.php'; ?>