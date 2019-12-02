# POSTEASE（ポストイーズ）

### カンタン“後付け”快速ヘッドレスCMS  
独自開発のスマートキャッシュで静的サイト並みのハイパフォーマンスと低負荷を実現

[POSTEASE公式サイト](https://postease.in)

## 特徴

### 1. 快速ヘッドレスCMS
安定したパフォーマンスと低負荷が自慢のヘッドレスCMS POSTEASE。静的サイトと同等のパフォーマンスで大量アクセスも軽々とさばきます。

### 2. カンタン“後付け”
プラグイン感覚で、どんなWEBサイトにも「カンタンに」「後付け」できる新しいCMS。静的サイトがわずか数時間で動的サイトに変身します。

### 3. 柔軟な仕様
POSTEASEは柔軟な仕様で、カスタマイズや拡張もラクラク。CMSによるWEBサイトの仕様制限が一切ないから、どんな仕様のWEBサイトでも構築可能です。


---


## サーバー要件

下記の要件を満たしたサーバー上で稼働します。
- PHP5.1以上（推奨5.2以上）
- SQLite3.x or MySQL5.x


---


## ダウンロード

ダウンロードしてどなたでも無料でご利用いただけます。

```sh
git clone git@github.com:postease-cms/postease.git
```


---


## 実装

### 設置例
基本的なファイル構成

```
/*
 * root
 *  |
 *  |-- postease（POSTEASE本体）
 *  |
 *  |-- index.php（WEBサイトのトップページ）
 *
 */
```

### 実装コード例

トップページに最新のお知らせを３件表示するためのコードサンプル

index.php
```php
<?php

require_once 'postease/api/v3/endpoint.php';

$endpoint = 'https://sample.com/postease/api/v3/endpoint.php';

$pe = new Pec($endpoint);

$params = array(
  'posttype' => 'news',
  'limit'    => 3,
  'order'    => 'desc'
);

$posts = $pe -> get_posts();

?>
<html>
...
<?php foreach ($posts->list as $row):?>
<div class="news">
  <figure class="news-figure">
    <img src="<?=$row->eyecatch->src->x1?>" alt="<?=$row->title?>">
  </figure>
  <div class="news-texts">
    <h3 class="news-title"><?=$row->title?></h3>
    <time class="news-publishDate" datetime="<?=$row->publish_date?>"><?=$row->publish_date?></time>
    <p class="news-description"><?=$row->description?></p>
  </div>
</div>
<?php endforeach?>
...
</html>

```




## 最新バージョン

**3.6.0 ( 02.Dec.2019 )**

---

#### 更新履歴
- 3.6.0 ( 02.Dec.2019 )
- 3.5.6 ( 01.Dec.2019 )
- 3.5.5 ( 20.Nov.2019 )
- 3.5.4 ( 02.Oct.2019 )
- 3.5.3 ( 09.Sep.2019 )
- 3.5.2 ( 08.Sep.2019 )
- 3.5.1 ( 08.Sep.2019 )
- 3.5.0 ( 02.Sep.2019 )
- 3.4.2 ( 02.Sep.2019 )
- 3.4.1 ( 20.Aug.2019 )
- 3.4.0 ( 17.Aug.2019 )
- 3.3.12 ( 14.Aug.2019 )
- 3.3.11 ( 09.Aug.2019 )
- 3.3.10 ( 09.Aug.2019 )
- 3.3.9 ( 07.Aug.2019 )
- 3.3.8 ( 05.Aug.2019 )
- 3.3.7 ( 03.Aug.2019 )
- 3.3.6 ( 03.Aug.2019 )
- 3.3.5 ( 03.Aug.2019 )
- 3.3.4 ( 02.Aug.2019 )
- 3.3.3 ( 02.Aug.2019 )
- 3.3.2 ( 30.Jul.2019 )
- 3.3.1 ( 29.Jul.2019 )
- 3.3.0 ( 27.Jul.2019 )
- 3.2.10 ( 25.Jul.2019 )
- 3.2.9 ( 21.May.2019 )
- 3.2.8 ( 18.Apr.2019 )
- 3.2.7 ( 18.Apr.2019 )
- 3.2.6 ( 17.Apr.2019 )
- 3.2.5 ( 16.Apr.2019 )
- 3.2.4 ( 04.Apr.2019 )
- 3.2.3 ( 01.Apr.2019 )
- 3.2.2 ( 04.Mar.2019 )
- 3.2.1 ( 25.Jan.2019 )
- 3.2.0 ( 22.Jan.2019 )
- 3.1.3 ( 04.Jan.2019 )
- 3.1.2 ( 26.Dec.2018 )
- 3.1.1 ( 25.Dec.2018 )
- 3.1.0 ( 25.Dec.2018 )
- 3.0.3 ( 16.Dec.2018 )
- 3.0.2 ( 15.Dec.2018 )
- 3.0.1 ( 12.Dec.2018 )
- 3.0.0 ( 12.Dec.2018 )
- 2.9.2 ( 12.Dec.2018 )
- 2.9.1 ( 16.Nov.2018 )
- 2.9.0 ( 15.Nov.2018 )
- 2.8.16 ( 07.Nov.2018 )
- 2.8.15 ( 06.Nov.2018 )
- 2.8.14 ( 05.Nov.2018 )
- 2.8.13 ( 01.Nov.2018 )
- 2.8.12 ( 27.Oct.2018 )
- 2.8.11 ( 27.Oct.2018 )
- 2.8.10 ( 21.Oct.2018 )
- 2.8.9 ( 21.Oct.2018 )
- 2.8.8 ( 12.Aug.2018 )
- 2.8.7 ( 10.Aug.2018 )
- 2.8.6 ( 31.Jul.2018 )
- 2.8.5 ( 30.Jul.2018 )
- 2.8.4 ( 29.Jul.2018 )
- 2.8.3 ( 29.Jul.2018 )
- 2.8.2 ( 29.Jul.2018 )
- 2.8.1 ( 29.Jul.2018 )
- 2.8.0 ( 28.Jul.2018 )
- 2.7.4 ( 13.Jun.2018 )
- 2.7.3 ( 11.Jun.2018 )
- 2.7.2 ( 01.Jun.2018 ) 
- 2.7.1 ( 27.May.2018 )
- 2.7.0 ( 27.May.2018 )
- 2.6.1 ( 23.May.2018 )
- 2.6.0 ( 22.May.2018 )
- 2.5.1 ( 21.May.2018 )
- 2.5.0 ( 20.May.2018 )
- 2.4.7 ( 11.May.2018 )
- 2.4.6 ( 13.Apr.2018 )
- 2.4.5 ( 09.Feb.2018 )
- 2.4.4 ( 02.Aug.2017 )
- 2.4.3 ( 21.Jul.2017 )
- 2.4.2 ( 01.Jul.2017 )
- 2.4.1 ( 21.Jun.2017 )
- 2.4.0 ( 21.Jun.2017 )
- 2.3.2 ( 23.May.2017 )
- 2.3.1 ( 20.May.2017 )
- 2.3.0 ( 20.May.2017 )
- 2.2.0 ( 04.May.2017, as production )
- 2.1.x ( 03.Nov.2015 )
- 2.0.x ( 02.Nov.2015, as beta )
