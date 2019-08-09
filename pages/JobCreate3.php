<?php include_once("../layout/header.php"); ?>

<div class="wrap">
    <div class="panel panel-info">
        <div class="panel-header">
        <h3>ジョブ作成3フォーム</h3>
            <h4 >顧客ID JOBID 顧客名　求人名</h4>
        <div class="panel-body">
        <form>
                        <div class="form-group">
                            <label for="Name">顧客ID</label>
                            <input type="custname" class="form-control" id="custid" autofocus placeholder="000025"> 
                        </div>
                        <div class="form-group">
                            <label for="Name">顧客名</label>
                            <input type="name" class="form-control" id="custname" placeholder="田中">
                        </div>
                        <div class="form-group">
                            <label for="JobId">Job ID</label>
                            <input type="jobid" class="form-control" id="Jobid" placeholder="SF190025485">
                        </div>
                        <div class="form-group">
                            <label for="JobId">求人名</label>
                            <input type="jobid" class="form-control" id="Jobname" placeholder="アカウントエグゼクティブ">
                        </div>
                        <h1>ヘッダ</h1><br/>
                        <xmp><head><title></xmp>
                        <div class="form-group">
                            <textarea id="title" class="form-control" name="title" style="height:200px;width:400px"></textarea>
                        </div>
                        <xmp><head><description></xmp>
                        <div class="form-group">
                            <textarea id="title" class="form-control" name="title"  style="height:200px;width:400px"></textarea>
                        </div>
                        <div class="col-md-1 mb-20">
                          <a href="JobCreate4.php" class="btn btn-all col-md-17"> データ生成・登録</a>
                        </div>
        </form>
            
        </div>
        </div>
    </div>
</div>
    <?php include_once("../layout/footer.php"); ?>