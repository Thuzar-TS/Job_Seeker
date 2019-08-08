<?php include_once("../layout/header.php"); ?>

<div class="wrap">
  <div class="cp_tab">
	<input type="radio" name="cp_tab" id="tab1_1" aria-controls="first_tab01" style="\.cp_tab\ \*\,\ \.cp_tab\ \*: before, .cp_tab *:after \{ -webkit-box-sizing: border-box;box-sizing: border-box;\}\ \.cp_tab\ \{\ margin: 1em auto;\}\ \.cp_tab\ \&gt;\ input\[type\=\'radio\'\]\ \{\ margin: 0;padding: 0;border: none;border-radius: 0;outline: none;background: none;-webkit-appearance: none;appearance: none;display: none;\}\ \.cp_tab\ \.cp_tabpanel\ \{\ display: none;\}\ \.cp_tab\ \&gt;\ input: first-child:checked ~ .cp_tabpanels &gt; .cp_tabpanel:first-child, .cp_tab &gt; input:nth-child(3):checked ~ .cp_tabpanels &gt; .cp_tabpanel:nth-child(2), .cp_tab &gt; input:nth-child(5):checked ~ .cp_tabpanels &gt; .cp_tabpanel:nth-child(3), .cp_tab &gt; input:nth-child(7):checked ~ .cp_tabpanels &gt; .cp_tabpanel:nth-child(4), .cp_tab &gt; input:nth-child(9):checked ~ .cp_tabpanels &gt; .cp_tabpanel:nth-child(5), .cp_tab &gt; input:nth-child(11):checked ~ .cp_tabpanels &gt; .cp_tabpanel:nth-child(6) \{ display: block;\}\ \.cp_tab\ \&gt;\ label\ \{\ position: relative;display: inline-block;padding: 15px;cursor: pointer;border: 1px solid transparent;border-bottom: 0;\}\ \.cp_tab\ \&gt;\ label: hover, .cp_tab &gt; input:focus + label \{ color: #0066cc;\}\ \.cp_tab\ \&gt;\ input: checked + label \{ margin-bottom: -1px;border-color: #cccccc;border-bottom: 1px solid #ffffff;border-radius: 6px 6px 0 0;\}\ \.cp_tab\ \.cp_tabpanel\ \{\ padding: 0.5em 1em;border-top: 1px solid #cccccc;\}\ \@media\ \(max-width: 480px\) \{ .cp_tab \{ width: 100%;font-size: 0.8em;\}\ \.cp_tab\ label\ \{\ padding: 0.5em;" checked="checked">
	<label for="tab1_1">求人情報</label>
	<input type="radio" name="cp_tab" id="tab1_2" aria-controls="second_tab01">
	<label for="tab1_2">構造化データ</label>
	<input type="radio" name="cp_tab" id="tab1_3" aria-controls="third_tab01">
	<label for="tab1_3">ヘッダー</label>
	<input type="radio" name="cp_tab" id="tab1_4" aria-controls="force_tab01">
	<label for="tab1_4">データ生成・登録</label>
	<div class="cp_tabpanels">
		<div id="first_tab01" class="cp_tabpanel">
  <a>顧客ID JOBID 顧客名　求人名</a><h2>求人情報</h2>
  <br>
  <br>
  
		<a>求人タイトル</a>
<br>
<textarea name="comment" cols="40" rows="2"></textarea>
<br><br>

<button>項目新規追加</button>
<br><br><br>
<div>



<input type="text"><br><textarea name="comment" cols="40" rows="8"></textarea>
  
  <button>削除</button></div><div>



<input type="text"><br><textarea name="comment" cols="40" rows="8"></textarea>
  
  <button>削除</button></div><div>



<input type="text"><br><textarea name="comment" cols="40" rows="8"></textarea>
  
  <button>削除</button></div><div>



<input type="text"><br><textarea name="comment" cols="40" rows="8"></textarea>
  
  <button>削除</button></div>



		



		</div>
		<div id="second_tab01" class="cp_tabpanel">
  
  <div style=" width: 48%; float:left;">
  <a>顧客ID JOBID 顧客名　求人名</a><h2>構造化データ</h2>
  <br>
  <br>
  必須項目はKey決め打ち、ロゴのパスはディレクトリを選択できるように
  <br>
  <button>項目新規追加</button>
<br><br><br>
<div>



<input type="text"><br><textarea name="comment" cols="40" rows="8"></textarea>
  
  <button>削除</button></div><div>



<input type="text"><br><textarea name="comment" cols="40" rows="8"></textarea>
  
  <button>削除</button></div><div>



<input type="text"><br><textarea name="comment" cols="40" rows="8"></textarea>
  
  <button>削除</button></div><div>



<input type="text"><br><textarea name="comment" cols="40" rows="8"></textarea>
  
  <button>削除</button></div>




  </div>
  <div>
 {
  "@context": "https://schema.org",
  "@type": "Organization",
  "url": "https://jobs.management-partners.co.jp",
  "logo": 
"https://jobs.management-partners.co.jp/0000_mp/logo/logo_rect.png"
}
 &lt;/script&gt;
  &lt;script type="application/ld+json"&gt;
{
"@context": "http://schema.org/",
"@type": "JobPosting",
"title": "&lt;?php echo $title ?&gt;",
"description": 
"&lt;p&gt;■&lt;strong&gt;雇用形態&lt;/strong&gt;：正社員（半年間試用期間あり※待遇は本採用時と同じで
す）&lt;/p&gt;&lt;p&gt;■&lt;strong&gt;勤務時間&lt;/strong&gt;：9：00～18：00（実働8時
間）&lt;/p&gt;&lt;p&gt;■&lt;strong&gt;勤務地&lt;/strong&gt;：東京都新宿区西新宿2-7-1 
小田急第一生命ビル13F&lt;br&gt;※客先の場合も有り&lt;/p&gt;&lt;p&gt;■&lt;strong&gt;業務内
容&lt;/strong&gt;：システム及びWEBサイトのプログラミング・運営・保守&lt;
/p&gt;&lt;p&gt;■&lt;strong&gt;応募資格&lt;/strong&gt;：学歴不問&lt;br&gt;LAMP(または
LAPP)環境の開発経験&lt;br&gt;PHP、Perl、COBOL、Java、C言語などの開発経
験&lt;/p&gt;&lt;p&gt;■&lt;strong&gt;給与&lt;/strong&gt;：月給28万円～35万円&lt;
/p&gt;&lt;p&gt;■&lt;strong&gt;昇給&lt;/strong&gt;：随時&lt;
/p&gt;&lt;p&gt;■&lt;strong&gt;賞与&lt;/strong&gt;：年２回&lt;
/p&gt;&lt;p&gt;■&lt;strong&gt;待遇&lt;/strong&gt;：各種社会保険完備・交通費規定支給（2万円/月ま
で）&lt;/p&gt;&lt;p&gt;■&lt;strong&gt;休日&lt;/strong&gt;：完全週休2日制(土・
日)&lt;br&gt;祝日&lt;br&gt;有給休暇(入&gt;社半年後に10日間)&lt;br&gt;夏季休暇&lt;br&gt;年末年始
休暇&lt;br&gt;慶弔休暇&lt;br&gt;バースディ休暇&lt;br&gt;アニバーサリー休暇&lt;br&gt;プロジェクト休
暇&lt;br&gt;子育て休暇&lt;/p&gt;&lt;p&gt;■&lt;strong&gt;備考&lt;/strong&gt;：関連会社
の案件を中心に、着
実に業績を伸ばしている当社。&lt;br&gt;さらなる成長のために社員を増員し、システム開発を担う人員の強化を計画していま
す。&lt;br&gt;そこで今回、これまでの経験を活かしながらも積極的に意見を発信して頂ける、&gt;そんなプログラマーを募集しま
す。&lt;br&gt;&lt;br&gt;メイン業務が、『関連会社のWEBサイトの運営・管理』『社内システムの運営・保守』なので、自分のペース
で仕事の予定を組むことができます。&lt;br&gt;もちろんお客様
のお仕事も有りますので、責任のある充実した業務です。&lt;br&gt;※ほぼ残業はありません。&lt;/p&gt;",
"datePosted": "2019-04-22",
"employmentType": "FULL_TIME",
"validThrough": "2019-10-17",
"hiringOrganization": {
                        "@type": "Organization",
                        "name": "マネジメントパートナーズ",
                        "sameAs": 
"https://www.management-partners.co.jp/",
                        "logo": 
"https://jobs.management-partners.co.jp/0000_mp/logo/logo_rect.png"
                        },
"identifier": {
                "@type": "PropertyValue",
                "name":"マネジメントパートナーズ",
                "propertyID":"求人番号",
                "value": "&lt;?php echo $job_id_long ?&gt;"
                },
"jobLocation": {
                "@type": "Place",
                "geo":{
                        "@type":"GeoCoordinates",
                        "latitude":35.691646,"longitude":139.691037
                        },
                "address": {
                                "@type": "PostalAddress",
                                "addressRegion": "東京都",
                                "addressLocality": "新宿区",
                                "streetAddress": "西新宿2-7-1",
                                "postalCode": "163-0713",
                                "addressCountry": "JP"
                        }
                },
"baseSalary": {
                "@type": "MonetaryAmount",
                "currency": "JPY",
                "value": {
                                "@type": "QuantitativeValue",
                                "value": 280000,
                                "minValue": 280000,
                                "maxValue": 350000,
                                "unitText": "MONTH"
                        }
                }
}
</div>
  
  </div>
		<div id="third_tab01" class="cp_tabpanel">
		<a>顧客ID JOBID 顧客名　求人名</a><h2>ヘッダ</h2>
		<p>&lt;head&gt;&lt;title&gt;</p>
<textarea name="comment" cols="40" rows="8"></textarea>
<p>&lt;head&gt;&lt;description&gt;</p>
<textarea name="comment" cols="40" rows="8"></textarea>
		</div>
		<div id="force_tab01" class="cp_tabpanel">
	<a>顧客ID JOBID 顧客名　求人名</a>
		<h2>データ生成・登録</h2>

<button>ステータス変更</button>
<select name="state">
<option value="100" selected="selected">未公開</option>
<option value="200">Index申請済</option>
<option value="300">掲載確認できず調整中</option>
<option value="400">掲載確認済</option>
  <option value="500">掲載終了</option>
  
</select>
<p></p>
	<button>データ生成</button><p>最終データ生成日　2019/08/01</p>
<br>
	<button>求人HP表示</button>

	<button>Googleのindexへ登録</button>失敗したらダイアログ通知<p>最終index登録日　2019/08/01</p>
<br>
<button>Googleのindexから削除</button>失敗したらダイアログ通知<p>最終index削除日　2019/08/01</p>
<br>
	<button>
		Sitemap編集
		</button></div>
	</div>
</div>
</div>

<?php include_once("../layout/footer.php"); ?>