<?php include("../backend/resources/submitter/category_submitter.php") ?>
<div class="content-wrapper">
      <div class="page-header">
            <h3 class="page-title"> Category </h3>
            <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                  </ol>
            </nav>
      </div>
      <div class="row">
            <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                        <div class="card-body">
                              <h4 class="card-title">Add Category</h4>
                              <form class="forms-sample">
                                    <div class="form-group" action="category_add.php" method="POST" enctype="multipart/form-data">
                                          <label>Category Code <span class="text-danger">*</span></label>
                                          <input type="text" class="form-control" id="category-code" name="category_code" placeholder="Category Code">
                                    </div>
                                    <div class="form-group">
                                          <label>Category Name <span class="text-danger">*</span></label>
                                          <input type="text" class="form-control" id="category-name" name="category_name" placeholder="Category Name">
                                    </div>
                                    <div class="form-group">
                                          <label>Sequence</label>
                                          <input type="text" class="form-control" id="sequence" name="sequence" placeholder="Sequence">
                                    </div>
                                    <div class="form-group">
                                          <label class="form-label">Status <span class="text-danger">*</span></label>
                                          <select id="main_select_services" class="select-club-services" name="status">
                                                <option value=".active" selected>Active</option>
                                                <option value=".inactive">Inactive</option>
                                          </select>
                                    </div>

                                    <div class="form-group">
                                          <label>File upload</label>
                                          <input type="file" name="img" class="file-upload-default">
                                          <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                <span class="input-group-append">
                                                      <button class="file-upload-browse btn btn-gradient-primary py-3" type="button">Upload</button>
                                                </span>
                                          </div>
                                    </div>
                                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</div>