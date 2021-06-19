<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing:border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #04AA6D;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
}
</style>
</head>
<body>

<div style="text-align:center">
  <h2>Please select your product which you want to buy</h2>
  <p>THe product list is hear.</p>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font" name="Bag" ><b>Bags</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>All types of Bags?</b></h1>
      <button class="button"><a href="{{ url('create/')}}">Get Product</a></button>
    </div>
    <div class="column-33">
        <img src="{{ asset('image/bag.jpg') }}" width="335" height="471">
        
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="container" style="background-color:Snow ">
  <div class="row">
    <div class="column-33">
      <img src="{{ asset('image/bottles.jpg') }}" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font" name="Bottles"><b>Bottles</b></h1>
      <h1 class="large-font" style="color:red;"><b>All types of Bottles</b></h1>
     <button class="button" style="background-color:red"><a href="{{ url('create/') }}">Get Product</a></button>
    </div>
  </div>
</div>

<!-- The App Section -->
<div class="container" style="background-color:HoneyDew ;">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font" name="Camera"><b>Camera</b></h1>
      <h1 class="large-font" style="color:cyan;"><b>Alltypes of Camera</b></h1>
      <button class="button" style="background-color:cyan"><a href="{{ url('create/') }}">Get Product</a></button>
    </div>
    <div class="column-33">
        <img src="{{ asset('image/camera.jpg') }}" width="335" height="471" >
    </div>
  </div>
</div>




<div class="container" style="background-color:Lavender;">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font" name="Headphones"><b>Head Phones</b></h1>
      <h1 class="large-font" style="color:Fuchsia ;"><b>All Brands avalible hear</b></h1>
      <button class="button" style="background-color:DarkOrchid  "><a href="{{ url('create/') }}">Get Product</a></button>
    </div>
    <div class="column-33">
        <img src="{{ asset('image/headphones.jpg') }}" width="335" height="471" >
    </div>
  </div>
</div>


<div class="container" style="background-color:MintCream ;">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font" name="Laptop"><b>LAPTOPS</b></h1>
      <h1 class="large-font" style="color:HotPink ;"><b>All Brands Avalible hear</b></h1>
      <button class="button" style="background-color:DeepPink "><a href="{{ url('create/') }}">Get Product</a></button>
    </div>
    <div class="column-33">
        <img src="{{ asset('image/laptops.jpg') }}" width="335" height="471" >
    </div>
  </div>
</div>


<div class="container" style="background-color:Azure ";>
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font" name="Mobile"><b>MOBILES</b></h1>
      <h1 class="large-font" style="color:PaleGoldenRod ;"><b>ALL Brands Avalible Hear </b></h1>
      <button class="button" style="background-color:gold"><a href="{{ url('create/') }}">Get Product</a></button>
    </div>
    <div class="column-33">
        <img src="{{ asset('image/phones.jpg') }}" width="335" height="471" >
    </div>
  </div>
</div>

<div class="container" style="background-color:AliceBlue ";>
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"name="Shoes"><b>SHOES</b></h1>
      <h1 class="large-font" style="color:SeaGreen  ;"><b>All Brands  Avalible Hear</b></h1>
      <button class="button" style="background-color:LimeGreen"><a href="{{ url('create/') }}">Get Product</a></button>
    </div>
    <div class="column-33">
        <img src="{{ asset('image/shoes.jpg') }}" width="335" height="471" >
    </div>
  </div>
</div>


<div class="container" style="background-color:GhostWhite "; >
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font" name="Watches"><b>WATCHES</b></h1>
      <h1 class="large-font" style="color:LightSkyBlue;"><b>All Brands Avalible Hear</b></h1>
     <button class="button" style="background-color:DodgerBlue "><a href="{{ url('create/') }}">Get Product</a></button>
    </div>
    <div class="column-33">
        <img src="{{ asset('image/wathches.jpg') }}" width="500" height="471" >
    </div>
  </div>
</div>


</body>
</html>
