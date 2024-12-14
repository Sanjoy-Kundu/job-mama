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


        <div class="row">
            {{-- sub category strat --}}
            <div class="col-xl-6 col-md-6 mb-4 h-100">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    <h2>Category Lists</h2>
                                </div>
                                <section>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Sub Category</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary">EDIT</button>
                                                        <button type="button" class="btn btn-danger">DELETE</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- sub categroy end --}}

            {{-- sub categorystart --}}
            <div class="col-xl-6 col-md-6 mb-4 h-100">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    <h2>Sub Category Lists</h2>
                                </div>
                                <section>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Sub Category</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary">EDIT</button>
                                                        <button type="button" class="btn btn-danger">DELETE</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- sub category end --}}
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
                    <div class="alert alert-success d-none" role="alert" id="category_alert_section">
                        <span id="category_success_message"></span>
                    </div>
                    <section>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="category_name" name="name"
                                placeholder="Enter your category name">
                            <small id="category_name_error" class="form-text text-danger"></small>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"
                        id="category_modal_close">Close</button>
                    <button type="button" class="btn btn-success" onclick="createCategory()">Create Categroy</button>
                </div>
            </div>
        </div>
    </div>
   {{-- category model end --}}



   {{-- subcategory model start --}}
    <div class="modal fade" id="subcategoryModel" tabindex="-1" aria-labelledby="subcategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content w-100">
                <div class="modal-header">
                    <h3 class="modal-title" id="subcategoryModalLabel">Sub Categroy Create</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success d-none" role="alert" id="sub_category_alert_section">
                        <span id="sub_category_success_message"></span>
                    </div>
                    <section>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sub Category Name</label>
                            <input type="text" class="form-control" id="sub_category_name" name="name"
                                placeholder="Enter your sub category name">
                            <small id="sub_category_name_error" class="form-text text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Choose Category</label>
                            <select class="form-control" id="categroy_select" name="job_categories_id">
                                <option selected>-- Choose Category--</option>
                            </select>
                            <small id="job_categories_id_error" class="form-text text-danger"></small>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="sub_category_modal_close">Close</button>
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
                let res = await axios.get("/dashboard/job/category/lists", headerToken());
                let categories = res.data.categoryLists;
                categories.forEach(element => {
                    let option = `<option value="${element.id}">${element.name}</option>`;
                    categorySelectContainer.append(option);
                });
            } catch (error) {
                console.error("Error message:", error);
            }
        }

        async function createCategory() {
            let category_name = document.getElementById("category_name").value;
            document.getElementById("category_name_error").innerText = ""

            let isError = false;
            if (!category_name) {
                document.getElementById("category_name_error").innerText = "Categroy Name is requierd";
                isError = true;
            }
            if (isError) return;

            let data = {
                name: category_name
            }
            try {
                let res = await axios.post("/dashboard/job/category", data, headerToken());
                if (res.data.status === "success") {
                    document.getElementById("category_success_message").innerText = res.data.message;


                    //refresh subCategoryLists
                    await getCategoriesLists();
                    let categoryAlertSection = document.getElementById("category_alert_section")
                    categoryAlertSection.classList.remove("d-none");

                    setTimeout(() => {
                        categoryAlertSection.classList.add("d-none");
                        document.getElementById("category_modal_close").click();
                    }, 1000);

                    document.getElementById("category_name").value = ""

                } else {
                    console.log(res.data)
                }
            } catch (error) {
                //backend error show
                if (error.response && error.response.status === 422) {
                    let errors = error.response.data.errors;

                    if (errors.name) {
                        document.getElementById("category_name_error").innerText = errors.name[0];
                    }
                } else {
                    // Handle any other errors
                    console.error("Error:", error);
                    document.getElementById("category_name_error").innerText = "Something went wrong!";
                }
            }
        }


        async function subCategory(){
            let sub_category_name = document.getElementById("sub_category_name").value;
            let categroy_select_id = document.getElementById("categroy_select").value;
            document.getElementById("sub_category_name_error").innerText = "";
            document.getElementById("job_categories_id_error").innerText = "";

            let isError = false;
            if(!sub_category_name){
                document.getElementById("sub_category_name_error").innerText = "Name field is requried";
                isError = true;
            }

            if(!categroy_select || categroy_select_id === "-- Choose Category--"){
                document.getElementById("job_categories_id_error").innerText = "Please Choose Category";
                isError = true; 
            }

            if(isError)return 

            let data = {
                name:sub_category_name,
                job_categories_id:categroy_select_id
            }

            try {
                let res = await axios.post("/dashboard/job/sub/category", data, headerToken());
                if (res.data.status === "success") {
                    document.getElementById("sub_category_success_message").innerText = res.data.message;


                    //refresh subCategoryLists
                    await getCategoriesLists();
                    let subCategoryAlertSection = document.getElementById("sub_category_alert_section")
                    subCategoryAlertSection.classList.remove("d-none");

                    setTimeout(() => {
                        subCategoryAlertSection.classList.add("d-none");
                        document.getElementById("sub_category_modal_close").click();
                    }, 1000);

                    document.getElementById("sub_category_name").value = ""
                    document.getElementById("categroy_select").value = ""

                } else {
                    document.getElementById("job_categories_id_error").innerText = res.data.message
                }
            } catch (error) {
                //backend error show
                if (error.response && error.response.status === 422) {
                    let errors = error.response.data.errors;

                    if (errors.name) {
                        document.getElementById("sub_category_name_error").innerText = errors.name[0];
                    }
                } else {
                    // Handle any other errors
                    console.error("Error:", error);
                    document.getElementById("category_name_error").innerText = "Something went wrong!";
                }
            }



        }
    </script>
