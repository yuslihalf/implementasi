@extends ('layout/mainlayout')

@section('page_title','Admin LTE 3 | Test')

@section('title', 'Blank Page')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('konten')
<section class="content">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Test Data</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">

        
        <html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="756002855791-r01sqd59r275qa4t1tsuq7vp1nn3kkel.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <div id="content"></div>
    <div id="content2"></div>
    <div id="content3"></div>
    <button onClick="signOut()">Sign Out</button>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        var element = document.querySelector('#content')
        element.innerText = profile.getId();
        var element = document.querySelector('#content2')
        element.innerText = profile.getName();
        var element = document.querySelector('#content3')
        element.innerText = profile.getEmail();

        var image = document.createElement('img')
        image.setAttribute('src', profile.getImageUrl())
        element.append(image)

        
      }

      function signOut(){
        gapi.auth2.getAuthInstance().signOut().then(function(){
          console.log('user signed out')
        })
      }
    </script>
  </body>
</html>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    
    <!-- /.content -->
  </div>
  </section>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
@endsection
