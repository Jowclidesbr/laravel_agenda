@extends('layouts.app')

    @section('content')

    <div class="bg-light p-5 rounded">
        <h2 class="text-left mb-2">Contatos - Report Page</h2>
        <br>
        @session("success")

            <div class="alert alert-success"> {{ $value }} </div>

        @endsession

        <a href="{{ route('contatos.create') }}" class="btn btn-success btn-sm mb-3"> <i class="fa fa-plus"> </i> &nbsp; Criar Contato</a>
        <a href="{{ route('contatos.index') }}" class="btn btn-primary btn-sm mb-3"> <i class="fa fa-arrow-left"> </i> &nbsp; Home</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone_cel</th>

              </tr>
            </thead>
            <tbody>


                        <tr>
                            <th scope="row"> {{ $contatos->id }} </th>
                            <td>{{ $contatos->nome }} </td>
                            <td>{{ $contatos->email }} </td>
                            <td> {{ $contatos->telefone_cel }}  </td>

                        </tr>


            </tbody>
          </table>
    </div>

    @endsection
