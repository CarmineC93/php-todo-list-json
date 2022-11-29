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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <main id="app">
        <div class="container pt-5">
            <h1 class="text-center">My Todo List</h1>
            <div class="row justify-content-center">
                <div class="col-7">
                    <ul class="list-group">
                        <li class="list-group-item"></li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-7">
                    <input class="form-control" type="text" placeholder="Inserisci un nuovo todo" aria-label="Inserisci un nuovo todo" v-model="newTodo">
                    <button class="btn btn-primary mt-2" @click="addTodo">Salva</button>
                </div>
            </div>
        </div>
    </main>

</body>

</html>