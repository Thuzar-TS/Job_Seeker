<?php include_once("../layout/header.php"); ?>
<div class="wrap col-md-12 pad-free">
    <!-- <div class="row">
        <div class="col-md-1 mb-20">
            <a href="Customer_create.php" class="btn btn-all col-md-12">お客様作成</a>
        </div>
    </div> -->
    <div class="panel panel-info">
        <!-- <div class="panel-heading"> -->
            <h4 class="page-header">
                
            ログ検索
                
            </h4>
        <!-- </div> -->
        <div class="panel-body">
            <div class="col-md-12 pad-free mb-20">
                <!-- <div class="alert alert-info">Search</div> -->
                <div class="col-xs-6 col-md-10">
                    <input type="text" class="form-control" placeholder="検索" id="txtSearch">
                </div>
                <div class="col-xs-6 col-md-2">
                
                    <button class="btn btn-primary col-md-12 searchBtn" type="submit">
                        <span class="glyphicon glyphicon-search side-icon"></span> 検索
                    </button>
            
                </div>
            </div>
            
            <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-body">
                <div class="col-md-12">
                    <h4>リスト表示</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th scope="col">日付</th>
                            <th scope="col">職名</th>
                            <th scope="col">名</th>
                            <th scope="col">メール</th>
                        </thead>
                        <tbody>
                    <tr>
                    <td>08/08/2019</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <td>08/08/2019</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <td>08/08/2019</td>
                    <td>Larry the Bird</td>
                    <td>Thornton</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


        </div>

    </div>
</div>
            
<?php include_once("../layout/footer.php"); ?>