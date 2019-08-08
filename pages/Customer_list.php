<?php include_once("../layout/header.php"); ?>
<div class="wrap col-md-12 pad-free">
    <div class="row">
        <div class="col-md-1 mb-20">
            <a href="Customer_create.php" class="btn btn-all col-md-12">お客様作成</a>
        </div>
    </div>
    <div class="panel panel-info">
        <!-- <div class="panel-heading"> -->
            <h4 class="page-header">
                
            顧客情報
                
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
                        <div class="col-md-1">
                            <img src="../images/1.png" alt="" class="col-md-12 pad-free">
                        </div>
                        <div class="col-md-11">
                            <a href="Customer_view.php">First Company </a>
                            Name <br>
                            ID <br>
                            Info <br><br>
                            <a href="#" class="edit-btn"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;
                                <a href="#" class="del-btn"><span class="glyphicon glyphicon-trash"></span></a>
                        </div>
                        
                    </div>        
                </div>            
            </div>

            <div class="col-md-12">                
                <div class="panel panel-info"> 
                    <div class="panel-body">
                        <div class="col-md-1">
                            <img src="../images/2.png" alt="" class="col-md-12 pad-free">
                        </div>
                        <div class="col-md-11">
                            <a href="Customer_view.php">First Company </a>
                            Name <br>
                            ID <br>
                            Info <br><br>
                            <a href="#" class="edit-btn"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;
                                <a href="#" class="del-btn"><span class="glyphicon glyphicon-trash"></span></a>
                        </div>
                        
                    </div>        
                </div>            
            </div>

            <div class="col-md-12">                
                <div class="panel panel-info"> 
                    <div class="panel-body">
                        <div class="col-md-1">
                            <img src="../images/3.png" alt="" class="col-md-12 pad-free">
                        </div>
                        <div class="col-md-11">
                            <a href="Customer_view.php">First Company </a>
                            Name <br>
                            ID <br>
                            Info <br><br>
                            <a href="#" class="edit-btn"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;
                                <a href="#" class="del-btn"><span class="glyphicon glyphicon-trash"></span></a>
                        </div>
                        
                    </div>        
                </div>            
            </div>
        </div>
        

        
        
        <!-- <ul style="list-style: none;">
            <li>
                <button>新規</button>
            </li>
            <li>
                <input type="text"><button>検索</button>顧客ID、顧客名で検索できるようにする
            </li><li><br></li><li>
                顧客ID:<input type="text">
            </li><li>
                顧客名:<input type="text">
            </li><li>
                URL:<input type="text">
            </li><li>
                TEL:<input type="text">
            </li><li>
                メール:<input type="text"><button>追加</button>
            </li>
        </ul>

        <div>
            <button>登録</button><button>削除</button>
        </div> -->
    </div>
</div>
            
<?php include_once("../layout/footer.php"); ?>