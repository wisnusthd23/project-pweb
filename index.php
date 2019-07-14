<?php 
  include'aksi.php'; 
 ?>
 <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="materialize.min.js"></script>
    </head>

    <body>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Web Developer Portofolio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="tuliskeahlian.php">Tulis Keahlian</a></li>
        <li><a href="badges.html">Upload Karya</a></li>
      </ul>
    </div>
  </nav>
   <div class="row">
    <form action="index.php" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input id="namaDeveloper" type="text" name="namadevloper" class="validate" autocomplete="off" autofocus="on">
          <label for="namaDeveloper">Nama</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="alamatDeveloper" type="text" name="alamatdevloper" class="validate" autocomplete="off">
          <label for="alamatDeveloper">Alamat</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="noHpDeveloper" type="text" name="nohpdevloper" class="validate" autocomplete="off">
          <label for="noHpDeveloper">Nomor Hp</label>
        </div>
      </div>
       <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>


        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Copyright bella
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        
    </body>
  </html>