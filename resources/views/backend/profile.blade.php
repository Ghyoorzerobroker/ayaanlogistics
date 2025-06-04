@extends('backend.layouts.adminmain')
@section('content')

<div class="main-content">
          <div class="title">
            <h2>Profile</h2>
          </div>

          <div class="profile-box">
            <div class="profile-info">
              <img src="admin/images/avatar.png" alt="" />
              <h3>Ayaan</h3>
              <p>Level 20</p>
              <div class="progress">
                <span></span>
              </div>
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p>550 Ratings</p>
            </div>
            <div class="profile-info-section2">
              <div class="row">
                <div class="general-information">
                  <h4>General-Information</h4>
                  <div>
                    <h5>Full Name:&nbsp;</h5>
                    <span>Ayaan</span>
                  </div>
                  <div class="toggle"></div>
                  <span></span>
                </div>
                <div>
                  <h5>Gender:&nbsp;</h5>
                  <span>Male</span>
                </div>
                <div>
                  <h5>Address:&nbsp;</h5>
                  <span>Sector 22 Noida UP -201301, India</span>
                </div>
              </div>
              <div class="row">
                <div class="general-information">
                  <h4>Personal Information</h4>
                  <div>
                    <h5>Email:&nbsp;</h5>
                    <span>Ayaan@gmail.com</span>
                  </div>
                  <div class="toggle left"></div>
                  <span></span>
                </div>
                <div>
                  <h5>Phone:&nbsp;</h5>
                  <span>0934588449</span>
                </div>
                <div>
                  <h5>Date Of Join:&nbsp;</h5>
                  <span>20/04/1996</span>
                </div>
              </div>
              <div class="row">
                <div class="general-information">
                  <h4>Business Information</h4>
                  <div>
                    <h5>Title:&nbsp;</h5>
                    <span>Packers and Movers</span>
                  </div>
                  <div class="toggle"></div>
                  <span></span>
                </div>
                <div>
                  <h5>Field:&nbsp;</h5>
                  <span>Logistics</span>
                </div>
                <div>
                  <h5> Business Experience:&nbsp;</h5>
                  <span>10+</span>
                </div>
              </div>
          <div class="row">
                <div class="general-information">
                  <h4>Billing Information</h4>
                  <div>
                    <h5>Payment Method:&nbsp;</h5>
                    <span>Paypal</span>
                  </div>
                  <div class="toggle left"></div>
                  <span></span>
                </div>
                <div>
                  <h5>Email&nbsp;</h5>
                  <span>email@example.com</span>
                </div>
                <div>
                  <h5>Subscription:&nbsp;</h5>
                  <span>Monthly</span>
                </div>
              </div> 
            </div>
          </div>
         
        </div>

@endsection