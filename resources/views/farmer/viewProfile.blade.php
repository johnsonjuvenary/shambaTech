@extends('layouts.app')
@section('title','farmer Edit Profile')
@section('style')
body {
margin: 0;
{{--    padding-top: 60px;--}}
color: #2e323c;
background: #f5f6fa;
position: relative;
height: 100%;
}
.account-settings .user-profile {
margin: 0 0 1rem 0;
padding-bottom: 1rem;
text-align: center;
}
.account-settings .user-profile .user-avatar {
margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
width: 90px;
height: 90px;
-webkit-border-radius: 100px;
-moz-border-radius: 100px;
border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
margin: 0;
font-size: 0.8rem;
font-weight: 400;
color: #9fa8b9;
}
.account-settings .about {
margin: 2rem 0 0 0;
text-align: center;
}
.account-settings .about h5 {
margin: 0 0 15px 0;
color: #007ae1;
}
.account-settings .about p {
font-size: 0.825rem;
}
.form-control {
border: 1px solid #cfd1d8;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
font-size: .825rem;
background: #ffffff;
color: #2e323c;
}

.card {
background: #ffffff;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
border: 0;
margin-bottom: 1rem;
}
@endsection
@section('content')
<div class="pt-5">
    <div class="container body1">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="pt-5 account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                </div>
                                <div class="">
                                    <h5 class="user-name"> {{Auth::user()->firstName}}
                                        {{Auth::user()->lastName}}</h5>
                                    <h6 class="user-email"> {{Auth::user()->email}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class=" row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-4 text-primary">Personal Details</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">First Name</label>
                                    <input type="text" class="form-control" id="fullName"
                                        value="{{Auth::user()->firstName}}" disabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Last Name</label>
                                    <input type="text" class="form-control" id="fullName"
                                        value="{{Auth::user()->lastName}}" placeholder="Enter last name" disabled>
                                </div>
                            </div>
                            <div class="pt-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Username</label>
                                    <input type="text" class="form-control" id="fullName"
                                        value="{{Auth::user()->userName}}" placeholder="Enter Username" disabled>
                                </div>
                            </div>
                            <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="eMail">Email</label>
                                    <input type="email" class="form-control" id="eMail" value="{{Auth::user()->email}}"
                                        placeholder="Enter email ID" disabled>
                                </div>
                            </div>
                            <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone"
                                        value="{{Auth::user()->mobileNumber}}" placeholder="Enter phone number"
                                        disabled>
                                </div>
                            </div>
                            <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Crop Type</label>
                                    <input type="url" class="form-control" id="website"
                                        value="{{Auth::user()->cropType}}" placeholder="Crop Type" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mt-4 mb-1 text-primary">Address</h6>
                            </div>
                            <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="Street">Region</label>
                                    <input type="name" class="form-control" id="Street" value="{{Auth::user()->region}}"
                                        placeholder="Enter Region" disabled>
                                </div>
                            </div>
                            <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="ciTy">District</label>
                                    <input type="name" class="form-control" id="ciTy" value="{{Auth::user()->district}}"
                                        placeholder="Enter District" disabled>
                                </div>
                            </div>
                            <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="sTate">Ward</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->ward}}" id="sTate"
                                        placeholder="Enter Ward" disabled>
                                </div>
                            </div>
                            <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="zIp">Village</label>
                                    <input type="text" class="form-control" id="zIp" value={{Auth::user()->village}}
                                        placeholder="Enter Village" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 row gutters">
                            <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
