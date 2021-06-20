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
@foreach($data as $data)
<div class="container" style="background-color:HoneyDew ;">
  <div class="row">
    <div class="column-66">
    
      <h1 class="xlarge-font" name="Camera"><b><?= $data['Products'];?></b></h1>
      <h1 class="large-font" style="color:cyan;"><b><?= $data['products_detail'];?></b></h1>
      <button class="button" style="background-color:cyan"><a href="{{ url('create/') }}">Get Product</a></button>
    </div>
    <div class="column-33">
        <img src="/assets/images/{{$data->image}}" />
    </div>
  
  </div>
</div>
@endforeach
</body>
</html>
