
ps: # コンテイナーのリストを取得
	./vendor/bin/sail ps


php: # phpコンテイナーにRoot権限でログイン
	docker-compose exec laravel.test bash 
mysql: # mysqlコンテイナーにログイン
	./vendor/bin/sail mysql


up: # コンテイナーを起動
	./vendor/bin/sail up -d
down: # コンテイナーを停止
	./vendor/bin/sail down
downv: # volumeを削除 & コンテイナーを停止
	./vendor/bin/sail down -v