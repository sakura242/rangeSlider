<?php
class Lgc_inquiry
{
    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->load->library('form_validation');
    }

/*----------------------------------------------------------------------------------------------------*
 * 入力チェック用処理
 *----------------------------------------------------------------------------------------------------*/

    private $_errorMsg = null;
    
    
    /**
     * エラーメッセージGETTER
     * 
     */
    public function getErrorMsg()
    {
        return $this->_errorMsg;
    }


    /**
     * 入力チェック
     * 
     */
    public function inputCheckForm()
    {
        $this->CI->form_validation->set_rules(self::inputRulesForm());
        $result = $this->CI->form_validation->run();


        $msg_list = array();
        $post_data = $this->CI->input->post();

        if (!$post_data) return FALSE;
        foreach ($post_data as $key => $value) {
            $msg_list[$key] = form_error($key, '<p class="error">', '</p>');
        }
        $this->_errorMsg = $msg_list;

        return $result;
    }
    
    
    /**
     * 入力チェックルール
     * 
     */
    public static function inputRulesForm()
    {
        return array(
            array(
                'field' => 'subject',
                'label' => 'お問い合わせの種類',
                'rules' => 'required',
            ),
            array(
                'field' => 'name',
                'label' => 'お名前',
                'rules' => 'required',
            ),
            array(
                'field' => 'tel1',
                'label' => '電話番号',
                'rules' => 'numeric',
            ),
            array(
                'field' => 'tel2',
                'label' => '電話番号',
                'rules' => 'numeric',
            ),
            array(
                'field' => 'tel3',
                'label' => '電話番号',
                'rules' => 'numeric',
            ),
            array(
                'field' => 'mail',
                'label' => 'メールアドレス',
                'rules' => 'required|callback__mail_format',
            ),
            array(
                'field' => 'demand',
                'label' => 'お問い合わせ内容',
                'rules' => 'required',
            ),
        );
    }
}
