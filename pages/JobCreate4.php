<?php include_once("../layout/header.php"); ?>
    <div class="wrap">

        <h3 class="C4-heading">データ生成・登録</h3>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel-group">
                    <div class="panel panel-info">
                    <div class="panel-heading">顧客ID JOBID 顧客名　求人名</div>

                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <button class="btn btn-default C4-color">ステータス変更</button>
                                </div>
                                <div class="col-md-3 C4-select">
                                    <select class="form-control form-control-sm C4-color">
                                        <option selected="selected">未公開</option>
                                        <option>Index申請済</option>
                                        <option>掲載確認できず調整中</option>
                                        <option>掲載確認済</option>
                                        <option>掲載終了</option>
                                    </select>
                                </div>
                            </div>  
                            <br> 
                            <div class="row">
                                <div class="col-md-3">
                                    <button class="btn btn-default C4-color">データ生成</button>
                                </div>
                            </div>   
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <p>最終データ生成日　2019/08/01</p>
                                </div>
                            </div> 
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <button class="btn btn-default C4-color">求人HP表示</button>
                                </div>
                                <div class="col-md-2 C4-btnindex">
                                    <button class="btn btn-default C4-color">Googleのindexへ登録</button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <p>最終index登録日　2019/08/01</p>
                                </div>
                            </div> 
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <button class="btn btn-default C4-color">Googleのindexから削除</button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <p>最終index削除日　2019/08/01</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <button class="btn btn-default C4-color">Sitemap編集</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
    </div>

<?php include_once("../layout/footer.php"); ?>