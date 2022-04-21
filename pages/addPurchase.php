<div class="row">
   <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title d-inline">Add Purchase</h4>
                <button type="button" class="btn btn-outline-primary  btn-fw py-0">Add Supplier</button>
              </div>
                <form class="forms-sample mt-4">
                    <div class="form-group">
                        <div class="row">
                            <div class=" col-lg-4">
                                <label for="supplierName">Supplier Name</label>
                                <select class="form-control select2" name="" id="supplierName">
                                <option>select supplier name</option>
                                <option>md ilias</option>
                                <option>md ilias</option>
                                <option>md ilias</option>
                              </select>
                            </div>      
                            <div class=" col-lg-4">
                                <label for="brand">Invoice No</label>
                                <input type="number" class="form-control " name="" id="">
                            </div>      
                            <div class=" col-lg-4">
                                <label for="brand">Details</label>
                                <textarea name="details" class="form-control" name="" id="" cols="30" rows="10"></textarea>
                            </div>      
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                          <div class=" col-lg-4">
                            <label for="purchaseDate">Purchase Date</label>
                            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                            <span class="input-group-addon input-group-prepend border-right">
                                <span class="icon-calendar input-group-text calendar-icon"></span>
                            </span>
                            <input type="text" class="form-control" name="" id="purchaseDate" placeholder="dd/mm/yy">
                            </div>
                          </div>      
                          
                          <div class=" col-lg-4">
                            <label for="expiryDate">Expiry Date</label>
                            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                            <span class="input-group-addon input-group-prepend border-right">
                                <span class="icon-calendar input-group-text calendar-icon"></span>
                            </span>
                            <input type="text" class="form-control" name="" id="expiryDate" placeholder="dd/mm/yy">
                            </div>
                          </div>

                          <div class=" col-lg-4">
                              <label for="supplierName">Payment Type</label>
                              <select class="form-control select2" name="" id="paymentType">
                              <option>Cash Payment</option>
                              <option>Bank Payment</option>
                              <option>Due Payment</option>
                            </select>
                          </div>
                          
                          
                          <div class="form-group mt-5">
                            <div class="row px-3">
                              <form autocomplete="off">
                                  <table class="table table-bordered table-striped">
                                      <thead>
                                          <tr>
                                              <th style="width: 300px;">Item Information</th>
                                              <th >Stock/Qty</th>
                                              <th >Qty</th>
                                              <th >Rate</th>
                                              <th >Rate</th>
                                              <th >Total</th>
                                              <th class="text-center" style="width: 90px;">
                                                  <button type="button" id="addAttribute" class="btn-add btn btn-success btn-xs py-0 px-2"><span class="mdi mdi-plus" style="font-size: 1rem"></span></button>
                                              </th>
                                          </tr>
                                      </thead>
                                      <tbody id="tableForm" class="container-items">
                                          <tr class="attControls">
                                              <td class="vcenter">
                                                  <div class="form-group required">
                                                  <select class="form-control select2" name="" id="paymentType">
                                                    <option>oil</option>
                                                    <option>Onion</option>
                                                    <option>Ginger</option>
                                                  </select>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="form-group" >
                                                  <input type="number" class="form-control" name="" id="Stock/Qty" placeholder="0.00" disabled>
                                                  </div>
                                              </td>
                                              
                                              <td>
                                                  <div class="form-group required" >
                                                  <input type="number" class="form-control" name="" id="stockQty" placeholder="0.00">
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="form-group required" >
                                                  <input type="number" class="form-control" name="" id="qty" placeholder="0.00" min=0>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="form-group required" >
                                                  <input type="number" class="form-control" name="" id="rate" placeholder="0.00" min=0>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="form-group required" >
                                                  <input type="number" class="form-control" name="" id="total" placeholder="0.00" disabled>
                                                  </div>
                                              </td>
                                              <td class="text-center vcenter" style="width: 90px; ">
                                                  <button type="button" class="btn-remove btn btn-danger btn-xs py-0 px-2"><span class="mdi mdi-minus" style="font-size: 1rem"></span></button>
                                              </td>
                                          </tr>                                          
                                      </tbody>
                                  </table>
                                  <table class="table table-bordered table-striped">
                                      <tbody id="tableForm" class="container-items">
                                          <tr>
                                            <td style="width: 507px;"></td>
                                          <td>
                                                <div class="form-group" >
                                                <h4 class="card-title" style="text-align: right">Grand Total :</h4>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group required" >
                                                <input type="number" class="form-control" name="" id="total" placeholder="0.00" disabled>
                                                </div>
                                            </td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td style="width: 507px;"></td>
                                          <td>
                                                <div class="form-group" >
                                                <h4 class="card-title" style="text-align: right">Paid Amount :</h4>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group required" >
                                                <input type="number" class="form-control" name="" id="total" placeholder="0.00">
                                                </div>
                                            </td>
                                          </tr>
                                          
                                      </tbody>
                                  </table>
                                  <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                  </div>
                              </form>
                          </div>
                          
                        </div>
                    </div>
                  </form>
            </div>
        </div>
</div>