# Bingo-web-application

#動作環境・ローカルでの動作方法
XAMPPを使ってApache起動・
C://xampp/htdocs内にこのリポジトリのapp以下ををまるごと直置き
http://localhost/LocalStorage.htmlでビンゴカード番号入力画面がでるはず

#起動後イメージ・操作方法はこちら
https://bingopr.herokuapp.com/index.html

#app/LocalStorage.html
ビンゴカードのNo入力画面のデザイン（html）とロジック(JS）が書いてある
ブラウザのLocalStorageの機能を使って、ユーザのブラウザに勝手にデータの書き込みを行う

#app/canvas.html
入力されたビンゴカードの内訳を表示する。また、数字を打ち込み、ビンゴ判定処理もここでする

#app/index.html
ヘルプ画面
