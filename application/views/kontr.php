<main style="background-color: #ebe7e3;">
    <div class="container mb-5"><br>
    <div class="row">
            <div class="row">
            
                <div class="col-1"></div>
                <div class="col-10">
                <div class="col-lg-12">
                    <h1 style="color: #dc3545;">Все контрагенты</h1><hr style="color: #dc3545;"><br><br>
                </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Наименование</th>
                                <th>Адрес</th>
                                <th>Телефон</th>
                                <th>Банковсткие реквизиты</th>
                            </tr>
                        </thead>
                        <?php                                                
                            foreach($contragent as $row)
                            {
                                echo 
                                '<tr>
                                <td>'.$row['ContragentID'].'</td>
                                <td>'.$row['ContragentName'].'</td>
                                <td>'.$row['ContragentAdress'].'</td>
                                <td>'.$row['ContragentPhone'].'</td>
                                <td>'.$row['ContragentBankRecvezit'].'</td>
                                </tr>';
                            }                        
                        ?>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>
        </div><br>
        </div></div></div>
    </div>
</main>