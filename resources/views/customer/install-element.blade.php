
@extends('layout.navbar.navbar')
<?php 
	$title= "Install-Element";
?>

@section('content')

  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card text-left">
            <h4 class="card-title text-center">কস্তি পরিশোধ ফরম</h4>
            <div class="form-content">
              <form action="#">
           <div class="input-group-1">
                <label for="name">জাতীয় পরিচয় পএ নাং দিন</label>
                <div class="input-group">
                  <input id="name" type="number" class="form-control" required>
                </div>
               </div>
                <div class="input-group">
                  <input style="text-transform: uppercase;" class="btnn" type="submit" value="জমা দিন">
                </div>
              </form>
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>

  @endsection