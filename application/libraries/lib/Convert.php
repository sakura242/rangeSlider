<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 値変換ライブラリ <Convert>
 *
 * 値変換関連ライブラリ
 *
 * @package    SDMS
 * @since      2016/04/22
 * @category   Library
 * @author     takehara@cmps.jp
 */
class Convert
{
    private $_arDeviceModel = null;
    private $_arDeviceStorage = null;
    private $_arDeviceColor = null;
    private $_arCustomerForm = null;
    private $_arStatus = null;

    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('lib/arraylist');
    }

/*------------------------------------------------------------------------------------------*
 * 電話番号
 *------------------------------------------------------------------------------------------*/
    /**
     * 電話番号番号をハイフン付きの文字列に加工する
     * @param array
     * @param string 郵便番号の配列キー
     * @param string 値が取れなかった時に返す文字列
     * @return string ステータス名
     */
    public static function convertTel($arParam, $sKey='tel', $sEmptyString='')
    {
        if (!empty($arParam["{$sKey}1"]) || !empty($arParam["{$sKey}2"]) || !empty($arParam["{$sKey}3"])) {
            return $sEmptyString;
        }
        if (!is_numeric($arParam["{$sKey}1"]) || !is_numeric($arParam["{$sKey}2"]) || !is_numeric($arParam["{$sKey}3"])) {
            return $sEmptyString;
        }
        return "{$arParam["{$sKey}1"]}-{$$arParam["{$sKey}2"]}-{$$arParam["{$sKey}3"]}";
    }

/*------------------------------------------------------------------------------------------*
 * 郵便番号
 *------------------------------------------------------------------------------------------*/
    /**
     * 郵便番号をハイフン付きの文字列に加工する
     * @param array
     * @param string 郵便番号の前半の配列キー
     * @param string 郵便番号の後半の配列キー
     * @param string 値が取れなかった時に返す文字列
     * @return string ステータス名
     */
    public static function convertZip($arParam, $sKey1='zip1', $sKey2='zip2', $sEmptyString='')
    {
        if (!empty($arParam[$sKey1]) || !empty($arParam[$sKey2])) {
            return $sEmptyString;
        }
        if (!is_numeric($arParam[$sKey1]) || !is_numeric($arParam[$sKey2])) {
            return $sEmptyString;
        }
        return "{$arParam[$sKey1]}-{$$arParam[$sKey2]}";
    }

/*------------------------------------------------------------------------------------------*
 * デバイス関連
 *------------------------------------------------------------------------------------------*/
    /**
     * デバイス端末コードを文字列に変換
     * @param variant
     * @param string 配列キー
     * @param string 値が取れなかった時に返す文字列
     * @return string ステータス名
     */
    public function convertDeviceModel($vParam, $sKey=null, $sEmptyString='')
    {
        $iDeviceId = null;
        if (is_array($vParam)) {
            if (!isset($vParam[$sKey]) || empty($sKey)) {
                return $sEmptyString;
            }
            $iDeviceId = $vParam[$sKey];
        } else {
            $iDeviceId = $vParam;
        }

        if (is_null($this->_arDeviceModel)) {
            $this->_arDeviceModel = $this->CI->arraylist->models();
        }

        if (isset($this->_arDeviceModel[$iDeviceId]['name'])) {
            return $this->_arDeviceModel[$iDeviceId]['name'];
        } else {
            return $sEmptyString;
        }
    }

    /**
     * デバイス容量コードを文字列に変換
     * @param variant
     * @param string 配列キー
     * @param string 値が取れなかった時に返す文字列
     * @return string ステータス名
     */
    public function convertDeviceStorage($vParam, $sKey=null, $sEmptyString='')
    {
        $iStorageId = null;
        if (is_array($vParam)) {
            if (!isset($vParam[$sKey]) || empty($sKey)) {
                return $sEmptyString;
            }
            $iStorageId = $vParam[$sKey];
        } else {
            $iStorageId = $vParam;
        }

        if (is_null($this->_arDeviceStorage)) {
            $this->_arDeviceStorage = $this->CI->arraylist->storage();
        }

        if (isset($this->_arDeviceStorage[$iStorageId]['name'])) {
            return $this->_arDeviceStorage[$iStorageId]['name'];
        } else {
            return $sEmptyString;
        }
    }

    /**
     * デバイス色コードを文字列に変換
     * @param variant
     * @param string 配列キー
     * @param string 値が取れなかった時に返す文字列
     * @return string ステータス名
     */
    public function convertDeviceColor($vParam, $sKey=null, $sEmptyString='')
    {
        $iColorId = null;
        if (is_array($vParam)) {
            if (!isset($vParam[$sKey]) || empty($sKey)) {
                return $sEmptyString;
            }
            $iColorId = $vParam[$sKey];
        } else {
            $iColorId = $vParam;
        }

        if (is_null($this->_arDeviceColor)) {
            $this->_arDeviceColor = $this->CI->arraylist->color();
        }

        if (isset($this->_arDeviceColor[$iColorId]['name'])) {
            return $this->_arDeviceColor[$iColorId]['name'];
        } else {
            return $sEmptyString;
        }
    }

    /**
     * 顧客形態コードを文字列に変換
     * @return string ステータス名
     */
    public function convertCustomerForm($iCustomerFormCode)
    {
        if (is_null($this->_arCustomerForm)) {
            $this->_arCustomerForm = $this->CI->arraylist->customerForm();
        }

        if (isset($this->_arCustomerForm[$iCustomerFormCode])) {
            return $this->_arCustomerForm[$iCustomerFormCode];
        } else {
            return null;
        }
    }

    /**
     * ステータスコードを一括で文字列に変換
     * @param array 変換する配列 ※参照渡し
     * @param array 配列に追加するカラム名
     * @return void
     */
    public function deviceBulkConverting(&$arParams, $arAppendNames=array('disp_model', 'disp_storage', 'disp_color'))
    {
        $this->CI->load->library('lib/research');
        $iDepth = Research::arrayDepth($arParams); //配列の次元数取得

        if ($iDepth == 1) {
            // 1次元配列の場合
            if (isset($arParams['device_type'])) {
                $arParams[$arAppendNames[0]] = $this->convertDeviceModel($arParams['device_type']);
            }
            if (isset($arParams['device_capacity'])) {
                $arParams[$arAppendNames[1]] = $this->convertDeviceStorage($arParams['device_capacity']);
            }
            if (isset($arParams['device_color'])) {
                $arParams[$arAppendNames[2]] = $this->convertDeviceColor($arParams['device_color']);
            }
        } elseif ($iDepth == 2) {
            // 2次元配列の場合
            foreach ($arParams as $sKey => $sValue) {
                if (isset($sValue['device_type'])) {
                    $arParams[$sKey][$arAppendNames[0]] = $this->convertDeviceModel($sValue['device_type']);
                }
                if (isset($sValue['device_capacity'])) {
                    $arParams[$sKey][$arAppendNames[1]] = $this->convertDeviceStorage($sValue['device_capacity']);
                }
                if (isset($sValue['device_color'])) {
                    $arParams[$sKey][$arAppendNames[2]] = $this->convertDeviceColor($sValue['device_color']);
                }
            }
        }
    }

/*------------------------------------------------------------------------------------------*
 * ステータス関連
 *------------------------------------------------------------------------------------------*/
    /**
     * ステータスコードを文字列に変換
     * @param intステータスコード
     * @param string 値が取れなかった時に返す文字列
     * @return string ステータス名
     */
    public function convertStaus($iStatusCode, $sEmptyString=null)
    {
        if (is_null($this->_arStatus)) {
            $this->_arStatus = $this->CI->arraylist->status();
        }

        if (isset($this->_arStatus[$iStatusCode])) {
            return $this->_arStatus[$iStatusCode];
        } else {
            return $sEmptyString;
        }
    }

    /**
     * ステータスコードを一括で文字列に変換
     * @param array 変換する配列 ※参照渡し
     * @param string 変換するカラム名 デフォルトは'status'
     * @param string 配列に追加するカラム名 デフォルトは'disp_status'
     * @return void
     */
    public function statusBulkConverting(&$arParams, $sTargetName='status', $sAppendName='disp_status')
    {
        $this->CI->load->library('lib/research');
        $iDepth = Research::arrayDepth($arParams); //配列の次元数取得

        if ($iDepth == 1) {
            // 1次元配列の場合
            if (isset($arParams[$sTargetName])) {
                $arParams[$sAppendName] = $this->convertStaus($arParams[$sTargetName]);
            }
        } elseif ($iDepth == 2) {
            // 2次元配列の場合
            foreach ($arParams as $sKey => $sValue) {
                if (isset($sValue[$sTargetName])) {
                    $arParams[$sKey][$sAppendName] = $this->convertStaus($sValue[$sTargetName]);
                }
            }
        }
    }
}
