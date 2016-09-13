<div class="row">
<h1>Benvenuto <?php echo $utente->username ?></h1>
</div>

<div class="row m-t-2">
  <div class="col-md-2 m-b-2">
    <img class="img-fluid img-circle" src="<?php echo $utente->picture ?>"  class="img-circle">
  </div>
  <div class="col-md-10">
    <form action='/blog/user/<?php echo $utente->id ?>/<?php echo $utente->username ?>' method='post' >
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
        <textarea class="form-control" name="User[profile]" id="formGroupExampleInput2"><?php echo $utente->profile ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Salva</button>
    </form>
  </div>
</div>

<div class="row m-t-2">
  <?php echo CHtml::errorSummary($utente); ?>
</div>
