<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 値調査ライブラリ <Research>
 *
 * 値調査関連ライブラリ
 *
 * @package    SDMS
 * @since      2016/04/22
 * @category   Library
 * @author     takehara@cmps.jp
 */
class Research
{
    function __construct()
    {
        $this->CI =& get_instance();
    }

    /**
     * 配列の次元数を調べる
     * @param array 調査する配列
     * @param int 次元数
     * @return int 次元数
     */
    public static function arrayDepth($arParams, $iCount=0)
    {
        if (is_array($arParams) && count($iCount)) {
            ++$iCount;
            $arCount = array($iCount);
            foreach ($arParams as $vEachParam) {
                if (is_array($vEachParam) && count($vEachParam)) {
                    $arCount[] = self::arrayDepth($vEachParam, $iCount);
                }
            }
            return max($arCount);
        }
        return $iCount;
    }
}
