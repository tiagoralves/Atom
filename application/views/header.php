<!DOCTYPE html>
<html>
<head>
  <title><?php echo $titulo; ?></title>
<?php
    echo "<link rel='stylesheet' href='".base_url('assets/bootstrap/css/bootstrap.min.css')."'>";
    echo "<script src='".base_url('assets/bootstrap/js/bootstrap.min.js')."' type='text/javascript' language='javascript'>";
?>
<header role="banner" class="navbar navbar-fixed-top navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    </div>
    <div class="navbar-inverse side-collapse in">
      <nav role="navigation" class="navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#Home">Home</a></li>
          <li><a href="#users">Users</a></li>
          <li><a href="http://placesforlove.com">Places</a></li>
        </ul>
      </nav>
    </div>
  </div>
  </header>
  <div class="container side-collapse-container">
    <div class="row">
      <h1>Hello</h1>
      <p>This is a side opening nav demonstration</p>
      <p>Make your browser smaller and the top menu wil become into a lateral slider menu</p>
    </div>
  </div>