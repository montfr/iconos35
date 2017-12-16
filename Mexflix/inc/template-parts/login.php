<article class="container">
  <div class="row">
    <form id="form-login" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input name="user" id="user" type="text" class="validate" required>
          <label for="user" data-error="wrong" data-success="right">User</label>
        </div>
        <div class="input-field col s12">
          <input name="pass" id="pass" type="password" class="validate" required>
          <label for="pass" data-error="wrong" data-success="right">Pass</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
          <i class="material-icons right">send</i>
        </button>
        <input type="hidden" name="action" value="login">
        <div id="message" class="input-field col s12"></div>
      </div>
    </form>
  </div>
</article>
