<main>
<br><br>
<div class="container">
<form method="post" action="admin/updpdcontr2">
      <div class="row">
        <div class="col-12">
            <?php
            foreach($contragent as $row)
            {
                echo '
                <input type="text" class="form-control" name="ContragentID" id="ContragentID" value="'.$row['ContragentID'].'" placeholder="ID"hidden><br>
                </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <label for="text" class="form-label">Название</label>
                <input type="text" class="form-control" name="ContragentName" id="ContragentName" value="'.$row['ContragentName'].'" placeholder="Название"><br>
                </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <label for="text" class="form-label">Адрес</label>
                    <input type="text" class="form-control" name="ContragentAdress" id="ContragentAdress" value="'.$row['ContragentAdress'].'"placeholder="Адрес"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <label for="text" class="form-label">Номер телефона</label>
                    <input type="text" class="form-control" name="ContragentPhone" id="ContragentPhone" value="'.$row['ContragentPhone'].'"placeholder="Телефон"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <label for="text" class="form-label">Банковские реквизиты</label>
                    <input type="text" class="form-control" name="ContragentBankRecvezit" id="ContragentBankRecvezit" value="'.$row['ContragentBankRecvezit'].'"placeholder="<Банковские реквезиты"><br>
                    </div>
                ';
            }
            ?>
        
      </div>
      <div class="row">
        <div class="col-12">
        <button type="submit" class="btn btn-danger">Изменить</button><br><br>
        </div>
      </div>
  </form>
</div>
  </main>