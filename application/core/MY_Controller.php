<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * コントローラ親クラス <MY_Controller>
 *
 * ログイン処理関連コントローラ
 *
 * @package     免許ラボ
 * @since       2016/05/26
 * @category    Controller
 * @author      takehara@cmps.jp
 */
class MY_Controller extends CI_Controller
{
    protected $iControllerDepth = 1;
    public $hack = null;

    function __construct()
    {
        parent::__construct();

        ini_set( 'display_errors', 1 );

        $this->load->helper('browserhack');
        $this->smarty->template_dir = APPPATH.'views/';
        $this->smarty->compile_dir  = APPPATH.'cache/';
        $this->smarty->auto_literal = TRUE;
        $this->assign('base_url', base_url());
        // ブラウザハック用assign
        $this->hack = new Browserhack_helper();
        $this->hack->assignAll($this->smarty);
    }

/*----------------------------------------------------------------------------------------------------*
 * smarty関連
 *----------------------------------------------------------------------------------------------------*/
    /**
     * テンプレートにassign
     * @param string テンプレートのassign先の名前
     * @param variant 値
     * @return void
     */
    public function assign($name, $value)
    {
        $this->smarty->assign($name, $value);
    }

    /**
     * テンプレート呼び出し
     * @param string テンプレートのファイル名
     * @param bool ディレクトリ名自動付加設定 true:第一セグメントをディレクトリ名にする false:ディレクトリ名含んだパラメータを渡してもらう
     * @return void
     */
    public function tpl($sTemplete)
    {
        $this->smarty->display("$sTemplete.tpl");
    }
}