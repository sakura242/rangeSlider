<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 教習所詳細のロジックライブラリ <SchoolLogic>
 *
 *
 * @package    免許ラボ
 * @since      2016/11/16
 * @category   Library
 * @author     takehara@cmps.jp
 */
class Lgc_music
{
    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('thai_music_model');
    }


    /**
     * タイミュージック一覧取得
     * 
     */
    public function music_list()
    {
        return $this->CI->thai_music_model->music_list();
    }


    /**
     * タイミュージックデータ取得
     * 
     */
    public function music_record($id)
    {
        return $this->CI->thai_music_model->music_record($id);
    }


    /**
     * タイミュージックデータ取得（プレビュー用）
     * 
     */
    public function music_preview($id)
    {
        return $this->CI->thai_music_model->music_preview($id);
    }


    /**
     * タイミュージックデータ取得（他の曲紹介用）
     * 
     */
    public function music_other($id)
    {
        return $this->CI->thai_music_model->music_other($id);
    }
}