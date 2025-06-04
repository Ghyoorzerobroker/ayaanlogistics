@extends('backend.layouts.adminmain')
@section('content')


    <div class="main-content" style="display: flex;justify-content:space-between;align-items:center;">
        <div class="title" style="margin: 0;">
            <h2>Order Create</h2>
        </div>
        <div>
            <a href="" class="btn-primary">Back</a>
        </div>
    </div>

    <div class="main-content-boxes leads-main-content-boxes">

        <div class="leads-box overlofscroll">
            <div class="box-section1">

                <div class="formarea ">

                    <form action="#" method="post">
                       <div class="formareainside">
                        <div>
                            <label for="name">
                            <i class="fa-regular fa-user" style="color: #007bff;"></i> Name:
                            </label>
                            <input type="text" id="name" name="name" required />
                        </div>

                        <div>
                            <label for="email">
                            <i class="fa-regular fa-envelope" style="color: #28a745;"></i> Email:
                            </label>
                            <input type="email" id="email" name="email" required />
                        </div>

                        <div>
                            <label for="phone">
                            <i class="fa-solid fa-phone" style="color: #17a2b8;"></i> Phone Number:
                            </label>
                            <input type="tel" id="phone" name="phone" required />
                        </div>

                        <div>
                            <label for="pickup">
                            <i class="fa-solid fa-location-dot" style="color: #fd7e14;"></i> Pickup :
                            </label>
                            <input type="text" id="pickup" name="pickup" required />
                        </div>

                        <div>
                            <label for="drop">
                            <i class="fa-solid fa-map-marker-alt" style="color: #6f42c1;"></i> Drop:
                            </label>
                            <input type="text" id="drop" name="drop" required />
                        </div>

                        <div>
                            <label for="price">
                            	<i class="fa-solid fa-indian-rupee-sign" style="color: #17a2b8;"></i> Price:
                            </label>
                            <input type="text" id="price" name="drop" required />
                        </div>

                        <div>
                            <label for="pickup-date">
                            <i class="fa-regular fa-calendar-days" style="color: #dc3545;"></i> Pickup Date:
                            </label>
                           <input type="datetime-local" id="pickup-date" name="pickup-date" required />

                        </div>

                        <div>
                            <label for="drop-date">
                            <i class="fa-regular fa-calendar-days" style="color: #dc3545;"></i> Drop Date:
                            </label>
                           <input type="datetime-local" id="drop-date" name="pickup-date" required />

                        </div>

                        <div>
                            <label for="service">
                            <i class="fa-solid fa-truck" style="color: #20c997;"></i> Choose Service:
                            </label>
                            <select id="service" name="service" required>
                            <option value="">-- Select Service --</option>
                            <option value="">Door to Door Service</option>
                            <option value="">Express Cargo Service</option>
                            <option value="">Air Cargo Service</option>
                            <option value="">Port Pickup & Delivery</option>
                            <option value="">Surface Cargo</option>
                            <option value="">Train Cargo Services</option>
                            </select>
                        </div>
                        </div>


                        <input type="submit" class="btn-primary" value="Submit"  style="margin-top: 1.2rem;"/>

                    </form>


                </div>

                
            </div>

        </div>

    </div>
    </div>
@endsection