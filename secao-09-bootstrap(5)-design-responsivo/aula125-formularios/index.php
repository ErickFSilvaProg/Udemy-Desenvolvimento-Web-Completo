<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>

    <!-- Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <!-- Menu voltar -->
    <div class="container-fluid">
        <div class="row">

            <nav class="navbar fixed-top bg-dark" data-bs-theme="dark">
                <ul class="navbar-nav px-3">
                    <li class="navbar-item">
                        <a href="../../secao-09-bootstrap(5)-design-responsivo/" class="nav-link">Voltar</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

    <div class="container">

        <h1 class="display-4 border-bottom border-dark mb-3 pb-3 barra-grupo-lista">Formulários</h1>

        <form action="">
            <div class="row">

                <!-- Caixa de texto -->
                <div class="col-lg-6 p-2 mb-3 border">
                    <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-1">Caixa de texto:</h2>

                    <div class="form-group">
                        <label for="usuario" class="form-label">Usuário</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Digite seu usuário">
                    </div>

                    <div class="form-group mt-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control form-control-sm" value="dev.desenvolvimento@empresa.com" placeholder="Digite seu e-mail" readonly>
                        <small class="form-text">E-mail será validado</small>
                    </div>
                </div>

                <!-- Select -->
                <div class="col-lg-6 p-2 mb-3 border">
                    <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-1">Select:</h2>

                    <div class="form-group">
                        <label for="estados" class="form-label">Estados</label>
                        <select name="estados" id="estados" class="form-select">
                            <option selected>Selecione</option>
                            <option value="pe">Pernambuco</option>
                            <option value="al">Alagoas</option>
                            <option value="se">Sergipe</option>
                            <option value="pb">Paraíba</option>
                        </select>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="col-lg-6 p-2 mb-3 border">
                    <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-1">Textarea:</h2>

                    <div class="form-group">
                        <label for="mensagem" class="form-label">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-floating mt-3">
                        <textarea name="mensagem2" id="mensagem2" class="form-control"></textarea>
                        <label for="mensagem2" class="form-label">Mensagem</label>
                    </div>
                </div>

                <!-- File input -->
                <div class="col-lg-6 p-2 mb-3 border">
                    <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-1">File input:</h2>

                    <div class="form-group">
                        <label for="arquivo" class="form-label">Arquivo</label>
                        <input type="file" name="arquivo" id="arquivo" class="form-control">
                    </div>
                </div>

                <!--  -->
                <div class="col-lg-6 p-2 mb-3 border">
                    <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-1">:</h2>


                </div>

                <!--  -->
                <div class="col-lg-6 p-2 mb-3 border">
                    <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-1">:</h2>


                </div>

                <!--  -->
                <div class="col-lg-6 p-2 mb-3 border">
                    <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-1">:</h2>


                </div>
            </div>
        </form>

    </div>

</body>

</html>