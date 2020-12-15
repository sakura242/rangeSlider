<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Home Page
 *
 *
 * @package    compass
 * @since      2017/12/14
 * @category   Controller
 * @author     SAI MYO SETT
 */
class Index extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        /* ページ内共通項目 （headタグ内に追加）*/
        $this->assign('nav', 'navHome'); /* Global Navigation に付与するClass 選択状態指定 空：未選択 */
        $this->assign('canonical', base_url()); /* link canonical * 空：使わない(SEO)*/
        $this->assign('head_title', ''); /* head title top ページ以外には入力 */
        $this->assign('head_keywords', ''); /* meta keywords */
        $this->assign('description', '');/* meta description */
        $this->assign('pageID', 'home'); /* bodyタグに入るid */
				$this->assign('page_css1', ''); /* 空：使わない css共通 cssファイル名を入力 */
        $this->assign('js_file1', '');/* 空：使用しない ※PC SP共通JS jsファイル名を入力 */
        $this->assign('js_file2', '');/* 空：使用しない ※PC SP共通JS jsファイル名を入力 */


    }

    public function index()
    {
        if (!$this->hack->is_sumaho()) {
            /* PCページ表示 */
            $this->tpl('pc/index');
        } else {
            /* SPページ表示 */
            $this->tpl('sp/index');
        }
    }
    public function school()
    {
        if (!$this->hack->is_sumaho()) {
            /* PCページ表示 */
            $this->tpl('pc/school');
        } else {
            /* SPページ表示 */
            $this->tpl('sp/school');
        }
    }
    public function school_version2()
    {
        if (!$this->hack->is_sumaho()) {
            /* PCページ表示 */
            $this->tpl('pc/school_version2');
        } else {
            /* SPページ表示 */
            $this->tpl('sp/school_version2');
        }
    }
    public function search()
    {
        if (!$this->hack->is_sumaho()) {
            /* PCページ表示 */
            $this->tpl('pc/search');
        } else {
            /* SPページ表示 */
            $this->tpl('sp/search');
        }
    }
}