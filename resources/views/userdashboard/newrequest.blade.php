<base href="/public">

@extends('layouts.userdashboard')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 col-md-12 order-1">
            <div class="row">
                <div class="col-md-12">
                    <h4>
                      New Loan Request
                    </h4>
                    <div class="card mb-4">

                        <hr class="my-0" />
                        <div class="card-body mt-4 bg-white p-4">
                            <form id="formPersonalReference" action="{{ route('userdashboard.submit_newrequest') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                                <div class="row">
                                  <div class="mb-3 col-md-8">
                                    <label for="referenceName" class="form-label">Loan Amount</label>
                                    <input type="text" class="form-control" id="referenceName" value="" name="lamount"/>
                                    <span class="text-danger">@error('lamount')
                                        {{ $message }}
                                    @enderror</span>
                                  </div>
                                  <div class="mb-3 col-md-8">
                                    <label for="referenceName" class="form-label">Loan Type</label>
                                    {{-- <input type="text" class="form-control" id="referenceName" value="" name="title"/> --}}
                                    <select name="ltype" class="form-control" id="">
                                        <option value="">Select Loan type</option>
                                        <option value="Mortage Loan">Mortage Loan</option>
                                        <option value="Student Loan">Student Loan</option>
                                        <option value="Business Loan">Business Loan</option>
                                        <option value="Auto Loan">Auto Loan</option>
                                        <option value="Personal Loan">Personal Loan</option>
                                    </select>
                                    <span class="text-danger">@error('ltype')
                                        {{ $message }}
                                    @enderror</span>
                                  </div>

                                  <div class="mb-3 col-md-8">
                                    <label for="referenceName" class="form-label">Loan Plan</label>
                                    <select name="lplan" class="form-control" id="">
                                        <option value="">Select Loan Plan</option>
                                        <option value="3 Month">3 Month</option>
                                        <option value="6 Month">6 Month</option>
                                        <option value="9 Month">9 Month</option>
                                        <option value="12 Month">12 Month</option>
                                    </select>
                                    <span class="text-danger">@error('lplan')
                                        {{ $message }}
                                    @enderror</span>
                                  </div>
                                  <div class="mb-3 col-md-8">
                                    <label for="referenceName" class="form-label">Loan PurPose</label>
                                    <textarea name="lpurpose" id="" cols="5" class="form-control" rows="5"></textarea>
                                    <span class="text-danger">@error('lpurpose')
                                        {{ $message }}
                                    @enderror</span>
                                  </div>

                                </div>
                                <div class="mt-2">
                                  <button type="submit" class="btn btn-primary me-2">Submit Request</button>
                                </div>
                              </form>
                        </div>
                        <!-- /Account -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
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
