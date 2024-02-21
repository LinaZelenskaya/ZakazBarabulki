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
                                <th>ID контрагента</th>
                                <th>Контрагент</th>
                                <th>Адрес</th>
                                <th>Телефон</th>
                                <th>Банковские реквезиты</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                            foreach($contragent as $row)
                            {
                                echo '<tr>
                                <td>'.$row['ContragentID'].'</td>
                                <td>'.$row['ContragentName'].'</td>
                                <td>'.$row['ContragentAdress'].'</td>
                                <td>'.$row['ContragentPhone'].'</td>
                                <td>'.$row['ContragentBankRecvezit'].'</td>';
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