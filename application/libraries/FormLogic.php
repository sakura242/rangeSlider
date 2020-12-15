<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * フォームのロジックライブラリ <FormLogic>
 *
 *
 * @package    免許ラボ
 * @since      2016/11/07
 * @category   Library
 * @author     takehara@cmps.jp
 */
class FormLogic
{
    private $_errorMsg = null;
    private static $_rules = array(
        array(
            'field' => 'type',
            'label' => 'お問い合わせ内容',
            'rules' => 'required',
        ),
        array(
            'field' => 'sei',
            'label' => '姓',
            'rules' => 'required',
        ),
        array(
            'field' => 'name',
            'label' => '名',
            'rules' => 'required',
        ),
        array(
            'field' => 'sei_y',
            'label' => 'セイ',
            'rules' => 'required',
        ),
        array(
            'field' => 'name_y',
            'label' => 'メイ',
            'rules' => 'required',
        ),
        array(
            'field' => 'mail',
            'label' => 'メールアドレス',
            'rules' => 'required|mail_format',
        ),
        array(
            'field' => 'agree',
            'label' => '同意',
            'rules' => 'required',
        ),
    );

    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('form_validation');
        $this->CI->load->library('mailLogic','','mail');
        $this->CI->load->model('school_info_model');
    }

    /**
     * 教習所の料金プランページから遷移してきた場合、渡ってきた値を取得
     * @return [type] [description]
     */
    public function paramFromPlan()
    {
        return array(
            'school' => $this->CI->input->post('school'),
            'plan'   => $this->CI->input->post('plan')
        );
    }

    /**
     * お申込み内容欄の表示・非表示制御
     * @return bool
     */
    public function allowDisp()
    {
        $postData = $this->CI->input->post();
        if (isset($postData['school']) && !empty($postData['school'])
         && isset($postData['plan']) && !empty($postData['plan'])
        ) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * お問い合わせ内容のリスト
     * @param  int $typeId お問い合わせ内容のID
     * @return array or string
     */
    public static function inquiryType($typeId=null)
    {
        $typeList = array(
            1 => '教習所に関するお問い合わせ',
            2 => '掲載に関するお問い合わせ',
            3 => 'サイト利用に関するお問い合わせ',
            4 => 'その他',
        );
        if (is_null($typeId)) return $typeList;
        if (isset($typeList[$typeId])) {
            return $typeList[$typeId];
        } else {
            return null;
        }
    }

    /**
     * メール送信
     * @return void
     */
    public function sendMail()
    {
        $postData = $this->CI->input->post();
        $postData['disp_type'] = self::inquiryType($postData['type']);
        $dispContent = $this->allowDisp();
        //学校情報取得
        $datas = $this->CI->school_info_model->getSchoolData($postData);
        $this->CI->mail->adminMail($postData, $dispContent, $datas);
        $this->CI->mail->thinksMail($postData, $dispContent);
    }

    /**
     * 入力チェック
     * @return bool 入力チェック結果
     */
    public function inputCheck()
    {
        $rules = self::$_rules;

        if (count($rules) == 0) {
            return true;
        }
        $this->CI->form_validation->set_rules($rules);
        $result = $this->CI->form_validation->run();

        $msgList = array();
        foreach ($this->CI->input->post() as $key => $item) {
            $msgList[$key] = form_error($key, '<p class="error">', '</p>');
        }

        //チェックボックスとラジオボタン、ファイル添付用
        $checkList = array('type', 'agree');
        foreach ($checkList as $item) {
            if (!isset($msgList[$item])) {
                $msgList[$item] = form_error($item, '<p class="error">', '</p>');
            }
        }
        $this->_errorMsg = $msgList;
        return $result;
    }

    /**
     * エラーメッセージ取得
     * @return array　エラーメッセージ
     */
    public function getErrorMsg()
    {
        return $this->_errorMsg;
    }

    /**
     * フォームに渡ってくる前の教習所ページの教習所コード
     * @return string 教習所コード
     */
    public function getSchoolCode()
    {
        // POST値にcodeがあったらそれを返す
        $getparam = $this->CI->input->post('code');
        if ($getparam) return $getparam;

        // POST値にcodeが無ければリファラから取得。取れなければnull返す。
        if (!array_key_exists('HTTP_REFERER', $_SERVER)) return null;
        $referer = $_SERVER['HTTP_REFERER'];
        if (!strstr($referer, 'school')) return null;
        $referer = str_replace(base_url(), '', $referer);
        $referer = str_replace('school', '', $referer);
        return str_replace('/', '', $referer);
    }
}
