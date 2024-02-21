<main >
<div class="container mb-5">
      <div class="row">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php
          foreach($fish as $row)
            echo '<div class="col">
            <div class="card">
              <img src="../img/'.$row['ProductPhoto'].'" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">'.$row['ProductName'].'</h5>
                <p class="card-text">Цена за штуку: '.$row['ProductPrice'].'<br></p>
              </div>
              <div class="card-footer">
                <a href="admin/updprice/'.$row['ProductID'].'"><button type="button" class="btn btn-danger">Изменить цену</button></a>
              </div>
            </div>
          </div>';
          ?>
        </div>
</div>
</main>