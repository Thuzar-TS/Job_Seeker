<?php include_once("../layout/header.php"); ?>

<div class="wrap">
    <h3 class="page-header">ログ検索</h3> 
    <div class="col-md-12 pad-free mb-20">
        <form action="/action_page.php">
            <div class="col-xs-6 col-md-10">
                <input type="text" class="form-control" placeholder="検索" id="logSearch">
            </div>
            <div class="col-xs-6 col-md-2">
            
                <button class="btn btn-primary col-md-12 searchBtn" type="submit">
                    <span class="glyphicon glyphicon-search side-icon"></span> 検索
                </button>
        
            </div>
        </form>
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
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
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
<?php include_once("../layout/footer.php"); ?>