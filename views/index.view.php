<!DOCTYPE html>
<html lang="">
    <head>
        <title>TODO</title>
        <link rel="stylesheet" href="../css/styles.css"
    </head>

    <body>

        <header>
            <h1>TO DO LIST</h1>
        </header>
        <form action="/task/create" method="POST">
            <input id="title" name="title" type="text" placeholder="Enter Task">
            <button class="add-button">
                <span>Add</span> <img class="add-image" src=   "../images/add-button.svg" alt="">
            </button>
        </form>
        <div class="tasks-container">
            <ul>
                <?php foreach($data as $task) : ?>
                    <li>
                        <p class="task-item <?= isDone($task['is_done']) ? 'done' : '' ?>"> <?= $task['title'] ?></p>
                        <form method="POST" action="/task/edit">
                            <input type="hidden" name="id" value="<?= $task['id']?>">
                            <input type="hidden" name="is_done" value="<?= $task['is_done']?>">
                            <button class="done-button">
                                <img src="../images/done-button.png" alt="">
                            </button>
                        </form>
                        <form method="POST" action="/task/delete">
                            <input type="hidden" name="id" value="<?= $task['id'] ?>">
                            <button class="delete-button">
                                <img src="/images/delete-button.svg" alt="">
                            </button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>