<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
mb_language('Japanese');
mb_internal_encoding('UTF-8');
class Lib_mail {

    const FROM_TITLE = 'たいらぶ';

    const TO_MAIL    = 'kanko@cmps.jp';
    // const TO_MAIL    = 'thai-support@thai-lover.net';
    const FROM_MAIL  = 'kanko@cmps.jp';
    // const FROM_MAIL  = 'thai-support@thai-lover.net';
    
    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('parser');
        $this->CI->load->library('email');
        $this->CI->email->set_wordwrap(FALSE); 
    }
    
/*----------------------------------------------------------------------------------------------------*
 * メール送信関連
 *----------------------------------------------------------------------------------------------------*/

    /*--------------------------------------------------*
     *
     * お問い合せメール送信＠顧客用
     *
     *--------------------------------------------------*/

    // 申込者へメール送信（お問い合わせフォーム）
    public function contact4Customer()
    {
        $data = $this->CI->input->post();
        $this->CI->email->from(self::FROM_MAIL, self::FROM_TITLE); // さくらで設定したメールアドレス
        $this->CI->email->to($data['mail']);
        $this->CI->email->subject('お問い合せいただきありがとうございます。'); // フォームのタイトル

        //メール本文
        $body = $this->CI->parser->parse('mail_text/inquiry_customer.tpl', $data, TRUE);
        $this->CI->email->message($body);
        
        //メール送信
        $this->CI->email->send();
    }

    /*--------------------------------------------------*
     *
     * お問い合せメール送信＠管理者用
     *
     *--------------------------------------------------*/

    // お問い合わせフォーム
    public function contact4Admin()
    {
        $data = $this->CI->input->post();
        $data['date'] = date('Y/m/d H:i:s');
        $this->CI->email->from($data['mail'], "{$data['name']} 様");
        $this->CI->email->reply_to($data['mail'], $data['mail']); // reply_to 返信先のメールアドレス
        $this->CI->email->to(self::TO_MAIL); //担当者のメールアドレス
        $this->CI->email->subject('お問合せがありました。');

        //メール本文
        $body = $this->CI->parser->parse('mail_text/inquiry_admin.tpl', $data, TRUE);
        $this->CI->email->message($body);

        //メール送信
        $this->CI->email->send();
        // exit();
        // $result = $this->CI->email->send();
        // var_dump($result);
        // exit();
    }


/*----------------------------------------------------------------------------------------------------*
 * 必要データ作成
 *----------------------------------------------------------------------------------------------------*/

}
