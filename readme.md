# かんばんリスト

Rails3製のWebアプリケーションをLaravel4にポーティングしました。

[オリジナル - Rails3版](https://github.com/volpe28v/kanban-list)

## インストール

```
git clone https://github.com/jumilla/kanbanlist
cd kanbanlist
composer install
```

Laravel環境は、全てのデバイスで 'local' に設定してあります。

## データベース構築

local環境では、SQLite3ファイル `app/storage/database/local.sqlite` を参照します。
artisanコマンド起動時に存在しない場合、自動で生成します。

```
php artisan migrate
php artisan db:seed
```

## 起動方法

```
php artisan serve
open http://localhost:8000
```

## 操作方法

触ればわかります。

## 開発参加方法

イベント参加者はCollaboratorsに登録します。`develop`ブランチにコミットしてください。\
イベント開催後に不具合修正や機能追加を投稿したい場合は、Pull Requestを投げてください。

## ライセンス

MIT License

## 著作権

オリジナル(Rails3)版
Copyright (c) 2011 Naoki KODAMA naoki.koda@gmail.com

Laravel4ポーティング版
Copyright (c) 2014 [Laravel Tokyo](http://laravel.tokyo)
@blue-goheimochi
@chao2suke
@fumiyasac
@geduld
@jumilla [Fumio Furukawa](fumio.furukawa@gmail.com)
@monaye Monaye Win
@shuogawa
@yutayokoi
