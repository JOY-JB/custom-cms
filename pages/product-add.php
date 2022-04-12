    <div class="card">
    <form class="form-horizontal card-body">
    

    <h3 class="text-center mt-3 mb-5">PRODUCT ADD</h3>

    <div class="form-group row">
    <label class="col-sm-3 control-label" for="product_name">PRODUCT NAME</label>  
    <div class="col-sm-9">
    <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    </div>
    </div>


    <div class="row mt-3 mb-4">
        <div class="col-3">
            <div class="nav flex-column nav-pills border-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link text-start active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="true">General</button>
            <button class="nav-link text-start" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#inventory" type="button" role="tab" aria-controls="inventory" aria-selected="false">Inventory</button>
            <button class="nav-link text-start" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#shipping" type="button" role="tab" aria-controls="shipping" aria-selected="false">Shipping</button>
        </div>
    </div>
        <div class="col-9">
            <div class="tab-content w-100 py-3 border-top" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="form-group row m-0">
                <label class="col-sm-4 col-form-label" for="regular_price">REGULAR PRICE</label>  
                    <div class="col-sm-6 d-flex align-items-center">
                    <input id="regular_price" name="regular_price" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">
                    </div>
            </div>

                <div class="form-group row m-0">
                <label class="col-sm-4 col-form-label" for="sell_price">SELL PRICE</label>  
                <div class="col-sm-6 d-flex align-items-center">
                <input id="sell_price" name="sell_price" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">
                </div>
                </div>

                <div class="form-group row m-0">
                <label class="col-sm-4 col-form-label" for="tax_status">TAX STATUS</label>  
                <div class="col-sm-6 d-flex align-items-center">
                    <select class="form-control input-md">
                        <option selected>Open this select menu</option>
                        <option value="1">Taxable</option>
                        <option value="2">none</option>
                    </select>
                </div>
                </div>

                <div class="form-group row m-0">
                <label class="col-sm-4 col-form-label" for="tax_class">TAX CLASS</label>  
                <div class="col-sm-6 d-flex align-items-center">
                    <select class="form-control input-md">
                        <option selected>Open this select menu</option>
                        <option value="1">Standard</option>
                        <option value="2">Zero rate</option>
                    </select>
                </div>
                </div>
            </div>
            <div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                
                <div class="form-group row m-0">
                <label class="col-sm-4 col-form-label" for="product_name_fr">SKU</label>  
                <div class="col-sm-6 d-flex align-items-center">
                <input id="sku" name="sku" placeholder="SKU" class="form-control input-md" required="" type="text">
                </div>
                </div>

                <div class="form-group row m-0">
                <label class="col-sm-4 col-form-label" for="stock-status">STOCK STATUS</label>  
                <div class="col-sm-6 d-flex align-items-center">
                    <select class="form-control input-md">
                        <option selected>In stock</option>
                        <option value="1">Out of stock</option>
                        <option value="2">On backorder</option>
                    </select>
                </div>
                </div>
            </div>
            <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                
                <div class="form-group row m-0">
                <label class="col-sm-4 col-form-label" for="weight">WEIGHT (kg)</label>  
                    <div class="col-sm-6 d-flex align-items-center">
                    <input id="product_weight" name="weight" placeholder="WEIGHT" class="form-control input-md" required="" type="text">
                    </div>
                </div>
                
                <div class="form-group row m-0">
                <label class="col-sm-4 col-form-label" for="weight">DIMENSIONS (cm)</label>  
                    <div class="col-sm-2 d-flex align-items-center">
                    <input id="product_weight" name="weight" placeholder="Length" class="form-control input-md" required="" type="text">
                    </div>
                    <div class="col-sm-2 d-flex align-items-center">
                    <input id="product_weight" name="weight" placeholder="Width" class="form-control input-md" required="" type="text">
                    </div>
                    <div class="col-sm-2 d-flex align-items-center">
                    <input id="product_weight" name="weight" placeholder="Height" class="form-control input-md" required="" type="text">
                    </div>
                </div>

                <div class="form-group row m-0">
                <label class="col-sm-4 col-form-label" for="stock-status">SHIPPING CLASS</label>  
                <div class="col-sm-6 d-flex align-items-center">
                    <select class="form-control input-md">
                        <option selected>No Shipping class</option>
                        <option value="1">shipping class 1</option>
                    </select>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>


    <div class="form-group row">
    <label class="col-sm-3 control-label" for="product_categorie">PRODUCT CATEGORY</label>
    <div class="col-sm-9">
        <select id="product_categorie" name="product_categorie" class="form-control input-md">
            <option selected>No product catagory</option>
            <option value="1">Product catagory 1</option>
        </select>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-3 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
    <div class="col-sm-9">
    <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-3 control-label" for="product_description">PRODUCT DESCRIPTION</label>
    <div class="col-sm-9">    
    <textarea class="tinymce" id="product_description" name="product_description" rows="10"></textarea>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-3 control-label" for="product_name_fr">PRODUCT DESCRIPTION SMALL</label>
    <div class="col-sm-9">                     
        <textarea class="tinymce" id="product_name_fr" name="product_name_fr" rows="5"></textarea>
    </div>
    </div>


    <div class="form-group row">
    <label class="col-sm-3 control-label" for="stock_alert">STOCK ALERT</label>  
    <div class="col-sm-9">
    <input id="stock_alert" name="stock_alert" placeholder="STOCK ALERT" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <div class="form-group row d-flex align-items-center">
    <label class="col-sm-3 control-label" for="stock_alert">Product Attributes</label>  
    <div class="col-sm-9">
    <div class="row px-3">
            <form autocomplete="off">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 300px;">Label</th>
                        <th >Description</th>
                        <th class="text-center" style="width: 90px;">
                            <button type="button" id="addAttribute" class="btn-add btn btn-success btn-xs py-0 px-2"><span class="mdi mdi-plus" style="font-size: 1rem"></span></button>
                        </th>
                    </tr>
                </thead>
                <tbody id="tableForm" class="container-items">
            
                    <tr class="attControls">
                        <td class="vcenter">
                            <div class="form-group required">
                                <input type="text" class="form-control" name="attrLabel[]" placeholder="Product Attribute Description" maxlength="255"><p class="help-block help-block-error"></p>
                            </div>
                        </td>
                        <td>
                            <div class="form-group required" >
                                <textarea class="form-control" rows="5" name="attrDesc[]" placeholder="Product Attribute Description"></textarea>
                            </div>
                        </td>
                        <td class="text-center vcenter" style="width: 90px; ">
                            <button type="button" class="btn-remove btn btn-danger btn-xs py-0 px-2"><span class="mdi mdi-minus" style="font-size: 1rem"></span></button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </form>
    </div>
    </div>

    
    <div class="form-group row mt-4">
        <div class="col-md-3 d-flex align-items-center">
        <label class=" control-label" for="stock_alert">Image Upload</label>  
        </div>

        <div class="form-group col-md-9">
                <form class="form" action="#" method="post">
                    <div class="fv-row">
                        <div class="dropzone rounded" id="mainImage" style="border: 2px dashed #172D88 !important;">
                            <div class="dz-message needsclick">
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </div>

    <div class="form-group text-center mb-5 ">
        <button class="btn btn-primary btn-rounded">Publish</button>
    </div>

    </form>

</div>