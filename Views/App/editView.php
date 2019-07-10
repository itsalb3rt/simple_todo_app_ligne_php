<div>
    <form action="<?= Assets::href('app/updateTaskController') ?>" method="POST">
        <h1>Editar tarea # <?= $task->id ?></h1>
        <div>
            <label for="title">Titulo</label>
            <input type="text" value="<?= $task->title ?>" name="title" placeholder="Titulo..." required>
        </div>
        <div>
            <label for="description">
                Descripcion
            </label>
            <textarea name="description" id="description" cols="30" rows="10" required><?=$task->description?></textarea>
        </div>
        <div>
            <input type="radio" name="status" id="pending" value="pending" <?= ($task->status =='pending')? 'checked' : '' ?> >
            <label for="pending">Pendiente</label>
            <input type="radio" name="status" id="complete" value="complete" <?= ($task->status =='complete')? 'checked' : '' ?> >
            <label for="complete">Completado</label>
        </div>
        <div>
            <input type="hidden" name="idTask" value="<?= $task->id ?>">
        </div>
        <div>
            <button type="submit">Actualizar</button>
        </div>
        <div>
            <a href="<?= Assets::href('app/index') ?>">Volver al inicio</a>
        </div>
    </form>
</div>