<main style="background-color: #ebe7e3;">
<br>
<div class="container">
<form method="post" action="contragent/updzakaz">
            <div class="row">
                    <div class="col-4">
                    <label for="text" class="form-label">ID заказа</label>
                    </div>
                    <div class="col-4">
                    <label for="text" class="form-label">Наименование рыбы</label>
                    </div>
                    <div class="col-4">
                    <label for="text" class="form-label">Количество</label>
                    </div>
            </div>
            <?php
            foreach($contr as $row)
            {
                echo '
                <div class="row">
                    <div class="col-4">
                        <input type="text" class="form-control" name="OrderID" id="OrderID" value="'.$row['OrderID'].'" readonly>
                    </div>
                    <div class="col-4">
                    <input type="text" class="form-control" name="ProductName" id="ProductName" value="'.$row['ProductName'].'"readonly>
                    </div>
                    <div class="col-2">
                    <input type="text" class="form-control" name="OrderCount" id="OrderCount" value="'.$row['OrderCount'].'"><br>
                    </div>
                ';
            }
            ?>
        <div class="col-2">
        <button type="submit" class="btn btn-danger">Изменить</button><br><br>
        </div>
      </div>
  </form>
</div>
  </main>