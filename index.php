<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <main id="app">
        <div class="container pt-5">
            <h1 class="text-center">My Todo List</h1>
            <div class="row justify-content-center">
                <div class="col-7">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between" :class="{'text-decoration-line-through' : todo.done}" v-for="(todo, index) in todoList" :key="index">
                            <span @click="markDone(index)">
                                {{ todo.text }}
                            </span>
                            <span>
                                <i class="fa-solid fa-trash" @click="deleteTask(index)"> </i>
                            </span>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-7">
                    <input class="form-control" type="text" name="newTodo" placeholder="Inserisci un nuovo todo" aria-label="Inserisci un nuovo todo" v-model="newTodo">
                    <button class="btn btn-primary mt-2" @click="addTodo">Salva</button>
                </div>
            </div>
        </div>
    </main>

    <!-- js script -->
    <script src="js/script.js"></script>
</body>

</html>