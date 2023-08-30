@extends('layouts.admin')
@section('mainContent')

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Update User</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/dashboard/user">User</a></li>
                                        <li class="breadcrumb-item"><a href="/dashboard/user/create">Edit</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section id="basic-vertical-layouts">
                        <div class="row match-height">
                            <div class="col-md-8 col-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form class="form form-vertical" method="POST" action="/dashboard/user/{{$user->id}}">
                                                @csrf
                                                @method('PATCH')
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group has-icon-left">
                                                                <label for="first-name-icon">Username</label>
                                                                <div class="position-relative">
                                                                    <input type="text" class="form-control"
                                                                        
                                                                        id="first-name-icon" name="name" value="{{old('name',$user->name)}}">
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-person-fill"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
    
                                                            <div class="form-group has-icon-left">
                                                                <label for="email-id-icon">Email</label>
                                                                <div class="position-relative">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Email" id="email-id-icon" name="email" value="{{old('email',$user->email)}}">
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-envelope-fill"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <fieldset class="form-group">
                                                                <select class="form-select" id="basicSelect" name="role">
                                                                    <option value="user">User</option>
                                                                    <option value="admin">Admin</option>
                                                                </select>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="submit"
                                                                class="btn btn-primary me-1 mb-1">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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

