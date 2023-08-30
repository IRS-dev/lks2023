
    @extends('layouts.admin')
    @section('mainContent')
                    <div class="page-heading">
                        <div class="page-title">
                            <div class="row">
                                <div class="col-12 col-md-6 order-md-1 order-last">
                                    <h3>Quiz Result</h3>
                                </div>
                                <div class="col-12 col-md-6 order-md-2 order-first">
                                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="/dashboard/result">Result</a></li>
                                        </ol>
                                    </nav>
                                </div>
                                
                            </div>
                        </div>
                        <section class="section">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Responden</h6>
                                                <h6 class="font-extrabold mb-0">232</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">                          
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Chart Responden</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div id="chart-profile-visit"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Lorem ipsum, dolor sit amet consectetur adipisicing.</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-lg">
                                            <thead>
                                                <tr>
                                                    <th>Answer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="col-auto">
                                                        <p class=" mb-0">Congratulations on your graduation!</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-auto">
                                                        <p class=" mb-0">Wow amazing design! Can you make another
                                                            tutorial for
                                                            this design?</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart-visitors-profile"></div>
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
    
    