@extends('backend.master')


    
@endpush

@section('content')
<main class="page-content">

    {{-- Success Message --}}
   @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

    {{-- Validation Errors --}}
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Please fix the following errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Breadcrumb -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">eCommerce</div>

            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:;">
                                <i class="bx bx-home-alt"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Add Product
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button"
                        class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                        <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <div class="row">

            <!-- Left Column -->
            <div class="col-12 col-lg-8">

                <div class="card">
                    <div class="card-body">

                        <!-- Product Name -->
                        <div class="mb-4">
                            <h5 class="mb-3">Product Title</h5>
                            <input type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}"
                                placeholder="Write title here...">

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <h5 class="mb-3">Product Description</h5>
                            <textarea
                                class="form-control @error('description') is-invalid @enderror"
                                name="description"
                                cols="4"
                                rows="6"
                                placeholder="Write a description here...">{{ old('description') }}</textarea>

                            @error('description')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Price -->
                        <div class="mb-4">
                            <h5 class="mb-3">Product Price</h5>
                            <input type="text"
                                name="price"
                                class="form-control @error('price') is-invalid @enderror"
                                value="{{ old('price') }}"
                                placeholder="Price">

                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <h5 class="mb-3">Product Status</h5>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input"
                                    type="radio"
                                    name="status"
                                    id="in_stock"
                                    value="In-Stock"
                                    {{ old('status') == 'In-Stock' ? 'checked' : '' }}>

                                <label class="form-check-label" for="in_stock">
                                    In Stock
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input"
                                    type="radio"
                                    name="status"
                                    id="out_stock"
                                    value="Out Of Stock"
                                    {{ old('status') == 'Out Of Stock' ? 'checked' : '' }}>

                                <label class="form-check-label" for="out_stock">
                                    Out Of Stock
                                </label>
                            </div>

                            @error('status')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Stock -->
                        <div class="mb-4">
                            <h5 class="mb-3">Stock Quantity</h5>

                            <input type="number"
                                name="stock"
                                class="form-control @error('stock') is-invalid @enderror"
                                value="{{ old('stock') }}"
                                placeholder="Stock Quantity">

                            @error('stock')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="mb-4">
                            <h5 class="mb-3">Display Image</h5>

                            <input
                                id="fancy-file-upload"
                                type="file"
                                name="image"
                                class="form-control @error('image') is-invalid @enderror"
                                accept=".jpg,.jpeg,.png,.webp">

                            @error('image')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>

            </div>

            <!-- Right Column -->
            <div class="col-12 col-lg-4">

                <!-- Publish -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-primary px-4">
                                Publish
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Category -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Organize</h5>

                        <div class="row g-3">
                            <div class="col-12">

                                <label for="AddCategory" class="form-label fw-bold">
                                    Category
                                </label>

                                <select
                                    class="form-select @error('category') is-invalid @enderror"
                                    id="AddCategory"
                                    name="category">

                                    <option value="">Select Category</option>

                                    <option value="Topwear"
                                        {{ old('category') == 'Topwear' ? 'selected' : '' }}>
                                        Topwear
                                    </option>

                                    <option value="Bottomwear"
                                        {{ old('category') == 'Bottomwear' ? 'selected' : '' }}>
                                        Bottomwear
                                    </option>

                                    <option value="Casual Tshirt"
                                        {{ old('category') == 'Casual Tshirt' ? 'selected' : '' }}>
                                        Casual Tshirt
                                    </option>

                                    <option value="Electronic"
                                        {{ old('category') == 'Electronic' ? 'selected' : '' }}>
                                        Electronic
                                    </option>
                                </select>

                                @error('category')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </form>

</main>
@endsection