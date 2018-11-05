<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Páginas</h1>
          </div>

          <form>

                <div class="form-group">
                        <label for="exampleInputEmail1">Título</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o título">
                        <small id="emailHelp" class="form-text text-muted">Título principal do seu site.</small>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlFile1">Imagem Principal</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                        <label for="exampleFormControlTextarea1">Texto Principal</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlFile1">Outras imagens</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" multiple="multiple">
                </div>
           
                <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-success']) ?>

          </form>


          </div>
        </div>