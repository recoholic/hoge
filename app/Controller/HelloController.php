<?php
/**
 * /app/Controller/HelloController.php
 */
class HelloController extends AppController
{
	/** ビュー未使用 */
	//public $autoRender = false;
	/** 自動レンタリング無効 */
	//public $autoLayout = false;

	/**
	 * indexアクション
	 */
	public function index() {
		//echo "Hello World!";
		//$this->render('other');    //other.ctpを表示
		//$this->set('message', 'Hello World:)'); //Viewに値を送る
		//$this->redirect('http://webcake.no003.info/'); //リダイレクト

	}

	/**
	 * otherアクション
	 */
	public function other() {
		//echo "Other!";
		//リクエストがPOSTメソッドで送られてきた場合
		if($this->request->is('post')) {
			//formのパラメータ取得
			$post = $this->request->data('txt');

			//Viewへ値のセット
			$this->set('post', $post);
		}
	}
}
?>
