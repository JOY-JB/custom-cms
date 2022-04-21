<div class="row">
    <div class="col-lg-8">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Product Information</h4>
                <form class="forms-sample">
                    <div class="form-group">
                      <label for="productName">Product Name</label>
                      <input type="text" class="form-control" id="productName" placeholder="Product Name">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="category">Category</label>
                                <select class="form-control form-control-sm category select2" id="category">
                                <option>fashion 1</option>
                                <option>fashion 2</option>
                                <option>fashion 3</option>
                                <option>fashion 4</option>
                              </select>
                            </div>      
                            <div class="col-6">
                                <label for="brand">Brand</label>
                                <select class="form-control select2" id="brand">
                                <option>brand 1</option>
                                <option>brand 2</option>
                                <option>brand 3</option>
                                <option>brand 4</option>
                              </select>
                            </div>      
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="unit">Unit</label>
                                <input type="text" class="form-control" id="unit" placeholder="Unit ( e.g kg. pc. etc )">
                            </div>
                            <div class="col-6">
                                <label for="orderQTY">Min. Order Quantity</label>
                                <input type="number" class="form-control" id="orderQTY" value=1 min=0 placeholder="Unit ( e.g kg. pc. etc )">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="barcode">Barcode</label>
                      <input type="text" class="form-control" id="barcode" placeholder="Enter product barcode">
                    </div>
                    <div class="form-group">
                      <label for="tags">Tags</label>
                      <input type="text" class="form-control" id="tags" placeholder="Write & hit enter">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" placeholder="Product Slug">
                    </div>
                  </form>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Product Images</h4>
                <form class="row">
                    <div class="form-group col-sm-6">
                          <label>Thumbnail</label>
                          <input type="file" name="thumbnail" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" placeholder="Upload Image" disabled>
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-sm btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                          <label>Gallery Image</label>
                          <input type="file" name="thumbnail" class="file-upload-default"  >
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info"  placeholder="Upload Image" disabled>
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-sm btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Product Price & Discount</h4>
                <form class="row">
                    <div class="form-group">
                        <label for="unitPrice">Unit Price</label>
                        <input type="number" class="form-control" id="unitPrice" value=0 min=0>
                    </div>

                    <div class="form-group col-sm-6">
                            <label>Special Discount Type</label>
                            <select class="form-control" id="stockVisibility">
                                <option>Flate</option>
                                <option>Percentage</option>
                            </select>  
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Special Discount</label>
                        <Input Type="number" class="form-control" placeholder="Discount"></Input>  
                    </div>
                    
                    <div class="form-group col-sm-6">
                            <label>Special Discount Period From</label>
                            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                            <span class="input-group-addon input-group-prepend border-right">
                                <span class="icon-calendar input-group-text calendar-icon"></span>
                            </span>
                            <input type="text" class="form-control">
                            </div>  
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Special Discount Period To</label>
                        <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                        <span class="input-group-addon input-group-prepend border-right">
                            <span class="icon-calendar input-group-text calendar-icon"></span>
                        </span>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        
        <div class="card mt-4">
            <div class="card-body">
                <div class="d-flex flex-row w-100 justify-content-between">
                    <h4 class="card-title d-inline">Product Stock</h4>
                    
                    <div class="d-inline">
                        <div class="form-check form-switch">
                            <input class="form-check-input fs-5" type="checkbox" role="switch">
                        </div>
                    </div>
                </div>

                <form class="row">
                    <div class="form-group col-sm-6">
                        <label for="sku">SKU</label>
                        <input type="text" class="form-control" id="sku" placeholder="SKU">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Current Stock</label>
                        <Input Type="number" class="form-control" placeholder="Current Stock" min=0></Input>  
                    </div>                    
                </form>
            </div>
        </div>
        
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Product Description</h4>

                <form>
                    <div class="form-group">
                        <label>Short Description</label>
                        <Input Type="text" class="form-control" ></Input>
                    </div>  

                    <div class="form-group">
                        <label>Long Description</label>
                        <textarea Type="text" class="tinymce" ></textarea>
                    </div>                    
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Shipping Fee</h4>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="shippingFeeType">Shipping Fee Type</label>
                            <select class="form-control" id="shippingFeeType">
                                <option>Flat Rate</option>
                                <option>Free Shipping</option>
                            </select>      
                        </div>
                        <div class="form-group">
                            <label for="shippingFee">Shipping Fee</label>
                            <Input Type="number" class="form-control" id="shippingFee" placeholder="Enter Shipping Fee"></Input>  
                        </div>

                        <div class="form-group row">
                        <div class="col-sm-10">
                            <label
                              for="isDependOnQuantity"
                              class="col-form-label"
                              >Is Depend On Quantity</label
                            >
                        </div>
                        <div class="col-sm-2">
                        <div class="form-check form-switch d-flex align-items-center">
                            <input class="form-check-input fs-5" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        </div>
                      </div>
                  </form>
                </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <h4 class="card-title">Minimum Stock Warning</h4>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="shippingFee">Stock</label>
                            <Input Type="number" class="form-control" id="shippingFee" placeholder="Enter min stock amount to notify"></Input>  
                        </div>
                  </form>
                </div> 
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h4 class="card-title">Stock Visibility</h4>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="stockVisibility">Stock Visibility</label>
                            <select class="form-control" id="stockVisibility">
                                <option>Hide Stock</option>
                                <option>Visible with quantity</option>
                            </select>      
                        </div>
                  </form>
                </div> 
            </div>
            
            
            <div class="card mt-4">
                <div class="card-body">
                    <h4 class="card-title">Estimated Shipping Days & COD</h4>
                    <form class="forms-sample">
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <label
                                class="col-form-label"
                                > <b class="d-block">Cash On Delivery</b> Collect cash after delivery</label
                                >
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check form-switch d-flex align-items-center">
                                    <input class="form-check-input fs-5" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <label
                                class="col-form-label"
                                > <b class="d-block">Digital</b> The product won't be shipped</label
                                >
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check form-switch d-flex align-items-center">
                                    <input class="form-check-input fs-5" type="checkbox" role="switch" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="shippingDays">Shipping Days</label>
                            <Input Type="number" class="form-control" id="shippingDays" value=0 min=0></Input>  
                        </div>
                  </form>
                </div> 
            </div>
    </div>

    <div class="form-group text-center mt-5">
        <button class="btn btn-light">Cancel</button>                 
    <button type="submit" class="btn btn-primary me-2">Submit</button>
    </div>
</div>