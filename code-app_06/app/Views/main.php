<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<nav class="container-fluid p-4">
    <?= form_open('main/search_submit') ?>

    <div class="row">
        <div class="col-md-9 col-12">
            <div class="d-flex align-items-center">
                <label for="search" class="me-3"><strong>Pesquisar</strong></label>
                <input type="text" class="form-control form-control-sm w-50 me-3" id="search" name="search" placeholder="Pesquisar">
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass me-3"></i> Pesquisar</button>
            </div>
        </div>
        <div class="col-md-3 col-12 text-end">
            <a href="#" class="btn btn-primary"><i class="fa-solid fa-plus me-3"></i> Adicionar</a></a>
        </div>
    </div>
    
    



    <?= form_close() ?>
</nav>


<?= $this->endSection() ?>