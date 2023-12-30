<div class="row">
  <div class="form-group col-lg-12">
    <label for="assunto" class="form-label mt-2">Assunto</label>
    <input type="text" class="form-control" id="assunto" name="assunto" value="<?php echo $noticia->assunto; ?>">
  </div>

  <div class="form-group col-lg-12">
    <label for="descricao" class="form-label mt-2">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="15" class="form-control"><?php echo $noticia->descricao; ?></textarea>
    <script>
      ClassicEditor
        .create(document.querySelector('#descricao'))
        .then(editor => {
          console.log(editor);
        })
        .catch(error => {
          console.error(error);
        });
    </script>

  </div>
</div>