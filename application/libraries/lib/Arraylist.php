<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 共通リストライブラリ <List>
 *
 *　リスト系のライブラリ
 *
 * @package    SDMS
 * @since      2016/04/21
 * @category   Library
 * @author     takehara@cmps.jp
 */
class Arraylist
{
    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('member_info_model');
        $this->CI->load->model('contract_info_model');
        $this->CI->load->model('configs_model');
        $this->CI->load->model('status_model');
        $this->CI->load->model('customer_form_model');

        $this->CI->load->model('m_models_model');
        $this->CI->load->model('m_color_model');
        $this->CI->load->model('m_storage_model');
        $this->CI->load->model('price_list_model');
    }

/*----------------------------------------------------------------------------------------------------*
 * 共通リスト
 *----------------------------------------------------------------------------------------------------*/
    /**
     * ステータスリスト
     * @return array ステータスのリスト
     */
    public function status()
    {
        return $this->CI->status_model->contract_status_list();
    }

    /**
     * 顧客形態のリスト
     * @return array 顧客形態のリスト
     */
    public function customerForm()
    {
        return $this->CI->customer_form_model->customer_form_list();
    }

/*----------------------------------------------------------------------------------------------------*
 * モバイルデバイスのリスト
 *----------------------------------------------------------------------------------------------------*/
    /**
     * 端末の種類のリスト
     *
     */
    public function models()
    {
        return $this->CI->m_models_model->selectId2Key();
    }


    /**
     * 容量のリスト
     *
     */
    public function storage()
    {
        return $this->CI->m_storage_model->selectId2Key();
    }


    /**
     * ipadの色のリスト
     *
     */
    public function color()
    {
        return $this->CI->m_color_model->selectId2Key();
    }

/*----------------------------------------------------------------------------------------------------*
 * 現行のモバイルデバイスのリスト
 *----------------------------------------------------------------------------------------------------*/
    /**
     * 現行の機種リスト
     *
     */
    public function currentModels()
    {
        return $this->CI->m_models_model->selectByCurrentModel();
    }

    /**
     * 現行の機種のIDリスト
     *
     */
    public function currentModelsIds()
    {
        $arCurrentModels = $this->current_models_list();
        if (count($arCurrentModels) <= 0) return FALSE;

        $arIdList = array();
        foreach ($arCurrentModels as $sItem) {
            $arIdList[] = $sItem['id'];
        }
        return $arIdList;
    }

    /**
     * 現行機種の色リスト
     *
     */
    public function currentColor()
    {
        return $this->CI->m_color_model->selectMultipleIds2Key($this->current_models_id_list());
    }

    /**
     * 現行機種の容量リスト
     *
     */
    public function currentStorage()
    {
        return $this->CI->m_storage_model->selectMultipleIds2Key($this->current_models_id_list());
    }

    /**
     * 基本料金のリスト取得
     *
     */
    public function price()
    {
        return $this->CI->price_list_model->select();
    }

/*----------------------------------------------------------------------------------------------------*
 * 機種・色・容量のID指定データ
 *----------------------------------------------------------------------------------------------------*/
    /**
     * 端末機種データ
     *
     */
    public function modelsById($id=null)
    {
        if (is_null($id) || !$id) return '';
        return $this->CI->m_models_model->selectById($id);
    }

    /**
     * 端末色データ
     *
     */
    public function colorById($id=null)
    {
        if (is_null($id) || !$id) return '';
        return $this->CI->m_color_model->selectById($id);
    }

    /**
     * 端末容量データ
     *
     */
    public function storageById($id=null)
    {
        if (is_null($id) || !$id) return '';
        return $this->CI->m_storage_model->selectById($id);
    }

    /**
     * 顧客形態絞込のリスト
     *
     */
    public function combo_customer_form_list()
    {
        $datalist = $this->customer_form_list();
        foreach ($datalist as $key => $data) {
            $customer_form_list[$key] = $data;
        }
        return $customer_form_list;
    }

    /**
     * ステータス絞込のリスト
     * @param bool $for_cond 日本共済側アカウント用パラメータ。絞り込み条件用にデータ返すか、
     *        一覧のステータス名をステータスIDではなく日本語で表示するために使う配列かの判別用
     *        $for_cond = TRUE : 絞り込み条件用
     *        $for_cond = FALSE: 一覧表示用
     * @return array ステータスのリスト
     */
    public function searchStatus($for_cond=FALSE)
    {
        $segment = $this->CI->uri->segment(1);
        switch ($segment) {
            case 'contract'        : $statusIds = array(2,3,4,5,6,7,8,9,10,11,12);break;
            case 'newlist'         : $statusIds = array(2,3,4,5,6,7,8,9,10,11,12);break;
            case 'shippinglist'    : $statusIds = array(3,4,5,6,10,11,12);break;
            case 'contractlist'    : $statusIds = array(6,7,9);break;
            case 'claim_payment'   : $statusIds = array(6,7,9);break;
        }

        $datalist = $this->status();
        $status_list[0] = '--';
        foreach ($datalist as $key => $data) {
            if (!in_array($key, $statusIds)) continue;
            $status_list[$key] = $data;
        }

        // 日本共済様側アカウント用 - 機種変情報入力済、機種変SB発注済はそれぞれ申込情報入力済、SB発注済に統一する
        if ($this->CI->session->userdata('user_type') != 2) {
            if ($for_cond) {
                if (isset($status_list[10])) unset($status_list[10]); //機種変情報入力済
                if (isset($status_list[12])) unset($status_list[12]); //機種変SB発注済
            } else {
                if (isset($status_list[4]) && isset($status_list[10])) $status_list[10] = $status_list[4]; //機種変情報入力済み → 申込情報入力済
                if (isset($status_list[5]) && isset($status_list[12])) $status_list[12] = $status_list[5]; //機種変SB発注済 → SB発注済
            }
        }

        return $status_list;
    }

    /**
     * 顧客形態絞込のリスト
     *
     */
    public function searchContractPeriod()
    {
        return array(
            1=>'2年契約',
            2=>'3年契約'
        );
    }

    /**
     * 表示件数のリスト
     *
     */
    public function displayCount()
    {
        return array(10, 20, 50, 100);
    }

    /**
     * 表示端末のリスト
     *
     */
    public function displayType()
    {
        return array(
            0=>'全て',
            1=>'iPadのみ',
            2=>'Nexus5のみ'
        );
    }

    /**
     * 新規or機種変更のリスト
     *
     */
    public function modelChange()
    {
        return array(
            0=>'--',
            1=>'新規のみ',
            2=>'機種変更のみ'
        );
    }

/*----------------------------------------------------------------------------------------------------*
 * 故障・紛失対応
 *----------------------------------------------------------------------------------------------------*/
    /**
     * 故障紛失対応 対応項目のリスト
     *
     */
    public function correspondingItems()
    {
        return array(
            1=>'故障',
            2=>'紛失',
            3=>'アプリ再DL',
        );
    }

    /**
     * 故障紛失対応 送料項目のリスト
     *
     */
    public function deliveryChargeItems()
    {
        return array(
            1=>'会社負担',
            2=>'会員負担',
            3=>'折半',
        );
    }

    /**
     * 故障・紛失対応 ステータス
     *
     */
    public function guranteeStatus()
    {
        return array(
            1=>'対応依頼中',
            2=>'発送完了',
            3=>'対応完了',
            4=>'対応キャンセル'
        );
    }
}
