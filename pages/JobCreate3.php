<?php include_once("../layout/header.php"); ?>

        <div class="wrap">
            <h1 style="text-align:center;color:blue">Job Create_3フォーム</h1>
            <div class="col-md-8 col-md-offset-2 panel panel-info">
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <label for="Name">顧客ID</label>
                            <input type="custname" class="form-control" id="custid" autofocus placeholder="顧客ID">
                        </div>
                        <div class="form-group">
                            <label for="Name">顧客名</label>
                            <input type="name" class="form-control" id="custname" placeholder="顧客名">
                        </div>
                        <div class="form-group">
                            <label for="JobId">Job ID</label>
                            <input type="jobid" class="form-control" id="Jobid" placeholder="Job Id">
                        </div>
                        <div class="form-group">
                            <label for="CustId">求人名</label>
                            <input type="custid" class="form-control" id="jobname" placeholder="求人名">
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
                        <button type="submit" class="btn btn-info">次のページ</button>
                    </form>
                </div>
            </div>
        </div>
  
    <?php include_once("../layout/footer.php"); ?>