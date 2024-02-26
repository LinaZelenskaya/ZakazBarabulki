<main style="background-color: #ebe7e3;">
<br>
<div class="container">
<form method="post" action="admin/upddprice2">
      <div class="row">
        <div class="col-lg-12">
                    <div class="row">
                        <div class ="col-lg-4">
                        <label for="text" class="form-label">Тип прайса</label>
                        </div>
                        <div class ="col-lg-4">
                        <label for="text" class="form-label">Рыба</label>
                        </div>
                        <div class ="col-lg-4">
                        </div>
                    </div>
                    <?php
                    foreach($priceID as $row)
                    {
                        echo'<input type="hidden" class="form-control" name="PriceID" id="PriceID" value="'.$row['PriceID'].'" >';
                    }
                    ?>
                <div class="row">
                    <div class ="col-lg-4">
                        <select class="form-select" aria-label="Default select example" name="TypeName" id="TypeName">
                                    <option value=""></option>
                                    <?php
                                    foreach($typeprice as $row)
                                    {
                                     echo'<option value="'.$row['TypeID'].'">'.$row['TypeName'].'</option>';
                                    }
                                    ?>
                        </select>
                    </div>
                    <div class ="col-lg-4">
                        <select class="form-select" aria-label="Default select example" name="ProductName" id="ProductName">
                            <option value=""></option>
                                <?php
                                foreach($product as $row)
                                {
                                    echo '<option value="'.$row['ProductID'].'">'.$row['ProductName'].'</option>';
                                }
                                ?>
                        </select>
                    </div>
            <div class="col-4">
                <button type="submit" class="btn btn-danger">Изменить</button><br><br>
            </div> </div>
      </div>
  </form>
</div>
  </main>