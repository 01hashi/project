確認テスト　もぎたて

環境構築
Dockerビルド
git clone git@github.com:coachtech-material/laravel-docker-template.git　をクローン
docker-compose up -d --build　でprojectのdockerの作成

Laravel環境構築
1.　docker-compose exec php bash
2.　composer install
3.　.env.exampleファイルをコピーし、.envファイルの作成と環境変数の変更
4.　php artisan make:migration create_authors_table
5.　php artisan make:seeder AuthorsTableSeeder
　

ER図


![image](https://github.com/user-attachments/assets/067431a6-8705-40aa-8bd9-904fc3934f2d)



使用技術　
php：8.0
laravel：8.75

URL
・開発環境　http://localhost/
・phpMyAdmin　http://localhost:8080/

