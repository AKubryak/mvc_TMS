<?php

use Model\Models\TaskModel;

/**
 * @var array<TaskModel> $tasks
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task list</title>
</head>

<body>
    <form method="post" action="/update">
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Date</th>
                <th></th>
            </tr>
            <?php foreach ($tasks as $task):

                $background = 'white';

                if ($task->status == 1) {
                    $background = 'green';
                } else if ($task->dueDate->getTimestamp() < time()) {
                    $background = 'red';
                }

            ?>
                <tr style="background-color: <?= $background ?>">
                    <td><?= $task->id ?></td>
                    <td><?= $task->name ?></td>
                    <td><?= $task->description ?? '' ?></td>
                    <td><?= $task->dueDate->format('d.m.Y H:i:s') ?></td>
                    <td><input type="submit" value="completed" name="completed"></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </form>
</body>

</html>