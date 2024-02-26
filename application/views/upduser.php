<main>
<br><br>
<div class="container">
<form method="post" action="admin/upduser2">
      <div class="row">
        <div class="col-12">
            <?php
            foreach($users as $row)
            {
                echo '
                <input type="text" class="form-control" name="UserID" id="UserID" value="'.$row['UserID'].'" placeholder="ID"hidden><br>
                </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <label for="text" class="form-label">Фамилия</label>
                <input type="text" class="form-control" name="LastName" id="LastName" value="'.$row['LastName'].'" placeholder="Фамилия"><br>
                </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <label for="text" class="form-label">Имя</label>
                    <input type="text" class="form-control" name="FirstName" id="FirstName" value="'.$row['FirstName'].'"placeholder="Имя"><br>
                    </div>
                </div>
                <div class="row">
                <div class="col-12">
                <label for="text" class="form-label">Отчество</label>
                <input type="text" class="form-control" name="FatherName" id="FatherName" value="'.$row['FatherName'].'"placeholder="Отчество"><br>
                </div>
            </div>
                <div class="row">
                    <div class="col-12">
                    <label for="text" class="form-label">Логин</label>
                    <input type="text" class="form-control" name="UserLogin" id="UserLogin" value="'.$row['UserLogin'].'"placeholder="Логин"><br>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                    <label for="text" class="form-label">Пароль</label>
                    <input type="text" class="form-control" name="UserPassword" id="UserPassword" value="'.$row['UserPassword'].'"placeholder="<Пароль"><br>
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