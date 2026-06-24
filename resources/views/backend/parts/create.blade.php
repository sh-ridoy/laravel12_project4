@extends('backend.master');
@stack('styles')
@section('content')
    <!--start main content-->
    <main class="page-content">
        <!--breadcrumb-->
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">eCommerce</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button"
                            class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                            <a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                                link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <h5 class="mb-3">Product Title</h5>
                                <input type="text"name="name" class="form-control" placeholder="write title here....">
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Product Description</h5>
                                <textarea class="form-control" name="description" cols="4" rows="6"
                                    placeholder="write a description here.."></textarea>
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Product Price</h5>
                                <input type="text"name="price" class="form-control" placeholder="Price">
                            </div>
                           
                            <div class="mb-4"> 
                              <h5 class="mb-3 ">Product Status</h5>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">In Stock</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Out Of Stock</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Display images</h5>
                                <input id="fancy-file-upload" type="file" name="files"
                                    accept=".jpg, .png, image/jpeg, image/png" multiple>
                            </div>
                            <div class="mb-4">



                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">

                                <button type="button" class="btn btn-primary px-4">Publish</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3">Organize</h5>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="AddCategory" class="form-label fw-bold">Category</label>
                                    <select class="form-select" id="AddCategory">
                                        <option value="0">Topwear</option>
                                        <option value="1">Bottomwear</option>
                                        <option value="2">Casual Tshirt</option>
                                        <option value="3">Electronic</option>
                                    </select>
                                </div>

                            </div><!--end row-->
                        </div>
                    </div>



                </div><!--end row-->
        </form>

    </main>
@endsection