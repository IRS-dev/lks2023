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
                                            <th>Quiz Url</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($quizlist as $quiz)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$quiz->quizTitle}}</td>
                                            <td > 
                                                <a href="http://localhost:8000/quiz/{{$quiz->code}} ">http://localhost:8000/quiz/{{$quiz->code}} </a>
                                            </td>
                                            <td class="justify-content-center">
                                                <a href="/quiz/{{$quiz->code}}" class="btn btn-secondary py-2 mx-2"><i class="bi bi-eye-fill"></i></a>
                                               <a href="/dashboard/quiz/{{$quiz->code}}/edit" class="btn btn-primary py-2 mx-2"><i class="bi bi-pencil-square"></i></a>
                                               <form action="/dashboard/quiz/{{$quiz->code}}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                               <button type ="submit" class="btn btn-danger py-2 mx-2"><i class="bi bi-trash-fill"></i></button>
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


        function copy {
            var copyText = document.getElementById("code");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
         navigator.clipboard.writeText(copyText.value);
         alert("Copied the text: " + copyText.value);
        }


    </script>
    @endsection

