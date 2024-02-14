<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List App</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body style="background-color: rgb(176, 208, 235); padding: x 10px;">
    <div class=" discription">
        <header>
            <a href="#" class="title">To Do</a>
            <p class="titleDes">
                ToDo is the best place to start your education tasks. Learn easily with us.
            </p>
        </header>
    </div>

    <div class="myTaskM">
        <a href="#" class="myTask">Add My Tasks</a>
        <div class="taskList">
            <form id="addTask">
                <label>ADD TITLE</label>
                <input type="text" id="taskName" required>
                <br><br>

                <label>ADD TASK DESCRIPTION</label>
                <input type="text" id="taskDescription" required><br><br>

                <button type="button" onclick="addTask();">CREATE A NEW TASK</button>
            </form>
        </div>
    </div>

    <a href="#" class="myTask">View Tasks</a>
    <div class="taskList">
        <form id="addTask">
            <label>TITLE</label>
            <input type="text" id="taskName" required>

            <?php
            require "connection.php";
            echo $taskName[""] ?>

            <br><br>

            <label>TASK DESCRIPTION</label>
            <input type="text" id="taskDescription" required>

          

            <br><br>

        </form>
    </div>

    <a href="#" class="myTask">Update Tasks</a>
    <div class="taskList">
        <form id="addTask">
            <label>UPDATE TITLE</label>
            <input type="text" id="taskName" required>
            <br><br>

            <label>UPDATE DESCRIPTION</label>
            <input type="text" id="taskDescription" required><br><br>

            <button type="button" onclick="addTask();">UPDATE YOUR TASK</button>
        </form>
    </div>

    <script src="script.JS"></script>
</body>

</html>