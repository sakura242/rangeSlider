<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * モデルのabstract <MY_Model>
 *
 *
 * @package    免許ラボ
 * @since      2017/04/04
 * @category   Model
 * @author     takehara@cmps.jp
 */
class MY_Model extends CI_Model
{
    const DATA_EXIST = 'data_exist';

    /**
     * コンストラクタ
     */
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * テーブル名を取得
     *
     */
    function _get_table_name()
    {
        if (strstr(strtolower(get_class($this)), '_model')) {
            return substr(strtolower(get_class($this)), 0, -6);
        } else {
            return strtolower(get_class($this));
        }
    }

    /**
     * レコードの値を取得
     *
     */
    function get_record($where, $data = FALSE)
    {
        // テーブル名を取得
        $table = $this->_get_table_name();

        // WHERE句
        $this->db->where($where);

        // クエリの実行
        $query = $this->db->get($table);

        // 該当するレコードが存在する場合
        if($query->num_rows() !== 0)
        {
            return $data ? $query->result_array() : TRUE;
        }

        return FALSE;
    }

    /**
     * 条件に合致するすべてのデータを取得
     *
     */
    function get_all($params = array(), $obj_flg = FALSE)
    {
        $table = $this->_get_table_name();

        // 配列の要素をキー名の変数に格納
        if (!empty($params) AND is_array($params)) {
            extract($params);
        }

        // カラムの選択
        if(!empty($select)) $this->db->select($select);

        // WHERE句
        if (!empty($where)) $this->db->where($where);

        // ORDER BY句
        if (!empty($order_by)) $this->db->order_by($order_by);

        // GROUP BY句
        if (!empty($group_by)) $this->db->group_by($group_by);

        // LIMIT句
        $limit = (isset($limit)) ? $limit : null;

        // OFFSET句
        $offset = (isset($offset)) ? $offset : null;

        $query = $this->db->get($table, $limit, $offset);

        return $obj_flg ? $query->result() : $query->result_array();
    }

    /**
     * 条件に合致するレコード数を取得
     *
     */
    function count_all($params = array())
    {
        return count($this->get_all($params));
    }

    /**
     * 2つのフィールドのリストを取得
     *
     */
    function get_list($params)
    {
        $data = $this->get_all($params, FALSE); // 該当する全てのデータを配列で取得
        $fields = explode(',', str_replace(' ', '', $params['select'])); // リスト化する2つのフィールド名を取得
        $res = array(); // 結果配列を初期化

        if ( ! empty($data) AND is_array($data) AND count($fields) == 2)
        {
            foreach($data as $key => $val)
            {
                $res[$val[$fields[0]]] = $val[$fields[1]];
            }
        }

        return $res;
    }

    /**
     * ページネーションで任意のページに表示するデータを取得
     *
     */
    function get_pagination($params = array())
    {
        // テーブル名を取得
        $table = $this->_get_table_name();

        // 配列の要素をキー名の変数に格納
        if (!empty($params) AND is_array($params))
        {
            extract($params);
        }

        // WHERE句
        if (!empty($where)) $this->db->where($where);

        // ORDER BY句
        if (!empty($order)) $this->db->order_by($order);

        // LIMIT句
        $limit = (isset($limit) AND is_int($limit) AND 0 != $limit) ? $limit : 10;

        // OFFSET句
        $page = (int)$page;
        $page = ( ! isset($page) OR ! is_int($page)) ? 1 : $page;
        $offset = ($page - 1) * $limit;

        // クエリの実行
        $query = $this->db->get($table, $limit, $offset);

        return $query->result();
    }

    /**
     * 挿入処理
     *
     */
    function execute_insert($values)
    {
        // テーブル名を取得
        $table = $this->_get_table_name();

        $query = $this->db->insert_string($table, $values);
        $result = $this->db->query($query);

        if (!$result) {
            return FALSE;
        }
        return $this->db->insert_id();
    }


    /**
     * 更新処理
     *
     */
    function execute_update($values, $where)
    {
        // テーブル名を取得
        $table = $this->_get_table_name();

        $query = $this->db->update_string($table, $values, $where);
        $result = $this->db->query($query);

        if (!$result) {
            return FALSE;
        }
        return TRUE;
    }


    /**
     * 履歴更新処理
     *
     */
    function execute_replace_history($where)
    {
        // テーブル名を取得
        $table = $this->_get_table_name();
        // コピー元テーブル名を取得
        $source_table = str_replace('_history', '', $table);

        $query = 'REPLACE INTO '.$table.' SELECT * FROM '.$source_table.' WHERE '.$where.';';
        $result = $this->db->query($query);

        if (!$result) {
            return FALSE;
        }
        return TRUE;
    }

/*----------------------------------------------------------------------------------------------------*
 * 値変換系処理
 *----------------------------------------------------------------------------------------------------*/
    /**
     * 日付を加工
     *
     */
    protected static function convertYmdhis($sDate, $sAddDay='01')
    {
        if (empty($sDate)) return null;
        if (substr_count($sDate, '/') < 2) $sDate .= '/'.$sAddDay;
        return date('Y-m-d H:i:s', strtotime($sDate));
    }

    /**
     * 配列から指定の値を取得
     * 配列内に無いsColumnの場合はsEmptyStringに設定した値を返す
     */
    protected static function getArrayValue($arParam, $sColumn, $sEmptyString=null)
    {
        if (!empty($arParam[$sColumn])) {
            return $arParam[$sColumn];
        } else {
            return $sEmptyString;
        }
    }

    /**
     * 値の１行目の値を返す
     * 値が無い場合はsEmptyStringに設定した値を返す
     */
    protected static function returnFirstValue($arParam, $sEmptyString=null)
    {
        if (isset($arParam[0])) {
            return $arParam[0];
        } else {
            return $sEmptyString;
        }
    }
}
