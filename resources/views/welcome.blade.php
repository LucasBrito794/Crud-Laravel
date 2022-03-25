<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Categoria</title>
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center">
            Laravel Crud
        </h1>
        <hr>
        <div class="row">
            <div class="col-8">
                <h4>Gerenciar categorias</h4>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                    <tbody>
                        @foreach($categorias as $categoria)
                        <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->name }}</td>
                        <td>
                        <!-- Chamando modal -->
                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2">Deletar</button>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <h4>Adicione uma nova categoria</h4>
                <form action="{{ route('registrar_categoria') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="nome" placeholder="Insira nova categoria">
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button class="btn btn-sm btn-success" type="submit">Adicionar categoria</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Editar-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('alterar_categoria', ['id'=>$categoria->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <h4>Insira novo nome para categoria.</h4>
                            <input type="text" class="form-control" name="nome" placeholder="Insira nome para categoria">
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button class="btn btn-success">Atualizar</button>
                </div>
                </div>
                </form>
            </div>
            </div>

    <!-- Modal Deletar-->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Excluir Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('excluir_categoria', ['id' => $categoria ->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <h4>Deseja excluir essa categoria?</h4>
                            <input type="text" class="form-control" name="nome" value = " {{ $categoria->name }} ">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button class="btn btn-danger">Excluir</button>
                </div>
                </div>
                </form>
            </div>
            </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        
    </script>
  </body>
</html>