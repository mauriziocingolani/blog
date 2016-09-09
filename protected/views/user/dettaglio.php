<form action='/blog/user/update' method='post'>
    
  <div class="form-group">
    <label for="formGroupExampleInput">Username</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" value="<?php echo $utente->username ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" value="<?php echo $utente->email ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Profilo</label>
    <textarea class="form-control" id="formGroupExampleInput2">
        <?php echo $utente->profile ?>
    </textarea>
  </div>
    
    <button type="button" class="btn btn-primary">Salva</button>
   
</form>