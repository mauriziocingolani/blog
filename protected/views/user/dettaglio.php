<form action='/blog/user/dettaglio' method='post' >
    
  <div class="form-group">
    <label for="formGroupExampleInput">Username</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="User[username]" value="<?php echo $utente->username ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" name="User[email]" value="<?php echo $utente->email ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" name="User[password]" value="<?php echo $utente->password ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Profilo</label>
    <textarea class="form-control" name="User[profile]" id="formGroupExampleInput2">
        <?php echo $utente->profile ?>
    </textarea>
  </div>
    
    <button type="submit" class="btn btn-primary">Salva</button>
   
</form>
