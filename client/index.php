<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/Styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand text-light">Navbar</a>
              <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="button">Search</button>
              </div>
            </div>
          </nav>
    </header>
    <main class="main">
        <form>
            <div class="mb-3">
                <label for="name-task" class="form-label">Nombre de la tarea</label>
                <input type="text" class="form-control" id="name-task">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="description-task" class="form-label">Descripcionde la tarea</label>
                <textarea class="form-control" cols="30" rows="5" placeholder="Descripcionde la tarea" id="descrition-task"></textarea>
            </div>
            <button type="button" class="btn btn-primary" id="add_task">Submit</button>
        </form>
        <div class="col-md-5 bg-light rounded-3 my-custom-scrollbar table-wrapper-scroll-y">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                    </tr>
                </thead>
                <tbody id="table-task">
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="./app/app.js"></script>
</body>
</html>