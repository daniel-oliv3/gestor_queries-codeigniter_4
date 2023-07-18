<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<nav class="container-fluid p-4">
    <?= form_open('main/search_submit') ?>

    <div class="row">
        <div class="col-md-9 col-12">
            <div class="d-flex align-items-center">
                <label for="search" class="me-3"><strong>Pesquisar</strong></label>
                <input type="text" class="form-control form-control-sm w-50 me-3" id="search" name="search" placeholder="Pesquisar">
                <button type="submit" class="btn btn-primary d-flex align-items-center"><i class="fa-solid fa-magnifying-glass me-3"></i> Pesquisar</button>
            
                <span class="mx-3"></span>

                <label for="select_project" class="me-3"><strong>Projeto</strong></label>
                <select class="form-select form-select-sm" name="select_project" id="select_project">
                    <option selected>Todas as Tabelas</option>
                    <option value="1">Tabela 1</option>
                    <option value="2">Tabela 2</option>
                    <option value="3">Tabela 3</option>
                </select>
            </div>
        </div>
        <div class="col-md-3 col-12 text-end">
            <a href="#" class="btn btn-primary"><i class="fa-solid fa-plus me-3"></i> Adicionar</a></a>
        </div>
    </div>

    
    
    <?= form_close() ?>
</nav>


<!-- Tabela dos resultados -->
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col">
            <table class="table table-striped" id="table-results">
                <thead>
                    <tr>
                        <th>Projeto</th>
                        <th>Query</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- ciclo para apresentar as queries -->
                    <?php for($i = 0; $i < 100; $i++) : ?>
                    <tr>
                        <td>Projeto 1</td>
                        <td>Query 1</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fa-solid fa-pen-to-square me-3"></i> Editar</a>
                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash me-3"></i> Excluir</a>
                        </td>
                    </tr>

                    <?php endfor; ?>
                    
    
                </tbody>
            </table>
        </div>
    </div>

    <p class="mt-5 text-center">Não foram encontrados resultados</p> 
</div>






<?= $this->endSection() ?>