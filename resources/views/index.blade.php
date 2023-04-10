@extends('templates.template')
@section('content')
    <h1 class="text-center">I Just</h1>
    <hr>
    <div class="col-6 m-auto">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Conteudo</th>
                    <th scope="col">-</th>
                    <th schope="col">
                        <button type="button" class="btn m-auto btn-success float-end" data-bs-toggle="modal"
                            data-bs-target="#postModal">
                            Cadastrar
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postal as $postals)
                    <tr>
                        <th scope="row"> {{ $postals->id }}</th>
                        <td>{{ $postals->titulo }}</td>
                        <td> {{ $postals->conteudo }}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#showModal{{$postals->id}}">
                                Visualizar
                            </button>

                                <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editModal{{$postals->id}}">Editar</button>

                            <a href="{{url("postals/$postals->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>


                        </td>
                    </tr>
                    @include('modals.modal')
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        /*------------------------------------------

                --------------------------------------------

                Form Submit Event

                --------------------------------------------

                --------------------------------------------*/

        $('#ajax-form').submit(function(e) {
            e.preventDefault();
            var url = $(this).attr("action");
            let formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    alert('Cadastrado com sucesso.');
                    location.reload();
                },
                error: function(response) {
                    $('#ajax-form').find(".print-error-msg").find("ul").html('');
                    $('#ajax-form').find(".print-error-msg").css('display', 'block');
                    $.each(response.responseJSON.errors, function(key, value) {
                        $('#ajax-form').find(".print-error-msg").find("ul").append('<li>' +
                            value + '</li>');
                    });
                }
            });
        });
    </script>
@endsection
