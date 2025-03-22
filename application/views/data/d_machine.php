<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Machine</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="dataTable_length">
                                        <label>Show 
                                            <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="dataTable_filter" class="dataTables_filter">
                                        <label>Search:
                                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="No: activate to sort column descending" style="width: 50px;" aria-sort="ascending">No</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Equipment: activate to sort column ascending" style="width: 150px;">Equipment</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Reg No.: activate to sort column ascending" style="width: 150px;">Register No.</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Model: activate to sort column ascending" style="width: 100px;">Model</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Cust: activate to sort column ascending" style="width: 150px;">Cust</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Remark: activate to sort column ascending" style="width: 200px;">Remark</th>
                                            </tr>

                                    
                                        <tbody>
                                            <!-- Example Data (replace with dynamic data from the database) -->
                                            <tr>
                                                <td>1</td>
                                                <td>Generator</td>
                                                <td>GN12345</td>
                                                <td>GX-300</td>
                                                <td>PT ABC</td>
                                                <td>Regular maintenance needed.</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Compressor</td>
                                                <td>CP67890</td>
                                                <td>CX-150</td>
                                                <td>PT XYZ</td>
                                                <td>Check oil level and filters.</td>
                                            </tr>
                                            <!-- More rows can go here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</body>
