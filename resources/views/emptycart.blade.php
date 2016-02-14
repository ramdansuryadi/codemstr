@extends('checkout')

@section('title', 'Shipping')

@section('content')

<!-- header section -->
<div class="cart-header">
  <div class="wrapper">
    <div class="cart-track">
      <div class="cart-track-list last">
        <a href="{{URL('/result')}}"><p>Back to Search</p></a>
      </div>
      <div class="cart-track-list">
        <span class="glyphicon glyphicon-menu-right"></span>
      </div>
      <div class="cart-track-list last">
        <a href="{{URL('/cart')}}"><p>My Cart</p></a>
      </div>
      <div class="cart-track-list">
        <span class="glyphicon glyphicon-menu-right"></span>
      </div>
      <div class="cart-track-list active">
        <a href="#"><p>Shipping Addres</p></a>
      </div>
      <div class="cart-track-list">
        <span class="glyphicon glyphicon-menu-right"></span>
      </div>
      <div class="cart-track-list">
        <a href="#"><p>Payment Options</p></a>
      </div>
      <div class="cart-track-list">
        <span class="glyphicon glyphicon-menu-right"></span>
      </div>
      <div class="cart-track-list">
        <a href="#"><p>Order Overview</p></a>
      </div>
      <div class="cart-track-list">
        <span class="glyphicon glyphicon-menu-right"></span>
      </div>
      <div class="cart-track-list">
        <a href="#"><p>Confirmation</p></a>
      </div>
    </div>
  </div>
</div>

<!-- content section -->
<div id="tf-cart">
  <div class="wrapper">
    <div class="myCart">
      <div class="myCart-header">
        <a href="{{URL('/result')}}">
          <div class="myCart-back-icon">
            <span class="glyphicon glyphicon-menu-left"></span>
          </div>
          <div class="myCart-back">
            <p>Back to Search</p>
          </div>
        </a>
        <div class="myCart-title">
          My Cart
        </div>
      </div>
      <div class="myCart-order">
        <div class="emptyCart-container">
          <div class="emptyCart-greet">
            <p>
              There are currently no items in your cart.
              Back to search for some parts or
              use your own saved preset order.
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
