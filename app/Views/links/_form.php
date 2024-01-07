<div class="row">
  <div class="form-group col-lg-12">
    <label for="assunto" class="form-label mt-2">Nome para exibição</label>
    <input type="text" class="form-control" id="nome_exibicao" name="nome_exibicao" value="<?php echo $link->nome_exibicao; ?>">
  </div>

  <div class="form-group col-lg-12">
    <label for="descricao" class="form-label mt-2">Link</label>
    <input type="text" class="form-control" id="link" name="link" value="<?php echo $link->link; ?>">
  </div>


  <div class="form-group col-lg-4">
    <label class="form-control-label mt-2">
      Categoria
    </label>

    <select name="categoria" class="form-control form-control-sm" id="categoria">
      <option value="Link´s úteis" <?php echo ($link->categoria == "Link´s úteis" ? 'selected' : ''); ?>>Link´s úteis</option>
      <option value="Link´s do governo" <?php echo ($link->categoria == "Link´s do governo" ? 'selected' : ''); ?>>Link´s do governo</option>
      <option value="CND" <?php echo ($link->categoria == "CND" ? 'selected' : ''); ?>>CND</option>
    </select>
  </div>
</div>