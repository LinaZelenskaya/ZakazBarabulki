<main style="background-color: #ebe7e3;">
    <div class="container mb-2"><br>
    <form method="POST" action="admin/inssuser">
                <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class ="col-lg-2">
                            <input type="text" class="form-control"  id="LastName" name="LastName" placeholder="Фамилия">
                        </div>
                        <div class ="col-lg-2">
                            <input type="text" class="form-control"  id="FirstName" name="FirstName" placeholder="Имя">
                        </div>
                        <div class ="col-lg-2">
                            <input type="text" class="form-control"  id="FatherName" name="FatherName" placeholder="Отчество">
                        </div>
                        <div class ="col-lg-2">
                        <select class="form-select" aria-label="Default select example" name="ContragentName" id="ContragentName">
                                    <option value=""></option>
                                <?php
                                    foreach($contragent as $row)
                                    {
                                       echo '<option value="'.$row['ContragentID'].'">'.$row['ContragentName'].'</option>';
                                    }
                                ?>
                                </select>
                        </div>
                        <div class ="col-lg-2">
                        <input type="text" class="form-control"  id="UserLogin" name="UserLogin" placeholder="Логин">
                        </div>
                        <div class ="col-lg-2">
                        <input type="text" class="form-control"  id="UserPassword" name="UserPassword" placeholder="Пароль">
                        </div>
                        <div class ="col-lg-4">
                            <br><button type="submit" class="btn btn-danger">Новый пользователь</button>
                        </div>
                    </div>
                </div></div></form>
                </div> 
                <div class="container mb-5"><br>
                <div class="mb-3">
            </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID пользователя</th>
                                <th>Фио</th>
                                <th>Контрагентство</th>
                                <th>Телефон</th>
                                <th>Адрес</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                            foreach($users as $row)
                            {
                                echo '<tr>
                                <td>'.$row['UserID'].'</td>
                                <td>'.$row['Fio'].'</td>
                                <td>'.$row['ContragentName'].'</td>
                                <td>'.$row['ContragentPhone'].'</td>
                                <td>'.$row['ContragentAdress'].'</td>';

                                if(!empty($row['users']))
                                {
                                   echo'<th>'.$row['users'].'</th>';
                                }
                                else
                                {
                                    echo '<th><a href="admin/deleteuser/'.$row['UserID'].'"><button type="button" class="btn btn-danger">Удалить</button></a></th>';
                                    echo '<th><a href="admin/upduser/'.$row['UserID'].'"><button type="button" class="btn btn-danger">Редактировать</button></a></th>';
                                }
                                echo '</tr>';
                            }
                            
                        ?>
                    </table>
                <div class="col-1"></div>
            </div>
            </div><br>
    </div>
    </main>