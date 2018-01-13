<h2>Contenido de Contacto</h2>
<form id="form-contact" class="ContactForm">
  <legend>Envíanos tus comentarios</legend>
  <input type="text" name="name" placeholder="Escribe tu nombre" title="tu nombre" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
  <input type="email" name="email" placeholder="Escribe tu email" title="tu email" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$" required>
  <input type="text" name="subject" title="asunto a tratar" placeholder="Asunto a tratar" required>
  <textarea class="materialize-textarea" name="comments" title="tus comentarios" placeholder="Escribe tus comentarios" cols="50" rows="5" required></textarea>
  <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
  <input type="hidden" name="action" value="contact">
  <div id="message" class="input-field col s12"></div>
</form>
