@extends('layouts.admin')
@section('mainContent')
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>User Data</h3>
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
                                <h6>User name : {{$user->name}}</h6>
                                <h6>Email :<span>{{$user->email}}</span></h6>
                                <h6>Role : <span>{{$user->role}}</span></h6>
                            </div>
                        </div>
    
                    </section>
                </div>


    @endsection
    @section('script')
    <script src="../../admin/dist/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    @endsection

