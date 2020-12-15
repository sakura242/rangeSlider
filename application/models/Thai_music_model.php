<?php
/**
 * 教習所情報モデル <School_info_model>
 *
 *
 * @package    免許ラボ
 * @since      2017/04/04
 * @category   Model
 * @author     takehara@cmps.jp
 */
class Thai_music_model extends MY_Model
{
    private $CI = null;

    function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
    }

    
    /**
     * タイミュージック一覧取得
     * 
     */
    public function music_list()
    {
        $param = array(
            'where' => 'status = 1 AND delete_flg = 0',
            'order_by' => 'id DESC'
        );
        return $this->get_all($param);
    }
    
    
    /**
     * タイミュージックデータ取得
     * 
     */
    public function music_record($id=FALSE)
    {
        $id = intval($id);
        if ($id === FALSE) {
            return NULL;
        }
        $param = array('where' => "music_id = '{$id}' AND status = 1 AND delete_flg = 0");
        $result = $this->get_all($param);
        if (isset($result[0])) {
            return $result[0];
        } else {
            return NULL;
        }
    }

    
    /**
     * タイミュージックデータ取得 プレビュー用
     * 
     */
    public function music_preview($id=FALSE)
    {
        $id = intval($id);
        if ($id === FALSE) {
            return NULL;
        }
        $param = array('where' => "id = '{$id}' AND delete_flg = 0");
        $result = $this->get_all($param);
        if (isset($result[0])) {
            return $result[0];
        } else {
            return NULL;
        }
    }

    
    /**
     * タイミュージックデータ取得 プレビュー用
     * 
     */
    public function music_other($id=FALSE)
    {
        $id = intval($id);
        if ($id === FALSE) {
            return NULL;
        }
        $param = array('where' => "id != '{$id}' AND status = 1 AND delete_flg = 0");
        $result = $this->get_all($param);
        shuffle($result);
        if (isset($result[0])) {
            return $result[0];
        } else {
            return NULL;
        }
    }
}