
@extends('layouts.app')

    @section('content')

    <div class="bg-light p-5 rounded">
        <h2 class="text-left mb-2">Contatos Create</h2>
        <br>
        <a href="{{ route('contatos.index') }}" class="btn btn-primary btn-sm mb-3"> <i class="fa fa-arrow-left"> </i> &nbsp; Home </a>

        @session("success")

            <div class="alert alert-success">  </div>

        @endsession

            <form action="{{ route('contatos.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                  <label for="exampleInputNome" class="form-label">Nome</label>
                  <input type="nome" name="nome" class="form-control" id="nome" aria-describedby="nomelHelp">

                  @error("nome")
                    <span class="text-danger"> {{ $message }}</span>
                  @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emaillHelp">

                    @error("email")
                      <span class="text-danger"> {{ $message }}</span>
                    @enderror
                  </div>
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  <br>

                  <div class="mb-3">
                    <label for="telefone_celInputNome" class="form-label">Telefone_cel</label>
                    <input type="telefone_cel" name="telefone_cel" class="form-control" id="telefone_cel" aria-describedby="telefone_cellHelp">

                    @error("telefone_cel")
                      <span class="text-danger"> {{ $message }}</span>
                    @enderror
                  </div>

                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"> </i> &nbsp; Submit</button>

                </div>


              </form>




    </div>

    @endsection

