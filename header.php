<?php
echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="upload.php">Upload Project/image</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="loginfinal.php">Logout <span class="sr-only">(current)</span></a>
      </li>
    <form class="form-inline my-2 my-lg-0"  action="faculty_det.php" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search subject to see resp. faculty"  name="search-btn" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
    </form>
  </div>
</nav>'
?>

