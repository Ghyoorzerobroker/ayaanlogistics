@extends('backend.layouts.adminmain')
@section('content')

 <div class="main-content">
          <div class="title">
            <h2>Settings</h2>
          </div>

          <div class="main-content-boxes">
           

            <div class="box">
              <div class="box-section1">
                <div class="box-title">
                  <h2>General Info</h2>
                  <p>General Information About Your Account</p>
                </div>
              </div>
              <div class="general-info-section2">
                <form>
                  <label for="first-name">First Name</label>
                  <input type="text" placeholder="First Name" id="first-name" />
                  <label for="last-name">Last Name</label>
                  <input type="text" placeholder="Last Name" id="last-name" />
                  <label for="Email">Email</label>
                  <div class="email">
                    <input
                      type="email"
                      
                      id=""
                      value="ghyoorqasim@gmail.com"
                    />
                    <a href="">Change</a>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
@endsection