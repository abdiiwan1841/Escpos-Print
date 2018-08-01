@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form method="POST" id="form" action="{{route("print.store")}}" enctype="multipart/form-data">
        {{csrf_field()}}
    <div class="row">

        <div class="col-md-9 col-lg-9" id="menu-section">
            <div class="col-md-3">
                <label for="table_num">Table Number</label><input class="form-control" id="table_num" type="number" name="table_num"/>
            </div>
            <div>
                <br>
                <h5>Choose your Items for Order  <span class="float-right">

                <h5>Order Number: #####</h5>
            </span></h5>
                <br>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row" >
                        <h4 class="col-md-12">Appetizers</h4>
                        <br>

                            <ul>
                                <li class="btn btn-light">Jalapeno Poppers  <span>$7.99</span></li>
                                <li class="btn btn-light">Onions rings <span>$2.99</span></li>
                                <li class="btn btn-light">Chili cheese fries <span>$7.99</span></li>
                                <li class="btn btn-light">Gyro Dip <span>$7.49</span></li>
                                <li class="btn btn-light">Garlic cheese bread <span>$6.99</span></li>
                                <li class="btn btn-light">Jalapeno bread <span>$7.99</span></li>
                            </ul>
                    </div>
        <br>
                    <div class="row">
                        <h4 class="col-md-12">Burgers</h4>
                        <br>

                        <ul>
                            <li class="btn btn-light">Oasis Burger <span>$8.99</span></li>
                            <li class="btn btn-light">Bang Bang Burger <span>$9.99</span></li>
                            <li class="btn btn-light">Big Daddy Burger <span>$10.99</span></li>
                        </ul>
                    </div>
                    <br>
                    <div class="row">
                        <h4 class="col-md-12">Chicken Sandwiches</h4>
                        <br>

                        <ul>
                            <li class="btn btn-light">Fried Chicken Sandwich <span>$7.99</span></li>
                            <li class="btn btn-light">Buffalo Chicken Sandwich <span>$8.49</span></li>
                        </ul>
                    </div>
                    <br>
                    <div class="row">
                        <h4 class="col-md-12">Mediterranean Eats</h4>
                        <br>

                        <ul>
                            <li class="btn btn-light">The Original Gyro <span>$6.99</span></li>
                            <li class="btn btn-light">Gyro Wrap <span>$6.99</span></li>
                            <li class="btn btn-light">Turkey Wrap <span>$6.99</span></li>
                        </ul>
                    </div>
                    <br>
                    <div class="row">
                        <h4 class="col-md-12">Off the Grill</h4>
                        <br>

                        <ul>
                            <li class="btn btn-light">The Classic Reuben <span>$7.99</span></li>
                            <li class="btn btn-light">Oasis grilled cheese <span>$3.99</span></li>
                        </ul>
                    </div>
                    <br>
                    <div class="row">
                        <h4 class="col-md-12">Pizza <small class="help-text">(Only Medium Sizes)</small></h4>
                        <br>

                        <ul>
                            <li class="btn btn-light">Chicken Alfredo <span>$11.99</span></li>
                            <li class="btn btn-light">Veggie Pizza <span>$11.99</span></li>
                            <li class="btn btn-light">Cheese Pizza <span>$8.99</span></li>
                        </ul>
                    </div>

                    <div class="row">
                        <h4 class="col-md-12">Salads</h4>
                        <br>

                        <ul>
                            <li class="btn btn-light">Greek salad <span>$7.99</span></li>
                            <li class="btn btn-light">Crispy chicken salad <span>$8.99</span></li>
                            <li class="btn btn-light">Buffalo chicken salad <span>$7.99</span></li>
                            <li class="btn btn-light">Side salad <span>$3.99</span></li>
                        </ul>
                    </div>
                    <br>


                </div>

                <div class="col-md-6">


                    <div class="row">
                        <h4 class="col-md-12">South of the Border</h4>
                        <br>

                        <ul>
                            <li class="btn btn-light">Cheese Quesadilla <span>$4.49</span></li>
                            <li class="btn btn-light">Chicken Cheese Quesadilla <span>$6.49</span></li>
                            <li class="btn btn-light">Veggie Quesadilla <span>$6.49</span></li>
                        </ul>
                    </div>
                    <br>

                    <div class="row">
                        <h4 class="col-md-12">Sides and Such</h4>
                        <br>

                        <ul>
                            <li class="btn btn-light">Onion Rings <span>$2.99</span></li>
                            <li class="btn btn-light">Straight Fries <span>$1.99</span></li>
                            <li class="btn btn-light">Curly Fries <span>$2.49</span></li>
                            <li class="btn btn-light">Waffle Fries <span>$2.49</span></li>
                        </ul>
                    </div>
                    <br>

                    <div class="row">
                        <h4 class="col-md-12">Wings and Chunks</h4>
                        <br>

                        <ul>
                            <li class="btn btn-light">Bone in wings(5pc) <span>$5.99</span></li>
                            <li class="btn btn-light">Bone in wings(10pc) <span>$9.99</span></li>
                            <li class="btn btn-light">Boneless wings(5pc)<span>$5.49</span></li>
                            <li class="btn btn-light">Boneless wings(10pc)<span>$9.49</span></li>
                            <li class="btn btn-light">Grilled Boneless wings(5pc)<span>$5.49</span></li>
                            <li class="btn btn-light">Grilled Boneless wings(10pc)<span>$9.49</span></li>
                            <li class="btn btn-light">Chicken Tenders<span>$9.99</span></li>
                        </ul>
                    </div>
                    <br>

                    <div class="row">
                        <h4 class="col-md-12">Sauces</h4>
                        <br>

                        <ul>
                            <li class="btn btn-light" type="checkbox" value="sauce">Hot Buffalo</li>
                            <li class="btn btn-light" type="checkbox" value="sauce">Mild Buffalo</li>
                            <li class="btn btn-light" type="checkbox" value="sauce">Parmesan Garlic</li>
                            <li class="btn btn-light" type="checkbox" value="sauce">Boom Boom</li>
                            <li class="btn btn-light" type="checkbox" value="sauce">BBQ</li>
                            <li class="btn btn-light" type="checkbox" value="sauce">Hot BBQ</li>
                        </ul>
                    </div>
                    <br>

                    <div class="row">
                        <h4 class="col-md-12">Beverages</h4>
                        <br>

                        <ul>
                            <li class="btn btn-light">Canned soda <span>$1.49</span></li>
                            <li class="btn btn-light">Coffee <span>$1.99</span></li>
                            <li class="btn btn-light">Bottled Water <span>$1.49</span></li>
                            <li class="btn btn-light">Bottle Laziza <span>$1.99</span></li>
                            <li class="btn btn-light">Bottle Barbican <span>$1.99</span></li>
                            <li class="btn btn-light">Hot Tea <span>$1.49</span></li>
                            <li class="btn btn-light">Nescafe (3 in 1) <span>$1.99</span></li>
                        </ul>
                    </div>
                    <br>

                    <div class="row">
                        <h4 class="col-md-12">Smoothies</h4>
                        <br>

                        <ul>
                            <li class="btn btn-light">Four Berry Blend <span>$3.99</span></li>
                            <li class="btn btn-light">Mango Strawberry <span>$1.99</span></li>
                            <li class="btn btn-light">Strawberry Banana <span>$1.49</span></li>
                        </ul>
                    </div>
                    <br>



                </div>
            </div>
        </div>



        <div id="Cart" class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Order Summary</h5>

                    <h3 class="text-center" id="table_number"></h3>

                    <table>

                        <tbody>
                            <tr></tr>
                        </tbody>
                    </table>

                    <div class="text-center">
                        <textarea name="comments" class="form-control" placeholder="Add Comment" style="margin: 5px" id="comments" ></textarea>
                    </div>

                    <button href="#" type="submit" class="btn btn-success pull-right" id="send">Send to Kitchen</button>



                </div>
            </div>
        </div>
    </div>

    </form>
</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script>

    $(document).ready(function () {


        var order = [];
        $("#menu-section ul li").click(function () {
            var value= $(this).text();

            $(this).removeClass('btn-light').addClass('btn-secondary');
            console.log(value);
            $('table tbody').append('<tr><td>'+ value +'</td></tr>');
            order.push(value);
            console.log(order);
        });
        $("#form").submit( function(eventObj) {
            $('<input />').attr('type', 'hidden')
                .attr('name', "orderRequest")
                .attr('value', order)
                .appendTo('#form');
            return true;
        });

        $("#table_num").change(function () {
            var table_num = $('#table_num').val();
            $('#table_number').text('Table Number:'+ table_num );
        })
    });


</script>

@endsection
