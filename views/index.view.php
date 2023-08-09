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
                <?php foreach($data as $item) : ?>
                    <li>
                        <p class="task-item"> <?= $item['title'] ?></p>
                        <form method="POST">
                            <button class="done-button">
                                <img src="../images/done-button.png" alt="">
                            </button>
                        </form>
                        <form method="POST" action="/task/delete">
                            <input type="hidden" name="id" value="<?= $item['id'] ?>">
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