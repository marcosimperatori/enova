<div class="row">
  <div class="form-group col-lg-12">
    <label for="assunto" class="form-label mt-2">Nome para exibição</label>
    <input type="text" class="form-control" id="nome_exibicao" name="nome_exibicao" value="<?php echo $link->nome_exibicao; ?>">
  </div>

  <div class="form-group col-lg-12">
    <label for="descricao" class="form-label mt-2">Link</label>
    <textarea name="link" id="link" cols="30" rows="15" class="form-control"><?php echo $link->link ?></textarea>


  </div>
</div>