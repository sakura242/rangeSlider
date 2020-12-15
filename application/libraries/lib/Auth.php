<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Authライブラリ <Auth>
 *
 * 認証関連ライブラリ
 *
 * @package    SDMS
 * @since      2016/04/21
 * @category   Library
 * @author     takehara@cmps.jp
 */
class Auth
{
    const SUCCESS = 0;       // ログイン成功
    const NOT_INPUT = 1;     // IDパスワードが入力されていない
    const PASS_MISMATCH = 2; // パスワードが一致しない
    const NOT_EXIST = 3;     // ユーザーが存在しない

    const MSG_NOT_INPUT = 'IDまたはパスワードが入力されていません'; // IDパスワードが入力されていないメッセージ
    const MSG_PASS_MISMATCH = 'パスワードが正しくありません';     // パスワードが一致しないメッセージ
    const MSG_NOT_EXIST = '入力されたIDのユーザーが存在しません'; // ユーザーが存在しないメッセージ
    const MSG_NOT_SUCESS = 'ログインに失敗しました';            // ログイン失敗デフォルトメッセージ

    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('administrator_model');
    }


    /**
     * ログインチェック
     *
     */
    public function checkLogin()
    {
        // ログインページとログインチェックメソッドではここでログインチェックしない
        $method = $this->CI->uri->segment(1);
        if ($method == 'login' || $method == 'login_check') return TRUE;

        $argument_list = self::_session_userinfo_list();

        foreach ($argument_list as $argument)
        {
            if ($this->CI->session->userdata($argument) === FALSE) return FALSE;
        }
        return TRUE;
    }


    /**
     * ログイン処理
     * @return array ログインチェック結果 エラーメッセージ
     */
    public function executeLogin()
    {
        $id = $this->CI->input->post('id');
        $pass = $this->CI->input->post('pass');

        /*----------------------------------------*
         * エラー：ログインまたはパスワードが入力されていない
         *----------------------------------------*/
        if ($id === '' || $pass === '') {
            return array(
                'result' => self::NOT_INPUT,
                'errmsg' => self::MSG_NOT_INPUT
            );
        }

        $result = $this->get_admin_user($id);

        /*----------------------------------------*
         * エラー：ユーザーが存在しない
         *----------------------------------------*/
        if (!$result) {
            return array(
                'result' => self::NOT_EXIST,
                'errmsg' => self::MSG_NOT_EXIST
            );
        }

        /*----------------------------------------*
         * エラー：パスワードが一致しない
         *----------------------------------------*/
        if ($result['pass'] != $pass) {
            return array(
                'result' => self::PASS_MISMATCH,
                'errmsg' => self::MSG_PASS_MISMATCH
            );
        }

        $userdata['user_id'] = $result['id'];
        $userdata['user_name'] = $result['name'];
        $userdata['user_status'] = $result['status'];
        $userdata['user_type'] = $result['user_type'];

        //ログイン日時登録
        $this->CI->administrator_model->update_login_at($id);

        // WEBAPIのレスポンスをセッションにセット
        $this->CI->session->set_userdata($userdata);

        return array(
            'result' => self::SUCCESS,
            'errmsg' => null
        );
    }


    /**
     * 管理者データ取得
     *
     */
    public function get_admin_user($id)
    {
        $admin_user = $this->CI->administrator_model->get_admin_user($id);
        return isset($admin_user[0]) ? $admin_user[0] : false;
    }


    /**
     * ログアウト処理
     *
     */
    public function execute_logout()
    {
        $argument_list = self::_session_userinfo_list();
        foreach ($argument_list as $argument)
        {
            $this->CI->session->unset_userdata($argument);
        }
    }


    /**
     * ログイン情報の配列を返す
     *
     */
    private static function _session_userinfo_list()
    {
        return array('user_id', 'user_name', 'user_status');
    }
}
