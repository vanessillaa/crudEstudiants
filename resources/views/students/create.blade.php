@extends('layouts.master')
    @section('content')
        <div class="row" style="margin-top:40px">
            <div class="offset-md-3 col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Afegir estudiant
                    </div>
                    <div class="card-body" style="padding:30px">
                        <form action="{{ route('students.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label"><i class="bi bi-person"></i> NOM</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"><i class="bi bi-envelope"></i> EMAIL</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label"><i class="bi bi-house-door"></i> ADREÇA</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection