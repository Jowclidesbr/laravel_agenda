@extends('layouts.app')

    @section('content')

    <div class="bg-light p-5 rounded">
        <h2 class="text-left mb-2">Contatos App Index</h2>
        <br>
        @session("success")

            <div class="alert alert-success"> {{ $value }} </div>

        @endsession

        @session("delete")

            <div class="alert alert-success"> {{ $value }} </div>

        @endsession

        <a href="{{ route('contatos.create') }}" class="btn btn-success btn-sm mb-3"> <i class="fa fa-plus"> </i> &nbsp; Criar Contato </a>

        <a href="{{ route('home') }}" class="btn btn-success btn-sm mb-3"> <i class="fa fa-plus"> </i> &nbsp; Home</a>


        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone_cel</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                    @foreach($contatos as $contatos)

                        <tr>
                            <th scope="row"> {{ $contatos->id }} </th>
                            <td>{{ $contatos->nome }} </td>
                            <td>{{ $contatos->email }} </td>
                            <td> {{ $contatos->telefone_cel }}  </td>
                            <td>


                                <form action="{{ route('contatos.destroy', $contatos->id) }}" method="POST">
                                    <a href="{{ route('contatos.show', $contatos->id) }}" class="btn btn-primary btn-sm"> <i class="fa fa-eye"> </i> &nbsp;View </a>
                                    <a href="{{ route('contatos.edit', $contatos->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"> </i> &nbsp; Edit </a>
                                    @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"> </i> &nbsp; Delete</button>

                                </form>




                            </td>
                        </tr>

                    @endforeach
            </tbody>
          </table>
    </div>
@endsection

