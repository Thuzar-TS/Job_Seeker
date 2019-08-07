<?php include_once("../layout/header.php"); ?>

        <div class="wrap">
          <div class="panel panel-info">
          <div class="row" style="margin-left: 50px;margin-right: 50px;">
            <div class="col-sm-12">
              <div class="panel-heading ">
              <h4 class="headingStyle">顧客番号、顧客名、求人番号 で求人を検索できます</h4>
              
              </div>            
            </div>
            <div class="col-sm-12">
            <form action="/hms/accommodations" method="GET"> 
            <div class="row">
                <div class="col-xs-6 col-md-12">
                  
                  <div class="col-xs-6 col-md-10">
                    <input type="text" class="form-control" placeholder="検索" id="txtSearch">
                  </div>
                  <div class="col-xs-6 col-md-2">
                    
                      <button class="btn btn-primary col-md-12 searchBtn" type="submit">
                        <span class="glyphicon glyphicon-search side-icon"></span> 検索
                      </button>
                
                  </div>
                
                </div>
              </div>
            </form>
            </div>
          </div>
            <h4><a href="">顧客情報管理</a></h4>

            <ul>
              <li>
                
              </li>
            
              <li>
                <a>求人情報検索/編集</a><br><input type="text"><button type="button" onclick="">検索</button>　<a>顧客番号、顧客名、求人番号 で求人を検索できます</a>
                <div>
                  <select name="example" size="3">
                    <option value="0000-0001">0000-0001 マネジメントパートナーズ　プログラマ</option>
                    <option value="0019-0001">0019-0001 〇〇病院　看護師</option>
                  </select>
                </div>
              </li>
              
              <li>
                <a href="">Sitemap編集</a>
              </li>
          
              <li>
                <a href="">ログ管理</a>
              </li> 
            
            </ul>
          </div>
        </div>

<?php include_once("../layout/footer.php"); ?>