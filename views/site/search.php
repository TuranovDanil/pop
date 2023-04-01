<h5 class="text-dark">Дисциплины</h5>
<div class="d-flex justify-content-between flex-wrap">
    <?php
    foreach ($discipline as $dis) {
        echo '<div class="card" style="width: 18rem;">' . '<div class="card-body">';
        echo '<h5 class="card-title">' . $dis->id . ' | ' . $dis->name . '</h5>';
        echo '<button class="btn btn-dark">Изменить</button>' . '<button class="btn btn-dark">Удалить</button>';
        echo '</div>' . '</div>';
    }
    ?>
</div>