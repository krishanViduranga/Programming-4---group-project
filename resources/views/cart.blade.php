@extends('master')
@section('title', 'Cart')
@section('section')
	@if(Session::has('cart'))
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					@foreach($products as $product)
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$product['item']['product_name']}}</a></h4>
								{{--<p>...Web ID: 1089772</p>--}}
							</td>
							<td class="cart_price">
								<p>{{$product['price']}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$product['qty']}}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>

								</div>
							</td>
							@endforeach
							<td class="cart_total">
								<p class="cart_total_price">{{ $totalPrice }}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						{{--<tr>--}}
							{{--<td class="cart_product">--}}
								{{--<a href=""><img src="images/cart/two.jpg" alt=""></a>--}}
							{{--</td>--}}
							{{--<td class="cart_description">--}}
								{{--<h4><a href="">...YAMAHA A12B BREAK SYSTEM</a></h4>--}}
								{{--<p>...Web ID: 1089772</p>--}}
							{{--</td>--}}
							{{--<td class="cart_price">--}}
								{{--<p>$59</p>--}}
							{{--</td>--}}
							{{--<td class="cart_quantity">--}}
								{{--<div class="cart_quantity_button">--}}
									{{--<a class="cart_quantity_up" href=""> + </a>--}}
									{{--<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">--}}
									{{--<a class="cart_quantity_down" href=""> - </a>--}}
								{{--</div>--}}
							{{--</td>--}}
							{{--<td class="cart_total">--}}
								{{--<p class="cart_total_price">$59</p>--}}
							{{--</td>--}}
							{{--<td class="cart_delete">--}}
								{{--<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>--}}
							{{--</td>--}}
						{{--</tr>--}}
						{{--<tr>--}}
							{{--<td class="cart_product">--}}
								{{--<a href=""><img src="images/cart/three.jpg" alt=""></a>--}}
							{{--</td>--}}
							{{--<td class="cart_description">--}}
								{{--<h4><a href="">...YAMAHA 232B SUSPENSION SYSTEM</a></h4>--}}
								{{--<p>...Web ID: 1089772</p>--}}
							{{--</td>--}}
							{{--<td class="cart_price">--}}
								{{--<p>$59</p>--}}
							{{--</td>--}}
							{{--<td class="cart_quantity">--}}
								{{--<div class="cart_quantity_button">--}}
									{{--<a class="cart_quantity_up" href=""> + </a>--}}
									{{--<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">--}}
									{{--<a class="cart_quantity_down" href=""> - </a>--}}
								{{--</div>--}}
							{{--</td>--}}
							{{--<td class="cart_total">--}}
								{{--<p class="cart_total_price">$59</p>--}}
							{{--</td>--}}
							{{--<td class="cart_delete">--}}
								{{--<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>--}}
							{{--</td>--}}
						{{--</tr>--}}
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<button style="float: right;margin-right: 80px;margin-bottom: -20px;" class="btn btn-success">Checkout</button>
	@else

	@endif
@endsection