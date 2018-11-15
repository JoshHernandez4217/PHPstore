<?php

require_once 'Header.php';
?>
<head>

<link rel="stylesheet" type="text/css" href="../../Presentation/store.css">
</head>
<body class="homepage" link="white">


<div class="container">
<div class="Header">
<h1>Create a New Product</h1>
</div>

<div class="ResultsHeader" >
<form action="../Handlers/processNewProduct.php">
  <div class="form-group">
    <label for="name">Soda Name</label>
    <input type="text" class="form-control" id="name" placeholder="name" name="name">
  </div>
  
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" placeholder="Description" name="description">
  </div>
  
  <div class="form-group">
    <label for="Price">Price</label>
    <input type="number" class="form-control" id="price" placeholder="Price" name="price">
  </div>
  
  <div class="form-group">
  <label for="photo">Photo</label><br>
  <select name="photo">
  <option>7upGold.jpg</option>
<option>CocaColaBlaK.jpg</option>
<option>CokeII.jpg</option>
<option>CrystalPepsi.jpg</option>
<option>EctoCooler.jpg</option>
<option>FlinstonesGraniteGrape.jpg</option>
<option>FlintstonesRockCola.jpg</option>
<option>Jolt.jpg</option>
<option>Josta.jpg</option>
<option>LifeSavers.jpg</option>
<option>MarioSoda.jpg</option>
<option>Orbitz.jpg</option>
<option>PacManSoda.jpg</option>
<option>PepsiFIRE.jpg</option>
<option>PepsiICE.jpg</option>
<option>Surge.jpg</option>
<option>TruRootbeer.jpg</option>
<option>WhiteLightNin.jpg</option>
  </select>
	</div>
	
	<button type="submit" class="btn btn-outline-dark">Done</button>
</form>
</div>
</div>