<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * URL検証ライブラリ <Urlvalid>
 *
 *　URL検証系のライブラリ
 *
 * @package    免許ラボ
 * @since      2016/05/26
 * @category   Library
 * @author     takehara@cmps.jp
 */
class Urlvalid
{
    function __construct()
    {
        $this->CI =& get_instance();
    }

    /**
     * テンプレート存在チェック
     * @return void
     */
    public function tplExist($sTempletePath=null)
    {
        // パラメータ渡ってきてなかったら戻る
        if (is_null($sTempletePath)) return;
        // テンプレートファイル存在したら戻る
        if (file_exists(APPPATH."views/{$sTempletePath}.tpl")) return;

        // 404ページ表示
        $this->_disp_404();
    }

    /**
     * 強制的に404ページ表示
     * @return void
     */
    public function forciblyError()
    {
        // 404ページ表示
        $this->_disp_404();
    }

    /**
     * 404ページ表示表示処理
     * @return void
     */
    private function _disp_404()
    {
        // 404ステータスセット
        $this->CI->output->set_status_header('404');

        /* ページ内共通項目 （headタグ内に追加）*/
        $this->CI->assign('globalNav', 'navHome'); /* Global Navigation に付与するClass 選択状態指定 空：未選択 */
        $this->CI->assign('canonical', base_url()); /* link canonical * 空：使わない(SEO)*/
        $this->CI->assign('head_keywords', ''); /* meta keywords */
        $this->CI->assign('description', ''); /* meta description */
        $this->CI->assign('pageID', 'school'); /* bodyタグに入るid */
        $this->CI->assign('page_css1', ''); /* 空：使わない css共通 cssファイル名を入力 */
        $this->CI->assign('page_css2', '');
        $this->CI->assign('page_css3', '');
        $this->CI->assign('page_css4', ''); // CSS4はstyle.cssより先に読み込む場合
        $this->CI->assign('jq_cookie', '');    /* jquery_cookie 空：使用しない */
        $this->CI->assign('js_file1', '');/* 空：使用しない ※PC SP共通JS jsファイル名を入力 */
        $this->CI->assign('js_file2', '');
        $this->CI->assign('js_file3', '');
        $this->CI->assign('js_file4', '');

        if (!$this->CI->hack->is_sumaho()) {
            /* PCページ表示 */
            $this->CI->tpl('pc/404');
        } else {
            /* SPページ表示 */
            $this->CI->display('sp/404.tpl');
        }
        exit();
    }
}
