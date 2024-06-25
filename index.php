<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
</head>
<body>
    <header>
        <h1>Biblioteca de livros</h1>
    </header>
    <main>
        <div class="div-btn">
            <button class="btn-favoritos" onclick="orderByFav()">Favoritos</button>
        </div>
        <div class="card-container" id="card-container">
            <button class="btn-adicionar" data-bs-toggle="modal" data-bs-target="#adicionarModal">Adicionar</button>
        </div>
    </main>
    <div class="modal fade" id="adicionarModal" tabindex="-1" aria-labelledby="adicionarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar livro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo" placeholder="informe o titulo do seu livro">
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" placeholder="Conte uma descrição">
                </div>
                <div class="mb-3">
                    <label for="url-img" class="form-label">URL da imagem</label>
                    <input type="text" class="form-control" id="url-img" placeholder="Adicione o link da imagem na internet">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" style="background-color: #61b7e8; border: none; outline: none; " onclick="enviarLivro()">Salvar</button>
            </div>
            </div>
        </div>
    </div>
    <script src="scripts/script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
