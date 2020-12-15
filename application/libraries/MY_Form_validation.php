<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * バリデーション系ライブラリ <MY_Form_validation>
 *
 *
 * @package    SDMS
 * @since      2016/04/24
 * @category   Library
 * @author     takehara@cmps.jp
 */
class MY_Form_validation extends CI_Form_validation
{
    function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
    }

    /**
     * Ymd日付チェック（スラッシュ区切り）
     * @param string $str 日付
     * @return bool 結果
     */
    public function ymd_slash_delimiter($str)
    {
        $bResult = true;
        // /の個数が2つでない場合はfalse
        if (substr_count($str, '/') != 2) {
            $bResult = false;
        }
        // 数値以外が含まれる場合はfalse
        foreach (explode('/', $str) as $iDate) {
            if (!is_numeric($iDate)) {
                $bResult = false;
                break;
            }
        }
        if ($bResult) {
            return true;
        } else {
            $this->set_message('ymd_slash_delimiter', '日付の形式が正しくありません');
            return false;
        }
    }

    /**
     * メールアドレス形式チェック
     * @param string $str メールアドレス
     * @return bool 結果
     */
    public function mail_format($str)
    {
        if (preg_match('|^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$|', $str)) {
            return true;
        } else {
            $this->set_message('mail_format', 'メールアドレスの形式が正しくありません');
            return false;
        }
    }

    /**
     * メールアドレスとメールアドレス確認用が一致するか
     * @return bool 結果
     */
    public function mail_match()
    {
        $mail = $this->CI->input->post('mail');
        $mail_conf = $this->CI->input->post('mail_che');

        if (!$mail || empty($mail)) return true;
        if (!$mail_conf || empty($mail_conf)) return true;

        if ($mail === $mail_conf) {
            return true;
        } else {
            $this->set_message('mail_match', 'メールアドレスが一致していません。再度確認してください。');
            return false;
        }
    }
}
