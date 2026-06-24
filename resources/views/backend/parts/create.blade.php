@extends('backend.master')

@section('content')

<main class="page-content">

```
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

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
                    <li class="breadcrumb-item active">
                        Add Product
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">

        <div class="col-12 col-lg-8">

            <div class="card">
                <div class="card-body">

                    <div class="mb-4">
                        <h5 class="mb-3">Product Title</h5>

                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Write product title">
                    </div>

                    <div class="mb-4">
                        <h5 class="mb-3">Product Description</h5>

                        <textarea
                            name="description"
                            class="form-control"
                            rows="6"
                            placeholder="Write description"></textarea>
                    </div>

                    <div class="mb-4">
                        <h5 class="mb-3">Product Price</h5>

                        <input
                            type="number"
                            name="price"
                            class="form-control"
                            placeholder="Product Price">
                    </div>

                    <div class="mb-4">
                        <h5 class="mb-3">Product Status</h5>

                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="status"
                                id="stock1"
                                value="In Stock">

                            <label class="form-check-label" for="stock1">
                                In Stock
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="status"
                                id="stock2"
                                value="Out Of Stock">

                            <label class="form-check-label" for="stock2">
                                Out Of Stock
                            </label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class="mb-3">Product Image</h5>

                        <input
                            type="file"
                            name="image"
                            class="form-control">
                    </div>

                </div>
            </div>

        </div>

        <div class="col-12 col-lg-4">

            <div class="card">
                <div class="card-body">

                    <button
                        type="submit"
                        class="btn btn-primary w-100">
                        Publish Product
                    </button>

                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <h5 class="mb-3">Category</h5>

                    <select
                        class="form-select"
                        name="category">

                        <option value="Topwear">
                            Topwear
                        </option>

                        <option value="Bottomwear">
                            Bottomwear
                        </option>

                        <option value="Casual Tshirt">
                            Casual Tshirt
                        </option>

                        <option value="Electronic">
                            Electronic
                        </option>

                    </select>

                </div>
            </div>

        </div>

    </div>

</form>
```

</main>

@endsection
