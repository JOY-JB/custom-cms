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
            
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>User</th>
                    <th>First name</th>
                    <th>Progress</th>
                    <th>Amount</th>
                    <th>Deadline</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1">
                      <img
                        src="../images/faces/face1.jpg"
                        alt="image"
                      />
                    </td>
                    <td>Herman Beck</td>
                    <td>
                      <div class="progress">
                        <div
                          class="progress-bar bg-success"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </td>
                    <td>$ 77.99</td>
                    <td>May 15, 2015</td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img
                        src="../images/faces/face2.jpg"
                        alt="image"
                      />
                    </td>
                    <td>Messsy Adam</td>
                    <td>
                      <div class="progress">
                        <div
                          class="progress-bar bg-danger"
                          role="progressbar"
                          style="width: 75%"
                          aria-valuenow="75"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </td>
                    <td>$245.30</td>
                    <td>July 1, 2015</td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img
                        src="../images/faces/face3.jpg"
                        alt="image"
                      />
                    </td>
                    <td>John Richards</td>
                    <td>
                      <div class="progress">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 90%"
                          aria-valuenow="90"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </td>
                    <td>$138.00</td>
                    <td>Apr 12, 2015</td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img
                        src="../images/faces/face4.jpg"
                        alt="image"
                      />
                    </td>
                    <td>Peter Meggik</td>
                    <td>
                      <div class="progress">
                        <div
                          class="progress-bar bg-primary"
                          role="progressbar"
                          style="width: 50%"
                          aria-valuenow="50"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </td>
                    <td>$ 77.99</td>
                    <td>May 15, 2015</td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img
                        src="../images/faces/face5.jpg"
                        alt="image"
                      />
                    </td>
                    <td>Edward</td>
                    <td>
                      <div class="progress">
                        <div
                          class="progress-bar bg-danger"
                          role="progressbar"
                          style="width: 35%"
                          aria-valuenow="35"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </td>
                    <td>$ 160.25</td>
                    <td>May 03, 2015</td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img
                        src="../images/faces/face6.jpg"
                        alt="image"
                      />
                    </td>
                    <td>John Doe</td>
                    <td>
                      <div class="progress">
                        <div
                          class="progress-bar bg-info"
                          role="progressbar"
                          style="width: 65%"
                          aria-valuenow="65"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </td>
                    <td>$ 123.21</td>
                    <td>April 05, 2015</td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img
                        src="../images/faces/face7.jpg"
                        alt="image"
                      />
                    </td>
                    <td>Henry Tom</td>
                    <td>
                      <div class="progress">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 20%"
                          aria-valuenow="20"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </td>
                    <td>$ 150.00</td>
                    <td>June 16, 2015</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>