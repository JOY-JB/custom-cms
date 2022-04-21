  <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">User list</h4>
            
            <div class="row">
              <div class="col-6 d-flex align-items-center">
              
                <div class="input-group w-50 ">
                        <div class="input-group-prepend">
                          <span class="input-group-text "><i class="mdi mdi-magnify"></i></span>
                        </div>

                        <input type="text" class="form-control" placeholder="Search">
                </div>
              
              </div>
              <div class="col-6 text-end">
                <button class="btn btn-outline-primary py-2 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="mdi mdi-filter "></i>
                  <span>&nbsp;Filter</span>
                </button>
                <div class="dropdown-menu"
                style="width: 15rem"
                aria-labelledby="dropdownMenuButton1">
                  <h1 class="dropdown-header ">Filter Options </h1>
                  <div class="dropdown-divider"></div>
                  <div class="form-group px-3">
                      <label>Role :</label>
                      <select class="w-100">
                        <option value="">Select option</option>
                        <option value="">Select option</option>
                        <option value="">Select option</option>
                      </select>
                    </div>

                  <div class="form-group px-3">
                      <label>Two Step Verification :</label>
                      <select class="w-100">
                      <option value="">Select option</option>
                      <option value="">Select option</option>
                      <option value="">Select option</option>
                      </select>
                    </div>
                </div>
              
              <button type="button" class="btn btn-outline-primary py-2" style="margin-left: 5px" data-bs-toggle="modal" data-bs-target="#exportModal">
              <div class="d-flex align-items-center">
              <i class="mdi mdi-export "></i>
              <span>&nbsp;Export</span>  
              </div>
              </button>

                <!-- Export Modal -->
                <div class="modal fade" id="exportModal" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered mt-0">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Export</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>



              <button type="button" class="btn btn-outline-primary py-2" style="margin-left: 5px"  data-bs-toggle="modal" data-bs-target="#addUserModal">
              <div class="d-flex align-items-center">
              <i class="mdi mdi-plus "></i>
              <span>&nbsp;Add User</span>
              </div>
              </button>

                <!-- Add User Modal -->
                <div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable mt-0">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">addUserModal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        This content should appear at the bottom after you scroll.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="table-responsive  mt-1">
                <table class="table select-table">
                  <thead>
                    <tr>
                      <th>Customer</th>
                      <th>Company</th>
                      <th>Progress</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex ">
                          <img src="../images/faces/face1.jpg" alt="">
                          <div>
                            <h6>Brandon Washington</h6>
                            <p>Head admin</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6>Company name 1</h6>
                        <p>company type</p>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                            <p class="text-success">79%</p>
                            <p>85/162</p>
                          </div>
                          <div class="progress progress-md">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td><div class="badge badge-opacity-warning">In progress</div></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex">
                          <img src="../images/faces/face2.jpg" alt="">
                          <div>
                            <h6>Laura Brooks</h6>
                            <p>Head admin</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6>Company name 1</h6>
                        <p>company type</p>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                            <p class="text-success">65%</p>
                            <p>85/162</p>
                          </div>
                          <div class="progress progress-md">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td><div class="badge badge-opacity-warning">In progress</div></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex">
                          <img src="../images/faces/face3.jpg" alt="">
                          <div>
                            <h6>Wayne Murphy</h6>
                            <p>Head admin</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6>Company name 1</h6>
                        <p>company type</p>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                            <p class="text-success">65%</p>
                            <p>85/162</p>
                          </div>
                          <div class="progress progress-md">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td><div class="badge badge-opacity-warning">In progress</div></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex">
                          <img src="../images/faces/face4.jpg" alt="">
                          <div>
                            <h6>Matthew Bailey</h6>
                            <p>Head admin</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6>Company name 1</h6>
                        <p>company type</p>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                            <p class="text-success">65%</p>
                            <p>85/162</p>
                          </div>
                          <div class="progress progress-md">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td><div class="badge badge-opacity-danger">Pending</div></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex">
                          <img src="../images/faces/face5.jpg" alt="">
                          <div>
                            <h6>Katherine Butler</h6>
                            <p>Head admin</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6>Company name 1</h6>
                        <p>company type</p>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                            <p class="text-success">65%</p>
                            <p>85/162</p>
                          </div>
                          <div class="progress progress-md">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td><div class="badge badge-opacity-success">Completed</div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
  </div>