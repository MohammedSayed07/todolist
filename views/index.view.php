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
        <form action="/" method="POST">
            <input id="title" name="title" type="text" placeholder="Enter Task">
            <button>
                <span>Add</span> <img class="add-image" src=   "../images/add-button.svg" alt="">
            </button>
        </form>
        <div class="tasks-container">
            <ul>
                <?php foreach($data as $item) : ?>
                    <li>
                        <p class="task-item"> <?= $item['title'] ?></p>
                        <button class="done-button">
                            <img src="../images/done-button.png" alt="">
                        </button>
                        <button class="delete-button">
                            <img src="/images/delete-button.svg" alt="">
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>