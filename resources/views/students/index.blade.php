@extends('layouts.master')
    @section('content')
        <div class="container mt-5">
            <div class="card shadow border-0">

                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0"><i class="bi bi-people-fill me-2"></i>Gestió d'Estudiants</h4>
                    <a href="{{ route('students.create') }}" class="btn btn-light btn-sm"><i class="bi bi-plus-circle"></i> Nou</a>
                </div>
                
                {{-- Taula --}}
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr class="text-center">
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Adreça</th>
                                    <th>Accions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td class="fw-semibold">{{ $student->name }}</td>
                                    <td><i class="bi bi-envelope-fill text-muted me-2"></i>{{ $student->email }}</td>
                                    <td><i class="bi bi-geo-alt-fill text-muted me-2"></i>{{ $student->address }}</td>
                                    {{-- Links --}}
                                    <td class="text-center">
                                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-outline-primary btn-sm me-1">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-outline-warning btn-sm me-1">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <button type="button"
                                            class="btn btn-outline-danger btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalDelete{{ $student->id }}">
                                                <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @include('partials.modalDelete', ['student' => $student])
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection