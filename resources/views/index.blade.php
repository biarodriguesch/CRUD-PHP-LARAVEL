@extends('layout.layout')
 @section('content')
 <div class="container mt-5">
     <div>
         <a type="button" class="btn btn-success" href="{{ route('cadastro.create') }}">Cadastrar novo</a>
     </div>
     <div class="container mt-5 p-5 border rounded">
         <div class="container">
             @if ($message = Session::get('success'))
                 <div class="alert alert-success">
                     <p>{{ $message }}</p>
                 </div>
             @endif
         </div>
         <div class="container">
             @if ($message = Session::get('danger'))
                 <div class="alert alert-danger">
                     <p>{{ $message }}</p>
                 </div>
             @endif
         </div>

         @include('components.table')
         @include('components.modal')
     </div>
 </div>
 @endsection
