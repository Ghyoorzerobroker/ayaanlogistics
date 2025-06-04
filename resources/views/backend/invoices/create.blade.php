@extends('backend.layouts.adminmain')
@section('content')


    <div class="main-content" style="display: flex;justify-content:space-between;align-items:center;">
        <div class="title" style="margin: 0;">
            <h2>Create Invoice </h2>
        </div>
        <div>
            <a href="" class="btn-primary">Back</a>
        </div>
    </div>

    <div class="main-content-boxes leads-main-content-boxes">

        <div class="leads-box overlofscroll">
            <div class="box-section1">

                <div class="formarea ">

                    <form>
                        <div class="formareainside">
                            <div class="form-group">
                                <label>Consignor Name</label>
                                <input type="text" name="consignor_name" required>
                            </div>
                            <div class="form-group">
                                <label>Consignor GSTIN</label>
                                <input type="text" name="gstin">
                            </div>
                            <div class="form-group">
                                <label>G.R No.</label>
                                <input type="text" name="gr_no">
                            </div>
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" name="from_location">
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <input type="text" name="to_location">
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" name="date">
                            </div>
                            <div class="form-group">
                                <label>Consignee Name</label>
                                <input type="text" name="consignee_name">
                            </div>
                            <div class="form-group">
                                <label> Consignee GSTIN</label>
                                <input type="text" name="gstin">
                            </div>
                            <div class="form-group">
                                <label>PKGS</label>
                                <input type="text" name="pkgs">
                            </div>
                            <div class="form-group">
                                <label>Actual Weight</label>
                                <input type="text" name="actual_weight">
                            </div>
                            <div class="form-group">
                                <label>Charged Weight</label>
                                <input type="text" name="charged_weight">
                            </div>
                            <div class="form-group">
                                <label>Weight/Dimension</label>
                                <input type="text" name="weight_dimension">
                            </div>
                        </div>

                        <div class="modeselect">
                            <div  class="form-group bookingmode" style="width:40%;">
                                <label>Mode of Booking</label>
                                <div class="checkbox-group" style="display: flex;justify-content:space-between;">
                                    <label><input type="checkbox" name="booking_mode" value="Train"> By Train</label>
                                    <label><input type="checkbox" name="booking_mode" value="Air"> By Air</label>
                                    <label><input type="checkbox" name="booking_mode" value="Surface"> By Surface</label>
                                    <label><input type="checkbox" name="booking_mode" value="FTL"> By FTL</label>
                                </div>
                            </div>

                            <div class="form-group paymentmode"  style="width:40%;margin-left:1rem;">
                                <label>Mode of Payment</label>
                                <div class="checkbox-group" style="display: flex;justify-content:space-between;">
                                    <label><input type="checkbox" name="payment_mode" value="To Pay"> To Pay</label>
                                    <label><input type="checkbox" name="payment_mode" value="Paid"> Paid</label>
                                    <label><input type="checkbox" name="payment_mode" value="TBB"> TBB</label>
                                    <label><input type="checkbox" name="payment_mode" value="FOC"> FOC</label>
                                </div>
                            </div>
                        </div>



                        <div class="formareainside">

                            <div class="form-group">
                                <label>Billing Name</label>
                                <input type="text" name="billing_name">
                            </div>
                            <div class="form-group">
                                <label>GSTIN</label>
                                <input type="text" name="gstin">
                            </div>
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="tel" name="mobile_number">
                            </div>
                            <div class="form-group">
                                <label>Invoice Number</label>
                                <input type="text" name="invoice_number">
                            </div>
                            <div class="form-group">
                                <label>Invoice Date</label>
                                <input type="date" name="invoice_date">
                            </div>
                            <div class="form-group">
                                <label>Invoice Value</label>
                                <input type="text" name="invoice_value">
                            </div>
                            <div class="form-group">
                                <label>E-way Bill No.</label>
                                <input type="text" name="eway_bill_no">
                            </div>
                            <div class="form-group">
                                <label>Vehicle Number</label>
                                <input type="text" name="vehicle_number">
                            </div>
                        </div>
                        <div>
                            <h5 style="text-align: center;color:#28a745;">Amount Calculation</h5>
                        </div>

                        <div class="gridsix" style="margin: 10px 0px">

                            <div class="form-group">
                                <label>C.O.D/DACC</label>
                                <input type="text" name="billing_name">
                            </div>
                            <div class="form-group">
                                <label>F.O.V</label>
                                <input type="text" name="gstin">
                            </div>
                            <div class="form-group">
                                <label>Doc. Charges</label>
                                <input type="tel" name="mobile_number">
                            </div>
                            <div class="form-group">
                                <label>Crane Charges</label>
                                <input type="text" name="invoice_number">
                            </div>
                            <div class="form-group">
                                <label>Labour Handling</label>
                                <input type="tel" name="mobile_number">
                            </div>
                            <div class="form-group">
                                <label>Pickup Charge</label>
                                <input type="text" name="invoice_number">
                            </div>
                            <div class="form-group">
                                <label>Delivery Charges</label>
                                <input type="text" name="invoice_number">
                            </div>
                            <div class="form-group">
                                <label>Rajdhani Charges</label>
                                <input type="text" name="invoice_number">
                            </div>
                            <div class="form-group">
                                <label>GST (as Aplicable)</label>
                                <input type="text" name="invoice_number">
                            </div>
                             <div class="form-group">
                                <label>Total Amount</label>
                                <input type="text" name="invoice_number">
                            </div>
                        </div>

                       <div style="display: flex;justify-content:center;">
                         <button type="submit" class="btn-primary" style="margin-top: 10px;">Submit</button>
                        <div>
                    </form>

                </div>


            </div>

        </div>

    </div>
    </div>
@endsection