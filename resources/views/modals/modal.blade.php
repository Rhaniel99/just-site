<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">Cadastrar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="ajax-form" action="{{route('postals.store')}}">
                @csrf
              <div class="alert alert-danger print-error-msg" style="display:none">
                  <ul></ul>
              </div>
              <div class="mb-3">
                  <label for="titleID" class="form-label">Titulo: </label>
                  <input type="text" id="titleID" name="titulo" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label for="bodyID" class="form-label">Assunto:</label>
                  <textarea name="conteudo" class="form-control" id="bodyID" required></textarea>
              </div>
              <div class="mb-3 text-center">
                  <button class="btn btn-success btn-submit">Enviar</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editModal{{ $postals->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="ajax-form2">
              @csrf
              <div class="alert alert-danger print-error-msg" style="display:none">
                  <ul></ul>
              </div>
              <div class="mb-3">
                <h4>Titulo: </h4>
                <br>
                <input type="text" name="" id="" value="{{$postals->titulo}}" class="form-control">
             </div>
              <div class="mb-3">
                <h4>Conteudo: </h4>
                <br>
                <input type="text" name="" id="" value="{{ $postals->conteudo }}" class="form-control">
              </div>
              <div class="mb-3 text-center">
                <button class="btn btn-success btn-submit">Atualizar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="showModal{{ $postals->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Informações do item #{{$postals -> id}} </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="ajax-form2">
              @csrf
              <div class="alert alert-danger print-error-msg" style="display:none">
                  <ul></ul>
              </div>
              <div class="mb-3">
                <h4>Titulo</h4>
                <br>
                <label for="titleID" class="form-label">{{ $postals->titulo }}</label>
             </div>
              <div class="mb-3">
                <h4>Conteudo</h4>
                <br>
                <label for="bodyID" class="form-label">{{ $postals->conteudo }}</label>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
