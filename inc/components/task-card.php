<div class="card mt-4 col-3">
    <div class="card-header">
        <?php echo $task_name ?>
    </div>
    <div class="card-body">
        <p><?php echo $task_date ?></p>
        <p><?php echo $task_description ?></p>
    </div>
    <div class="card-footer">
        <a href="./eliminar-tarea.php?token=<?php echo $token ?>&task_id=<?php echo $task_id ?>" role="button" class="btn btn-sm btn-danger">Eliminar Tarea</a>
        <a href="./editar-tarea.php?token=<?php echo $token ?>&task_id=<?php echo $task_id ?>" role="button" class="btn btn-sm btn-primary">Editar Tarea</a>
    </div>
</div>