<base href="/public">

@extends('layouts.userdashboard')

@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <div class="col-lg-12 col-md-12 order-1">
          <div class="row">
              <div class="container mt-4 bg-white p-4 rounded shadow">
                  <div class="d-flex justify-content-between mb-3">
                    <h4>Applicants  Loan Status</h4>
                    <a href="" class="btn btn-primary">
                      <i class="bx bx-plus-circle"></i> New Loan
                    </a>
                  </div>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped datatable" id="data-table">
                    <thead>
                      <tr>
                        <th>Amount</th>
                        <th>Reference</th>
                        <th>Status</th>
                        <th>Loan Type</th>
                        <th>Date Registered</th>
                      </tr>
                    </thead>
                    <tbody>

             @foreach ($loanstatus as $loanstatuss)

                      <tr>
                        <td>#{{ $loanstatuss->lamount }}</td>
                        <td>{{ $loanstatuss->refnumber }}</td>
                    <td>
                        @if($loanstatuss->payment_status == 'Not Approved')

                            <p class="btn btn-success btn-sm cursor-default">  Not Approved</p>


                        @else
                            <p class="btn btn-success btn-sm">Approved</p>


                        @endif

                    </td>



                        <td>{{ $loanstatuss->ltype }}</td>
                        <td>{{ \Carbon\Carbon::parse($loanstatuss->date)->format('j F Y') }}</td>
                      </tr>
              @endforeach


                      <!-- Add more rows for each loan applicant -->
                    </tbody>
                  </table>
                </div>
                <nav aria-label="Table Pagination" class="mt-2">
                  {{-- <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul> --}}
                  <button onclick="exportTableToCSV()" class="float-end btn btn-primary">Export to CSV</button>
                </nav>
            </div>

        <!--/ Transactions -->
      </div>
    </div>
    </div>
        <!-- Footer -->


        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
</div>

@endsection


@section('scripts')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    flatpickr('#published_at', {
        enableTime:true
    })

        // In your Javascript (external .js resource or <script> tag)
    // $(document).ready(function() {
    //     $('.tags-selector').select2();
    // })


    $(document).ready(function() {
         $('#content').summernote();

});
</script>

@endsection


@section('css')

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.css"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection
