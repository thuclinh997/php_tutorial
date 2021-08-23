<?php
include('config/connect.php');
//write query fro all pizzas
$sql = "SELECT * FROM pizzas ORDER BY created_at";
//make query and get result
$result = mysqli_query($conn, $sql);
//fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
//free result from memory
mysqli_free_result($result);
//close connection
mysqli_close($conn);

// print_r($pizzas);
// print_r(explode(',',$pizzas[0]['ingredients']));
?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>

<h4 class="center grey-text">Pizzas</h4>
<div class="container">
    <div class="row">
        <?php foreach ($pizzas as $pizza) : ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <img src="img/01.jpeg" alt="pizza" class="pizza">
                    <div class="card-content center">
                        <h6><?= htmlspecialchars($pizza['title']) ?></h6>
                        <ul>
                            <?php foreach (explode(',', $pizza['ingredients']) as $ing) : ?>
                                <li><?= htmlspecialchars($ing) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="card-action rigtht-align">
                        <a href="details.php?id=<?= $pizza['id'] ?>" class="brand-text">more info</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <?php if (count($pizzas) >= 3) : ?>
        <p>there are a of more pizzas</p>
    <?php else : ?>
        <p>ther are less than 3 pizzas</p>
    <?php endif; ?>
</div>

<?php include('templates/footer.php'); ?>

</html>