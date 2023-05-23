@extends('layouts.admin')
@section('mainContent')
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Quiz list</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-body">

                                {{-- @if ($quizlist = null)
                                <img src="../../admin/dist/assets/images/ddd.png" alt="..." class="img-thumbnail">
                                @endif --}}
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Quiz Name</th>
                                            <th>Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($quizlist as $quiz)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$quiz->quizTitle}}</td>
                                            <td>
                                               <a href="/dashboard/result/{{$quiz->code}}" class="btn btn-secondary"><i class="bi bi-eye-fill"></i></a>
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
    <script src="../../admin/dist/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    @endsection

