# check-test-1st
アプリケーション名：お問い合わせフォーム

環境構築
　Dockerの設定
　　Docker-compose.yml の作成
  　Nginx の設定
　　PHP の設定
  　MySQL の設定
  　docker compose up -d --build のコマンドでビルド
　Laravelの設定
　　docker compose exec php bashのコマンドでPHPコンテナにログイン
  　Laravelのプロジェクトの作成
　　時間設定の編集
　　.envファイルの編集
　　viewファイルの作成
　　cssファイルの作成
　　マイグレーション（php artisan migrate）
  　php artisan key:generate の実行
　　
使用技術（実行環境）
　PHP 8.1
　Laravel 8
　MYSQL 8.0.26

URL
　開発環境: http://localhost/
　phpMyAdmin: http://localhost/8080/

ER図
