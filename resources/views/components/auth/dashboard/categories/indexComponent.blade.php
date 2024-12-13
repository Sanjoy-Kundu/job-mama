<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Wellcome To {{ Auth::user()->name }} Dashboard</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Category</li>
            </ol>
        </nav>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-6 col-md-6 mb-4 h-100">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h2>Category Corner</h2>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <button class="btn btn-success" data-toggle="modal" data-target="#categoryModel">ADD
                                    CATEGORY</button>
                                <button class="btn btn-primary">CATEGORY LISTS</button>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-6 col-md-6 mb-4 h-100">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <h2>Sub Category Corner</h2>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <button class="btn btn-success" data-toggle="modal" data-target="#subcategoryModel">ADD
                                    SUB CATEGORY</button>
                                <button class="btn btn-primary">SUB CATEGORY LISTS</button>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- category model start --}}
<div class="modal fade" id="categoryModel" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content w-100">
            <div class="modal-header">
                <h3 class="modal-title" id="categoryModalLabel">Categroy Create</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="category_name" name="name"
                            placeholder="Enter your category name">
                        <small id="category_name_error" class="form-text text-muted text-danger"></small>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="createCategory()">Create Categroy</button>
            </div>
        </div>
    </div>
</div>
{{-- category model end --}}



{{-- subcategory model start --}}
<div class="modal fade" id="subcategoryModel" tabindex="-1" aria-labelledby="subcategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content w-100">
            <div class="modal-header">
                <h3 class="modal-title" id="subcategoryModalLabel">Sub Categroy Create</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sub Category Name</label>
                        <input type="text" class="form-control" id="sub_category_name" name="name"
                            placeholder="Enter your sub category name">
                        <small id="category_name_error" class="form-text text-muted text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Choose Category</label>
                        <select class="form-control" id="categroy_select" name="job_categories_id">
                            <option selected >-- Choose Category--</option>
                        </select>
                        <small id="category_name_error" class="form-text text-muted text-danger"></small>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="subCategory()">Create Sub Categroy</button>
            </div>
        </div>
    </div>
</div>
{{-- subcategory model end --}}


<script>
    async function getCategoriesLists() {
        let categorySelectContainer = $("#categroy_select");
        try {
            let res = await axios.get("/dashboard/job/category/lists",headerToken()); 
            let categories = res.data.categoryLists;
            categories.forEach(element => {
                let option = `<option value="${element.id}">${element.name}</option>`;
                categorySelectContainer.append(option);
            });
        } catch (error) {
            console.error("Error message:", error);
        }
    }
</script>
