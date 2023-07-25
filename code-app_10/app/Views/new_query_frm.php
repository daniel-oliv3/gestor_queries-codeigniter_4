<?= $this->extend('layouts/main_layout')?>
<?= $this->section('content')?>


<section class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-10">
            
            <?= form_open('new_query_submit') ?>

            <h3 class="mb-3">Nova query</h3>

            <div class="mb-3">
                <label class="form-label">Nome da query</label>
                <input type="text" class="form-control form-control-sm" name="text_query_name" placeholder="Nome da query" autofocus required>
            </div>

            <div class="row mb-3">
                <div class="col-7">
                    <label class="form-label">Tags de pesquisa</label>
                    <input type="text" class="form-control form-control-sm" name="text_tags" placeholder="Tags de pesquisa">
                </div>    
                <div class="col-5">
                    <label class="form-label">Projeto</label>
                    <input list="list-projetos" name="text-projeto" class="form-control form-control-sm">

                    <datalist id="list-projetos">
                        <option value="HTML">
                        <option value="CSS">
                        <option value="JavaScript">
                        <option value="ReactJS">
                        <option value="CodeIgniter4">
                    </datalist>
                </div>
                <div class="mb-3">
                    <label class="form-label">Query</label>
                    <textarea class="form-control form-control-sm" id="text_query" name="text_query_description" rows="10" placeholder="Descrição da query">SELECT * FROM table</textarea>
                </div>

                <div class="mb-3 text-center">
                    <a href="<?= site_url('/') ?>" class="btn btn-primary btn-sm px-5">Cancelar</a>
                    <button type="submit" class="btn btn-secondary btn-sm px-5">Enviar</button>
                </div>

            </div>    

            

            <?= form_close() ?>

        </div>
    </div>
</section>



<?= $this->endSection()?>




















