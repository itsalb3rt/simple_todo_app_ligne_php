<div>
    <form action="<?= Assets::href('app/addTaskController') ?>" method="POST">
        <h1>Agregar tarea</h1>
        <div>
            <label for="title">Titulo</label>
            <input type="text" name="title" placeholder="Titulo..." required>
        </div>
        <div>
            <label for="description">
                Descripcion
            </label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Ingregre un descripcion" required></textarea>
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</div>

<div>
    <?php foreach ($tasks as $task) : ?>
        <div class="task">
            <h4><?= $task->title ?> <em><?= $task->create_at ?></em></h4>
            <div>
                <?= $task->description ?>
            </div>
            <div>
                <a href="<?= Assets::href('app/editTaskController',$task->id) ?>">Editar</a>
                <a href="<?= Assets::href('app/deleteTaskController',$task->id) ?>">Eliminar</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>