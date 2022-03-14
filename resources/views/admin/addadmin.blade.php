@extends('admin.layouts.master')
@section('title','Add Admin')

@section('contents')
@include('admin.layouts.sidebar')
  
<main class="main">
  <section class="account-page-wrapper">
      <section class="mobile-menu d-sm-none">
          <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i>
          <div class="mobile-menu_brand-logo">
              <img src="../../images/mobile-menu-logo.png" alt="Tradelender logo">
          </div>
      </section>
      <section class="page-title-bar d-flex justify-content-between">
          <h4 class="page-title font-weight-bold d-sm-none">
              Account
          </h4>

          <h4 class="page-title font-weight-bold d-none d-sm-block">
              <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Account
          </h4>
      </section>

      <section class="account-profile-image-container">
          <div class="profile-image-wrapper">
              <img src="../../images/account-image.png" alt="Profile Image" class="rounded-circle" width="102" height="102" />
              <div class="change-profile-image-wrapper">
                  <img src="../../images/camera-icon.png" alt="Profile Image" class="rounded-circle" width="12"
                      height="10.5" />
              </div>
          </div>
      </section>

      <!--<section id="accountViewTabsContainer" class="accountTabsContainer bg-white mt-4">
          <section class="account-navigation-container mb-4">
              <nav class="account-navigation-bar">
                  <ul class="nav">
                      <li class="nav-item">
                          <a class="nav-link active" href="#personalDetails">Personal</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#businessDetails">Business</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#financialDetails">Financial</a>
                      </li>
                  </ul>
              </nav>
          </section>

          <div id="personalDetails" class="tab-item row no-gutters justify-content-center px-3 px-md-0 active">
              <section class="col-md-5 col-sm-6 mr-md-3">
                  
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Title</p>
                          <h6 class=" card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Email address</p>
                          <h6 class="card-text  mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Share in the company</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Gender</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Identification type</p>
                          <h6 class="card-text  mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Address</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Country</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">LGA</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Marital status</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Number of dependents</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
              </section>
              <section class="col-md-5 col-sm-6">
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Full name</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Position in the company</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Date of birth</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">BVN</p>
                          <h6 class="card-text  mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">ID number</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                 {{--  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Gender</p>
                          <h6 class="card-text mb-0">{{$accview->title}}</h6>
                      </div>
                  </div> --}}
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">State</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Residential Status</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">When did you move to this address?</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Educational Level</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
              </section>
          </div>
          <div id="businessDetails" class="tab-item row no-gutters justify-content-center px-3 px-md-0">
              <section class="col-md-5 col-sm-6 mr-md-3">
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Type of business</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Is the business registered?</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Date of business establishment</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Country</p>
                          <h6 class="card-text  mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">LGA</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Are your business locations owned or rented?</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Total of employees</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">What do you sell?</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Average monthly sales</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">How long have you been in business?</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">CAC7</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Identification type</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
              </section>
              <section class="col-md-5 col-sm-6">
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Name of business</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">RC/BN number</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Business address</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">State</p>
                          <h6 class="card-text  mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">When did you move this business?</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Number of outlets</p>
                          <h6 class="card-text"></h6>
                      </div>
                  </div>
                  {{-- <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">How do you do business?</p>
                          <h6 class="card-text">{{$accview->sales_method}}</h6>
                      </div>
                  </div> --}}
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">What industry does your business belong to?</p>
                          <h6 class="card-text"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Average monthly expenses</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Tax Identification Number (TIN)</p>
                          <h6 class="card-text mb-0"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">CAC2</p>
                          <h6 class="card-text mb-0">987645342</h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">CAC Certificate</p>
                          <a href="#alertModal" class="card-link text-primary-dark" data-toggle="modal"
                              data-url="">
                              Click to view
                          </a>
                      </div>
                  </div>
              </section>
          </div>
          <div id="financialDetails" class="tab-item row no-gutters justify-content-center px-3 px-md-0">
              <section class="col-md-5 col-sm-6 mr-md-3">
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Bank name</p>
                          <h6 class="card-text"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Bank account number</p>
                          <h6 class="card-text"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Local purchasing order (LPO)</p>
                          <a href="#alertModal" class="card-link text-primary-dark" data-toggle="modal"
                              data-url="">
                              Click to view
                          </a>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Have you taken out a loan in the past 12 months?</p>
                          <h6 class="card-text"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Bank statement</p>
                          <a href="#alertModal" class="card-link text-primary-dark" data-toggle="modal"
                              data-url="">
                              Click to view
                          </a>
                      </div>
                  </div>
              </section>
              <section class="col-md-5 col-sm-6 d-flex flex-column">
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Bank account name</p>
                          <h6 class="card-text"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Has online banking</p>
                          <h6 class="card-text"></h6>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">Proforma invoice</p>
                          <a href="#alertModal" class="card-link text-primary-dark"
                              data-toggle="modal"
                              data-url="">
                              Click to view
                          </a>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <p class="card-title mb-1">If yes, how much</p>
                          <h6 class="card-text"></h6>
                      </div>
                  </div>
              </section>
          </div>
      </section>-->

      <!-- The Modal -->
      <div class="modal fade alert" id="alertModal">
          <div class="modal-dialog modal-dialkog-scrollable">
              <div class="modal-content">
                  <!-- Modal body -->
                  <div class="modal-body text-center">
                      <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
                      <div class="blob-container">
                          <img class="img-fluid" src="#"/>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
</main>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/site.js"></script>
  
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
        <div class="form-container">
          <div class="container">
            @if(Session::has('success'))

            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>
                <strong>
                  {!! session('success')!!}   @php Session::forget('success') @endphp &nbsp;&nbsp;
                </strong>
            </div>
          @endif
          @if(Session::has('failed'))

            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>
                <strong>
                    {!! session('failed') !!}
                </strong>
            </div>

          @endif
            <div class="text-center">
              <h2>Add Admin</h2>
            </div>
          </div>

            <form  method="POST" action="{{ route('admin.admin.create.submit') }}" enctype="multipart/form-data" novalidate="novalidate">
              @csrf
              <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name Here">
                @error('name')
                  <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">
                      x
                    </button>
                    <strong>
                        {!! $message !!}
                    </strong>
                  </div>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputUsername">Email</label>
                <input type="email" name="email" placeholder="Type a valid Email..." class="form-control" required autocomplete="email" >
                @error('email')
                  <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">
                      x
                    </button>
                    <strong>
                      {!! $message !!}
                    </strong>
                  </div>
                @enderror
               </div>
              <center>
                <input type="submit" class="btn btn-success btn-block" value="Submit">
                <a href="{{route('admin.admin.create')}}" class="btn btn-primary btn-block">Add New</a>
              </center>
            </form>
          </div>
        </section>
      </section>
    

@endsection
