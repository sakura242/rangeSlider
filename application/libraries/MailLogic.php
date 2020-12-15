<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * メール送信系ライブラリ <MailLogic>
 *
 *
 * @package    免許ラボ
 * @since      2016/11/07
 * @category   Library
 * @author     takehara@cmps.jp
 */
class MailLogic
{
    // const MAIL_TO   = 'info@menkyo-lab.com';
    const MAIL_TO   = 'dev.cmps@gmail.com';
    const MAIL_FROM = 'info@menkyo-lab.com';

    // SMTP経由メール設定項目
    // private static $_mailConfig = array(
    //     'protocol'  => 'smtp',
    //     'smtp_host' => 'mail.episode-oubo.jp',
    //     'smtp_port' => 587,
    //     'smtp_user' => self::MAIL_FROM,
    //     'smtp_pass' => 'episode2015'
    // );
    // const MAIL_TO   = 'info@menkyo-lab.com';
    // const MAIL_FROM = 'mail@episode-oubo.jp';

    // SMTP経由メール設定項目
    private static $_mailConfig = array(
        'protocol'  => 'smtp',
        'smtp_host' => 'info@menkyo-lab.com',
        'smtp_port' => 587,
        'smtp_user' => self::MAIL_FROM,
        'smtp_pass' => 'h5gxwzu8'
    );

    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('parser');
    }

    /**
     * 運営者向けメール
     * @param  array $params
     * @param  bool $dispContent
     * @return void
     */
    public function adminMail($params, $dispContent, $schooldate=null)
    {
        // $this->CI->load->library('email', self::$_mailConfig);
        $this->CI->load->library('email');
        $this->CI->email->set_wordwrap(false);
        $this->CI->email->from(self::MAIL_FROM, '免許ラボ');
        $this->CI->email->to(self::MAIL_TO);
        //CCで学校にメールを送る、メール送信フラグが1の場合は送信する
        if(!empty($params['type']) && $params['type'] == 1 && !empty($schooldate) && $schooldate['mailsendflg'] == 1 && !empty($schooldate['mail'])){
            $this->CI->email->cc($schooldate['mail']);
        }
        $this->CI->email->reply_to($params['mail'], $params['name']);
        $this->CI->email->subject("[免許ラボ] {$params['disp_type']}がありました");

        $params['date'] = date('Y/m/d H:i:s');

        if ($dispContent) {
            $body = $this->CI->parser->parse('mail_text/admin_mail1.tpl', $params, true);
        } else {
            $body = $this->CI->parser->parse('mail_text/admin_mail2.tpl', $params, true);
        }
        $this->CI->email->message($body);

        //メール送信
        $result = $this->CI->email->send();
    }

    /**
     * サンクスメール
     * @param  array $params
     * @param  bool $dispContent
     * @return void
     */
    public function thinksMail($params, $dispContent)
    {
        // $this->CI->load->library('email', self::$_mailConfig);
        $this->CI->load->library('email');
        $this->CI->email->set_wordwrap(false);
        $this->CI->email->from(self::MAIL_FROM, '免許ラボ');
        $this->CI->email->to($params['mail']);
        $this->CI->email->subject("[免許ラボ] お問い合わせいただきありがとうございます");

        $params['date'] = date('Y/m/d H:i:s');

        if ($dispContent) {
            $body = $this->CI->parser->parse('mail_text/thinks_mail1.tpl', $params, true);
        } else {
            $body = $this->CI->parser->parse('mail_text/thinks_mail2.tpl', $params, true);
        }
        $this->CI->email->message($body);

        //メール送信
        $this->CI->email->send();
    }
}
