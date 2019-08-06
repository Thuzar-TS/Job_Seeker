<?php include_once("../layout/header.php"); ?>

<div class="wrap">
    <ul style="list-style: none;">
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
    </div>
</div>
<?php include_once("../layout/footer.php"); ?>