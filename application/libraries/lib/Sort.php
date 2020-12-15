<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 並び替えライブラリ <Sort>
 *
 * 並び替え関連ライブラリ
 *
 * @package    SDMS
 * @since      2016/04/22
 * @category   Library
 * @author     takehara@cmps.jp
 */
class Sort
{
    function __construct()
    {
        $this->CI =& get_instance();
    }

    /**
     * ソート条件取得
     * @return array column:列名 type:ascかdescか css:cssのclass
     */
    public function sortCriteria()
    {
        //prefix
        if ($this->CI->uri->segment(2)) {
            $sPrefix = $this->CI->uri->segment(1).$this->CI->uri->segment(2);
        } else {
            $sPrefix = $this->CI->uri->segment(1);
        }

        $sSort = $this->CI->session->userdata($sPrefix.'_sort');
        $sSortType = $this->CI->session->userdata($sPrefix.'_sorttype');

        switch ($sSortType) {
            case 'asc' : $sCss = 'sorting_asc';  break;
            case 'desc': $sCss = 'sorting_desc'; break;
            default: $sCss = ''; break;
        }

        return array(
            'column' => $sSort ? $sSort : null,
            'type'   => $sSortType ? $sSortType : null,
            'css'    => $sCss ? $sCss : null
        );
    }

    /**
     * ソート条件セット
     * @param string
     * @return void
     */
    public function setSort($sMode=false)
    {
        //prefix
        if ($sMode) {
            $sPrefix = $this->CI->uri->segment(1).$sMode;
        } else {
            $sPrefix = $this->CI->uri->segment(1);
        }

        $sSort = $this->CI->input->get('sort');
        $sSortSession = $this->CI->session->userdata($sPrefix.'_sort');

        //sortのGET値が渡ってきたらセッションにセット
        if ($sSort) $this->CI->session->set_userdata($sPrefix.'_sort', $sSort);
        $sSortType = $this->CI->session->userdata($sPrefix.'_sorttype');

        // 渡ってきたsortのGET値とセッションのsortが同じ場合…
        // none　→　asc　→　desc　→　noneの順に変える
        if ($sSort && $sSort == $sSortSession) {
            switch ($sSortType) {
                case 'asc' : $sSortType = 'desc'; break;
                case 'desc': $sSortType = 'none'; break;
                case 'none': $sSortType = 'asc';  break;
                default: $sSortType = 'asc'; break;
            }
            $this->CI->session->set_userdata($sPrefix.'_sorttype', $sSortType);
        } elseif ($sSort) {
            $this->CI->session->set_userdata($sPrefix.'_sorttype', 'asc');
        }
    }

    /**
     * prefix取得
     * @return string prefix
     */
    public function getPrefix()
    {
        if ($this->CI->uri->segment(2)) {
            return $this->CI->uri->segment(1).$this->CI->uri->segment(2);
        } else {
            return $this->CI->uri->segment(1);
        }
    }
}
