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
                    <h4>Applicants  Repayment Status</h4>
                    <a href="" class="btn btn-primary">
                      <i class="bx bx-plus-circle"></i> New Loan
                    </a>
                  </div>
                <div class="table-responsive">

                  <table class="table table-bordered table-striped datatable" id="data-table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Reference Number</th>
                        <th>Loan Type</th>
                        <th>Loan Plan</th>
                        {{-- <th>Payment details</th> --}}
                        <th> Status</th>
                        <th>Date Approved</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

             @foreach ($repayment as $repayments)

                      <tr>
                        <td>
                            {{ Auth::user()->name }} {{ Auth::user()->lastname }}
                        </td>
                        <td>
                            {{ Auth::user()->email }}
                        </td>
                        <td>{{ $repayments->refnumber }}</td>
                        <td>{{ $repayments->ltype }}</td>
                        <td>{{ $repayments->lplan }}</td>
                        <td>Not approved</td>
                        <td>{{ \Carbon\Carbon::parse($repayments->date)->format('j F Y') }}</td>
                        <td>
                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                            <div class="row" style="margin-bottom:40px;">
                                <div class="col-md-8 col-md-offset-2">
                                    <input type="hidden" name="email" value="otemuyiwa@gmail.com"> {{-- required --}}
                                    <input type="hidden" name="orderID" value="345">
                                    <input type="hidden" name="amount" value="80000"> {{-- required in kobo --}}
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="currency" value="NGN">
                                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                    {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                    <p>
                                        <button class="btn btn-success btn-lg btn-block btn-sm" type="submit" value="Pay Now!">
                                            <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </td>
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
