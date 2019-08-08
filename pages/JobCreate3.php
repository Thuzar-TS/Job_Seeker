<?php include_once("../layout/header.php"); ?>

<div class="wrap">
    <div class="panel panel-info">
        <div class="panel-header">
        <h3>ジョブ作成3フォーム</h3>
            <h4 >顧客ID JOBID 顧客名　求人名</h4>
        <div class="panel-body">
              <div class="col-md-12 pad-free mb-20">
                <h4>ヘッダ</h4>
                <br/>
                <xmp><head><title></xmp>
                        <div class="form-group">
                            <textarea class="form-control" name="title"></textarea>
                        </div>
                        <xmp><head><description></xmp>
                        <div class="form-group">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                <div class="col-md-1 mb-20">
                    <a href="JobCreate4.php" class="btn btn-all col-md-17"> データ生成・登録</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
    <?php include_once("../layout/footer.php"); ?>