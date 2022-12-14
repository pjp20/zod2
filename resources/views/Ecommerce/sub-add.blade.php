@extends('layouts.master')
@section('title')
    {{-- @lang('translation.Add_Product') --}}
    Sub Category
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Ecommerce
        @endslot
        @slot('title')
            Add Sub Category
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Information</h4>
                    <p class="card-title-desc">Fill all information below</p>
                </div>
                @include('layouts.message')
                @isset($success)
                    <div class="container mt-2">
                        <div class="alert  alert-success alert-dismissible fade show" role="alert">
                            <strong>success !</strong>
                            {{ $success }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endisset


                <div class="card-body">
                    <form action="{{ route('sub.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="productname">Sub-category Name</label>
                                    <input id="productname" value="{{ old('sub_name') }}" name="sub_name" type="text"
                                        class="form-control" placeholder="Sub Name">
                                </div>

                                <div class="mb-3">
                                    <label class="control-label">Category</label>
                                    <select class="form-control select2" name="category" value="{{ old('category') }}">
                                        {{-- <option>Select</option> --}}
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="productdesc">Sub Product Description</label>
                                    <textarea class="form-control" id="productdesc" name="description" value="{{ old('description') }}" rows="5"
                                        placeholder="Sub Product Description"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Sub
                                Category</button>
                            {{-- <button type="reset" class="btn btn-secondary waves-effect waves-light">Cancel</button> --}}
                        </div>
                    </form>
                </div>
            </div>

            {{-- <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Product Images</h4>
                </div>
                <div class="card-body">
                    <form action="/" method="post" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                            </div>
                            <h4>Drop files here or click to upload.</h4>
                        </div>
                    </form>
                </div>

            </div> --}}

            <!-- end card-->

            {{-- <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Meta Data</h4>
                    <p class="card-title-desc">Fill all information below</p>
                </div>
                <div class="card-body">

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="metatitle">Meta title</label>
                                    <input id="metatitle" name="productname" type="text" class="form-control"
                                        placeholder="Metatitle">
                                </div>
                                <div class="mb-3">
                                    <label for="metakeywords">Meta Keywords</label>
                                    <input id="metakeywords" name="manufacturername" type="text" class="form-control"
                                        placeholder="Meta Keywords">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="metadescription">Meta Description</label>
                                    <textarea class="form-control" id="metadescription" rows="5" placeholder="Meta Description"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                            <button type="submit" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                        </div>
                    </form>

                </div>
            </div> --}}
        </div>
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/ecommerce-select2.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
