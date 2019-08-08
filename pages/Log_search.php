<?php include_once("../layout/header.php"); ?>

<div class="wrap">
    <h3 class="page-header">ログ検索</h3> 
    <div class="col-md-12">
        <form class="example" action="/action_page.php">
            <input type="text" placeholder="検索" name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
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