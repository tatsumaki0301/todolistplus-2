# TodoList  
  
## 作成目的  
- メモ帳代わりになるアプリを想定し作成してみた。  
  
## 特徴  
- メモしたいことを気軽に追加できる。  
- 追加した全てが一覧表示される。  
- 追加している内容に変更があっても更新できる。  
- 必要なくなったら削除できる。 
  
## 環境  
- Laravel8.*    
- MySQL  
- PHP  
- HTML  
- CSS  
- Apache  
  
## 機能  
- 追加機能  
- 更新機能  
- 削除機能  
- ページネーション  
  
## 作成手順  
01. VScode 使用　　
02. XAMPP 使用  
03. Apache , Mysql 起動  
04. Laravel project作成用ディレクトリ作成
05. VScodeのターミナルで作成用ディレクトリ読み込み  
06. ターミナルでLaravel project作成  
07. PJディレクトリへ移動
07. MySQL DB 作成  
08. Laravel .env DB部 変更  
09. Model 作成 (Todo.php)  
10. Controller 作成,記述 (TodoController.php , index)  
11. web.php 記述 (/home , method=index)  
12. View画面　ざっくり作成 (index.blade.php) 
13. migration 作成,記述 (todos_table)  
14. migration 実施 (php artisan migrate)  
15. seeder 作成,記述 (TodosTableSeeder , DatabaseSeeder)  
16. seed 実施 (php artisan db:seed)  
17. CSS作成  
18. 追加ボタン実装  
19. Request作成 (TodoRequest.php)
20. TodoController(add) Model(fillable) 記述  
21. 更新ボタン実装
22. TodoController(update) 記述  
23. 削除ボタン実装  
24. TodoController(delete) 記述  
25. Pagination 実装  (php artisan vendor:publish --tag=laravel-pagination)
26. TodoController (index) 記述  
27. CSS作成  


