@extends('backend.layouts.adminmain')
@section('content')



       <div class="main-content-wrap">
          <div class="main-content">
          <div class="title">
            <h2>Dashboard</h2>
          </div>
          <div class="main-content-boxes">



            <div class="box" >
              <div class="box-section1">
                <div class="box-title">
                  <h3>Leads Statistics</h3>
                  <p>Everything About Leads and Sale</p>
                </div>
              </div>
              <div class="fourth-box-section2">
                <div class="small-box">
                  <i class="fa-regular fa-rectangle-list fa-2x mb-10"></i>
                  <span> &#8377; 2500</span>
                  <p>Total Earning</p>
                </div>

                <div class="small-box">
                  <i class="fa-solid fa-spinner fa-2x mb-10"></i>
                  <span>2500</span>
                  <p>Total Leads</p>
                </div>

                <div class="small-box">
                  <i class="fa-regular fa-circle-check fa-2x mb-10"></i>
                  <span>1900</span>
                  <p>Accepted Leads</p>
                </div>
                <div class="small-box">
                  <i class="fa-regular fa-circle-check fa-2x mb-10"></i>
                  <span>1900</span>
                  <p>Rejected List</p>
                </div>

                <div class="small-box">
                  <i class="fa-regular fa-rectangle-xmark fa-2x mb-10"></i>
                  <span>100</span>
                  <p>Missed</p>
                </div>
              </div>
            </div>


          </div>
          </div>
          <div class="leads-box">
            <div class="box-section1">
              <div class="box-title" style="display: flex;justify-content: space-between;align-items: center;">
                <h2>Leads</h2>
                <div class="header">
                  <i class="fa-solid fa-bars bar-item"></i>
                    <div class="search">
                      <input type="search" placeholder="Type A Keyword" />
                    </div>
                </div>
              </div>
            </div>
            <div class="leads-box-section2">
              <table>
                <thead>
                  <tr>
                    <td>Customer Name</td>
                    <td>Service Name</td>
                    <td>Price</td>
                    <td>Pickup Date</td>
                    <td>Drop Date</td>
                    <td>Delivery From</td>
                    <td>Delivery To</td>
                    <td>Status</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Ministry Wikipedia</td>
                    <td>Vehicle</td>
                    <td>6000</td>
                    <td>1 May 2025</td>
                    <td>6 May 2025</td>
                    <td>Noida</td>
                    <td>Delhi</td>
                  
                    <td><a href="" class="pending">Pending</a></td>
                  </tr>
                  <tr>
                    <td>Ministry Wikipedia</td>
                    <td>Vehicle</td>
                    <td>6000</td>
                    <td>1 May 2025</td>
                    <td>6 May 2025</td>
                    <td>Noida</td>
                    <td>Delhi</td>
                    <td><a href="" class="in-progress">In Progress</a></td>
                  </tr>
                  <tr>
                    <td>Ministry Wikipedia</td>
                    <td>Vehicle</td>
                    <td>6000</td>
                    <td>1 May 2025</td>
                    <td>6 May 2025</td>
                    <td>Noida</td>
                    <td>Delhi</td>
                    <td><a href="" class="completed">Completed</a></td>
                  </tr>
                  <tr>
                    <td>Ministry Wikipedia</td>
                    <td>Vehicle</td>
                    <td>6000</td>
                    <td>1 May 2025</td>
                    <td>6 May 2025</td>
                    <td>Noida</td>
                    <td>Delhi</td>
                    <td><a href="" class="completed">Completed</a></td>
                  </tr>
                  <tr>
                    <td>Ministry Wikipedia</td>
                    <td>Vehicle</td>
                    <td>6000</td>
                    <td>1 May 2025</td>
                    <td>6 May 2025</td>
                    <td>Noida</td>
                    <td>Delhi</td>
                    <td><a href="" class="rejected">Rejected</a></td>
                  </tr>
                  <tr>
                    <td>Ministry Wikipedia</td>
                    <td>Vehicle</td>
                    <td>6000</td>
                    <td>1 May 2025</td>
                    <td>6 May 2025</td>
                    <td>Noida</td>
                    <td>Delhi</td>
                    <td><a href="" class="completed">Completed</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
       </div>

@endsection


