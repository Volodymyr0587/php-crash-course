<?php include 'inc/header.php'; ?>

<?php 
    $sql = 'SELECT * FROM feedback';
    $result = $conn->query($sql);
    $feedback = $result->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Past Feedback</h2>

<?php if(empty($feedback)): ?>
    <p class="lead mt3">Ther is no feedback</p>
<?php endif; ?>

<?php foreach($feedback as $item): ?>
    <div class="card my-3 w-75">
        <div class="card-body text-center">
            <?= $item['body']; ?>
            <div class="text-secondary mt-2">
                By <?= $item['name']; ?> on <?= $item['date']; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>