<?php
require_once 'view/comment.php';
require_once 'models/comment.php';

$arrComments = getComments();
?>

<?php foreach ($arrComments as $key => $comment): ?>
<?php $id = $comment['id']?>
<div class="container d-flex justify-content-center">
    <div class="col-6">
    <hr>
<div>
    <p>Автор: <?php echo $comment['email']?></p>
    <p>Комментарий: <?php echo $comment['text']?></p>
    <p>Время: <?php echo $comment['date']?></p>
    <form action="controller/comment.php" method="post">
        <button type="submit" value="btn" name="delete" class="btn btn-outline-danger">Удалить</button>
        <input type="hidden" name="id" value="">
    </form>
</div>
    <hr>
    </div>
</div>
<?php endforeach;?>

