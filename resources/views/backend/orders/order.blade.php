@extends('backend.layouts.adminmain')
@section('content')

<div class="main-content">
          <div class="title">
            <h2>Orders</h2>
           
          </div>

          <div class="main-content-boxes leads-main-content-boxes">
               
            <div class="leads-box overlofscroll">
              <div class="box-section1">
                <div class="box-title" style="display: flex;justify-content: space-between;align-items: center;">
                  
                  <div class="header" style="padding: 0">
                      <div class="search">
                        <input type="search" placeholder="Type A Keyword" />
                      </div>
                  </div>
                  <a href="{{route('create')}}" class="btn-primary">Create</a>
                </div>
              </div>
              <div class="leads-box-section2">
                <table>
                  <thead>
                    <tr>
                      <td>Customer Name</td>
                      <td>Service Category</td>
                      <td>Price</td>
                      <td>Pickup Date</td>
                      <td>Drop Date</td>
                      <td>Delivery From</td>
                      <td>Delivery To</td>
                     
                      <td>Action</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Priyanshu</td>
                      <td>Door to Door</td>
                      <td>6000</td>
                      <td>1 May 2025</td>
                      <td>6 May 2025</td>
                      <td>Noida</td>
                      <td>Delhi</td>
                      
                      <td>
                        <div class="action-icons">
                            <span class="icon edit"><i class="fa-regular fa-pen-to-square fa-fw"></i></span>
                            <span class="icon delete"><i class="fa-regular fa-trash-can fa-fw"></i></span>
                            <span class="icon view"><i class="fa-regular fa-eye fa-fw"></i></span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Dhirendra</td>
                      <td>Vehicle</td>
                      <td>6000</td>
                      <td>1 May 2025</td>
                      <td>6 May 2025</td>
                      <td>Noida</td>
                      <td>Delhi</td>
                      
                      <td>
                        <div class="action-icons">
                            <span class="icon edit"><i class="fa-regular fa-pen-to-square fa-fw"></i></span>
                            <span class="icon delete"><i class="fa-regular fa-trash-can fa-fw"></i></span>
                            <span class="icon view"><i class="fa-regular fa-eye fa-fw"></i></span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Qasim</td>
                      <td>Express Cargo Service</td>
                      <td>6000</td>
                      <td>1 May 2025</td>
                      <td>6 May 2025</td>
                      <td>Noida</td>
                      <td>Delhi</td>
                     
                      <td>
                        <div class="action-icons">
                            <span class="icon edit"><i class="fa-regular fa-pen-to-square fa-fw"></i></span>
                            <span class="icon delete"><i class="fa-regular fa-trash-can fa-fw"></i></span>
                            <span class="icon view"><i class="fa-regular fa-eye fa-fw"></i></span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Ministry Wikipedia</td>
                      <td>Train Cargo Service</td>
                      <td>6000</td>
                      <td>1 May 2025</td>
                      <td>6 May 2025</td>
                      <td>Noida</td>
                      <td>Delhi</td>
                      
                      <td>
                        <div class="action-icons">
                            <span class="icon edit"><i class="fa-regular fa-pen-to-square fa-fw"></i></span>
                            <span class="icon delete"><i class="fa-regular fa-trash-can fa-fw"></i></span>
                            <span class="icon view"><i class="fa-regular fa-eye fa-fw"></i></span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Ministry Wikipedia</td>
                      <td>Surface Cargo Service</td>
                      <td>6000</td>
                      <td>1 May 2025</td>
                      <td>6 May 2025</td>
                      <td>Noida</td>
                      <td>Delhi</td>
                      
                      <td>
                        <div class="action-icons">
                            <span class="icon edit"><i class="fa-regular fa-pen-to-square fa-fw"></i></span>
                            <span class="icon delete"><i class="fa-regular fa-trash-can fa-fw"></i></span>
                            <span class="icon view"><i class="fa-regular fa-eye fa-fw"></i></span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Ministry Wikipedia</td>
                      <td>Vehicle</td>
                      <td>6000</td>
                      <td>1 May 2025</td>
                      <td>6 May 2025</td>
                      <td>Noida</td>
                      <td>Delhi</td>
                      
                      <td>
                        <div class="action-icons">
                            <span class="icon edit"><i class="fa-regular fa-pen-to-square fa-fw"></i></span>
                            <span class="icon delete"><i class="fa-regular fa-trash-can fa-fw"></i></span>
                            <span class="icon view"><i class="fa-regular fa-eye fa-fw"></i></span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
</div>
@endsection