@extends('layouts.app')

    @section('content')

    <div class="bg-light p-5 rounded">

        <div style="display: inline">
            <h2 class="text-left mb-2">Ediçao do Contato: </h2>
        </div>
        <a href="{{ route('contatos.index') }}" class="btn btn-primary btn-sm mb-3"> <i class="fa fa-arrow-left"> </i> &nbsp; Home </a>
        <br>

        <form action="{{ route('contatos.update', $contatos->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" name="nome" placeholder="Nome" class="form-control" id="nome" aria-describedby="nomelHelp" value="{{ $contatos->nome }}">

              @error("nome")
                <span class="text-danger"> {{ $message }}</span>
              @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email" aria-describedby="emaillHelp" value="{{ $contatos->email }}">

                @error("email")
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              <br>

              <div class="mb-3">
                <label for="telefone_celInputTelefone_cel" class="form-label">Telefone_cel</label>
                <input type="text" name="telefone_cel" placeholder="Telefone_cel" class="form-control" id="telefone_cel" aria-describedby="telefone_cellHelp" value="{{ $contatos->telefone_cel }}">

                @error("telefone_cel")
                  <span class="text-danger"> {{ $message }}</span>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary"><i class="fa fa-save"> </i> &nbsp;  Salvar</button>

            </div>


          </form>
    </div>

    @endsection
