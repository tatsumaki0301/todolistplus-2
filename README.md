# TodoListPlus  
  
## 作成目的  
- メモ帳代わりになるアプリを想定し作成してみた。  
  
## 特徴  
- メモしたいことを気軽に追加できる。  
- 追加した全てが一覧表示される。  
- 追加している内容に変更があっても更新できる。  
- 必要なくなったら削除できる。 
- ログイン機能による保護
- タグによる項目振り分け
- 内容、タグによる検索
  
## 環境  
- Laravel8.*  
- Laravel Breeze  
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
- 認証機能
- 検索機能
  
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
28. web.php 書き換わるからメモしておく  
29. Node.js インストール(ホームページでダウンロード)  
30. laravel/breeze インストール(ターミナル)  
31. プロンプトでnode --version 確認
32. プロンプトでnpm install　(npm --version 確認)  
33. プロンプトでnpm run dev  
34. ユーザー名、登録、ログイン、ログアウト機能 トップページへ追加  
35. 登録、ログイン、ログアウト後のルート先変更  
36. todosテーブルにuser_id追加
37. ユーザーごとの表示調整  blade,Controller,Model(リレーション追加)  
38. タグ追加 (Model, maigration, seeder)  
39. todosテーブルに tag_id 追加し seed 実施無くす  
40. TagsTableSeeder実施
41. index.blade.php , TodoController　修正  
42. 検索画面追加  
43. FindController追加  
44. 検索ロジック作成 (ユーザーごとの表示＋内容あいまい検索＋タグ検索)  
45. CSS作成  


