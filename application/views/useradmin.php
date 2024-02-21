<main style="background-color: #ebe7e3;">
    <div class="container mb-2"><br>
    <form method="POST" action="admin/inssagent">
                <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class ="col-lg-2">
                            <input type="text" class="form-control"  id="ContragentName" name="ContragentName" placeholder="Название">
                        </div>
                        <div class ="col-lg-2">
                            <input type="text" class="form-control"  id="ContragentAdress" name="ContragentAdress" placeholder="Адрес">
                        </div>
                        <div class ="col-lg-2">
                            <input type="text" class="form-control"  id="ContragentPhone" name="ContragentPhone" placeholder="Телефон">
                        </div>
                        <div class ="col-lg-2">
                            <input type="text" class="form-control"  id="ContragentBankRecvezit" name="ContragentBankRecvezit" placeholder="Банковские реквезиты">
                        </div>
                        <div class ="col-lg-4">
                            <button type="submit" class="btn btn-danger">Новый контрагент</button>
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
                                <th>Фамилия</th>
                                <th>Имя</th>
                                <th>Отчество</th>
                                <th>Роль</th>
                                <th>Логин</th>
                                <th>Пароль</th>
                                <th>Пароль</th>
                                <th>Id контрагенства</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                            foreach($contragent as $row)
                            {
                                echo '<tr>
                                <td>'.$row['UserID'].'</td>
                                <td>'.$row['LastName'].'</td>
                                <td>'.$row['FirstName'].'</td>
                                <td>'.$row['FatherName'].'</td>
                                <td>'.$row['RoleID '].'</td>
                                <td>'.$row['UserLogin '].'</td>
                                <td>'.$row['UserPassword '].'</td>';
                                if(!empty($row['contragent']))
                                {
                                   echo'<th>'.$row['contragent'].'</th>';
                                }
                                else
                                {
                                    echo '<th><a href="admin/deletecontr/'.$row['ContragentID'].'"><button type="button" class="btn btn-danger">Удалить</button></a></th>';
                                    echo '<th><a href="admin/updpdcontr/'.$row['ContragentID'].'"><button type="button" class="btn btn-danger">Редактировать</button></a></th>';
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