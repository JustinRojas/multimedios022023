    <div class="mb-3" <?php echo isset($this->datos->id)? "" :"hidden";?>>
      <label for="" class="form-label">Id</label>
      <input type="text" 
        class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" 
        value="<?php echo isset($this->datos->id)? $this->datos->id :"";?>">
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input type="text" required
        class="form-control" name="name" id="name" aria-describedby="helpId" placeholder=""
        value="<?php echo isset($this->datos->name)? $this->datos->name :"";?>">
      <small id="helpId" class="form-text text-muted">Nombre Curso</small>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="text" required
          class="form-control" name="email" id="email" aria-describedby="helpId" placeholder=""
          value="<?php echo isset($this->datos->email)? $this->datos->email :"";?>">
        <small id="helpId" class="form-text text-muted">Tiempo del Curso</small>
      </div>
      
    <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input type="text" required
          class="form-control" name="password" id="password" aria-describedby="helpId" placeholder=""
          value="<?php echo isset($this->datos->password)? $this->datos->password :"";?>">
        <small id="helpId" class="form-text text-muted">Descripcion Curso</small>
      </div>
      
      <div class="mb-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
      </div>