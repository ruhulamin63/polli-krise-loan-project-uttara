@extends('layout.navbar.navbar')
<?php 
	$title= "Login";
?>

@section('content')

    <section id="registration">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card text-left">
            <div class="agriculture_form">
              <div class="card text-left">
                  <h4 class="card-title text-center">লগইন তথ্য দিন</h4>
                  <div class="form-content">
                    <form action="#">
                 <div class="input-group-1">
                      <label for="name">মোবাইল নাং দিন</label>
                      <div class="input-group">
                        <input id="name" type="number" class="form-control" required>
                      </div>
                     </div>
                 <div class="input-group-1">
                      <label for="passwrd">পাসওয়ার্ড</label>
                      <div class="input-group">
                        <input id="passwrd" type="password" class="form-control" required>
                      </div>
                     </div>
                      <div class="input-group">
                        <input style="text-transform: uppercase;" class="btnn" type="submit" value="লগইন করুন">
                      </div>
                    </form>
                  </div>
              </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  

@endsection