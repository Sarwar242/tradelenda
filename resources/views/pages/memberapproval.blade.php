
<div class="container">
    <div class="row">
        <div class="col-md-2" id="sidebar_card">
            @include('pages.sidebar')
        </div>
        <style>
            .table {
  .actions {
    float: right;
  }
}
            </style>

                               <div class="col-md-10  col-xs-12  col-sm-9 ">
                                    <div class="card">
                                <table class="table table-responsive"   style="min-height:300px">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Group Name</th>
                                        <th scope="col">Member Id</th>
                                        <th scope="col">Member Username</th>
                                        <th scope="col">Member Avatar</th>
                                        <th scope="col">Admin</th>
                                        <th scope="col">Approved</th>
                                        <th scope="col">Created Date</th>
                                        <th scope="col">Updated Date</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        
                                      <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><img src="" alt="" style="width: 40px;height: 40px;border-radius: 50px;"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><div class="actions">
                                        <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Options</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right dropdown">
                                            <a class="dropdown-item btn-success" href="">Approve</a>
                                            <a class="dropdown-item" href="">Reject</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <div class="dropdown-divider"></div>
                                        <a class="dropdown-item btn-danger" href="">Delete</a>
                                        </div>
                                        </div>
                                    </div></td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                  </table>

                                </div>
                            </div>
                            </div>
                            </div>
                            
