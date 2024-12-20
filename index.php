<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

      <!-- blogname-->
      <div class="row">
        <h1>matublog</h1>
      </div>

      <!--nav var-->
      <div class="row">
        <nav class="navbar bg-body-tertiary">
          <div class="container-fluid d-flex justify-content-start" >
            <button type="button" class="btn btn-light">
              <a class="navbar-brand" href="subhtml/Home2.php">Home</a>
            </button>
            <button type="button" class="btn btn-light">
              <a class="navbar-brand" href="subhtml/Works.php">Works</a>
            </button>
            <button type="button" class="btn btn-light">
              <a class="navbar-brand" href="subhtml/Output.php">Output</a>
            </button>
            <button type="button" class="btn btn-light">
              <a class="navbar-brand" href="subhtml/About.php">About</a>
            </button>
          </div>
        </nav>
      </div>
      
      <!-- title -->
      <div class="row">
        <div class="d-flex justify-content-center">
          <h3>Home</h3>
        </div>
      </div>

      <!-- 記事box -->
      <div class="row">
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">準備中</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">準備中</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">準備中</p>
            </div>
          </div>
        </div>
      </div>

      <!-- 記事移動ボタン 
      <div class="row">
        <nav aria-label="Page navigation example">
          <div class="d-flex justify-content-center">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">1</a></li>
            </ul>
          </div>
        </nav>
      </div>
      -->
    </div>
  </body>
</html>