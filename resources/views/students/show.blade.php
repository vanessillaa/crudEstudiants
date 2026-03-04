    @extends('layouts.master')
        @section('content')
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow border-0">
                            <div class="card-body text-center">
                                {{-- Nom --}}
                                <div class="mb-4">
                                    <i class="bi bi-person-circle display-1 text-primary"></i>
                                </div>
                                <h2 class="fw-bold mb-3">{{ $student->name }}</h2>

                                <div class="row text-start mt-4">
                                    {{-- Email --}}
                                    <div class="col-md-6 mb-3">
                                        <div class="p-3 bg-light rounded">
                                            <small class="text-muted d-block">Email</small>
                                            <span class="fs-5">{{ $student->email }}</span>
                                        </div>
                                    </div>
                                    {{-- Adreça --}}
                                    <div class="col-md-6 mb-3">
                                        <div class="p-3 bg-light rounded">
                                            <small class="text-muted d-block">Adreça</small>
                                            <span class="fs-5">{{ $student->address }}</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Links --}}
                                <div class="d-flex justify-content-between mt-4">
                                    <a href="{{ route('students.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Tornar</a>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Editar</a>
                                    <button type="button"
                                        class="btn btn-danger"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{ $student->id }}">
                                            <i class="bi bi-trash"></i> Eliminar
                                    </button>
                                </div>
                                @include('partials.modalDelete', ['student' => $student])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection