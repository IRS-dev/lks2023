@extends('layouts.admin')
@section('mainContent')
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>user list</h3>
                                <a href="/dashboard/user/create" class="btn btn-primary mb-3">Create User</a>
                                @if(Session::has('success'))
                                <div class="alert alert-success alert-dismissible show fade col-8">
                                    {{ Session::get('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                                
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/dashboard/user">User</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            
                            <div class="card-body">
                                

                                {{-- @if ($users = null)
                                <img src="../../admin/dist/assets/images/ddd.png" alt="..." class="img-thumbnail">
                                @endif --}}
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->role}}</td>
                                            <td>
                                                <a href="/dashboard/user/{{$user->id}}" class="btn btn-secondary"><i class="bi bi-eye-fill"></i></a>
                                               <a href="/dashboard/user/{{$user->id}}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                               
                                               <form action="/dashboard/user/{{$user->id}}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                               <button type ="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
    
                    </section>
                </div>


    @endsection
    @section('script')
    <script src="{{asset('admin/dist/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    @endsection

