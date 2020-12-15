<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 絞込条件ヘルパ <Filtering>
 *
 * 絞り込み条件関連ヘルパ
 *
 * @package    SDMS
 * @since      2016/04/21
 * @category   Helper
 * @author     takehara@cmps.jp
 */
class Filtering_helper
{
    function __construct()
    {
        $this->CI =& get_instance();
    }

    /**
     * 絞り込み条件取得
     * @param array 絞り込み条件のリスト
     * @param string prefix
     * @return array 絞込条件
     */
    public function filteringCriteria($arKeyList, $sPrefix=false)
    {
        // prefix値が渡ってきていない場合は作成
        if (!$sPrefix) $sPrefix = $this->getPrefix();
        // session操作＆絞込条件取得
        return $this->operationSession($arKeyList, $sPrefix);
    }

    /**
     * 絞り込み条件のセッション操作
     * @param array 絞り込み条件のリスト
     * @param string prefix
     * @return array 絞込条件
     */
    private function operationSession($arKeyList, $sPrefix)
    {
        $arFiltering = array();
        if ($this->CI->input->post('cond_clear'))
        {
            //条件クリア
            foreach ($arKeyList as $sKeyName) {
                $this->CI->session->unset_userdata("{$sPrefix}cond_{$sKeyName}");
            }
            $this->CI->session->unset_userdata("{$sPrefix}offset");
        }
        elseif ($this->CI->input->post('cond_change'))
        {
            //条件セット
            foreach ($arKeyList as $sKeyName) {
                $postData = $this->CI->input->get_post($sKeyName);
                $arFiltering[$sKeyName] = $postData;
                $this->CI->session->set_userdata("{$sPrefix}cond_{$sKeyName}", $postData);
            }
            $this->CI->session->unset_userdata("{$sPrefix}offset");
        }
        else
        {
            //session内の条件取得
            foreach ($arKeyList as $sKeyName) {
                $arTempValiable = $this->CI->session->userdata("{$sPrefix}cond_{$sKeyName}");
                if ($arTempValiable) $arFiltering["cond_{$sKeyName}"] = $arTempValiable;
            }
        }
        return $arFiltering;
    }

    /**
     * Prefix値作成
     * @return string prefix値
     */
    public function getPrefix()
    {
        if ($this->CI->uri->segment(2)) {
            $sSegment = $this->CI->uri->segment(1).$this->CI->uri->segment(2);
        } else {
            $sSegment = $this->CI->uri->segment(1);
        }
        return "{$sSegment}_";
    }

    /**
     * Offset値作成
     * @return string Offset値
     */
    public function getOffset()
    {
        return $this->session->userdata($this->getPrefix().'offset');
    }
}
