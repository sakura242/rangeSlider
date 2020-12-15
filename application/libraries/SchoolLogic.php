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
class SchoolLogic
{
    private static $_dispCount = 10; //教習所一覧の1ページあたり表示件数

    private static $_keys = null;

    private static $_schoolList = array(
        'oyama'             => '小山自動車教習所',
        'kagohara'          => 'かごはら自動車学校',
        'tochiko'           => '栃交自動車学校',
        'imaichi'           => '今市自動車教習所',
        'yabuki'            => '矢吹自動車教習所',
        'gakuenchuo'        => '学園中央自動車学校',
        'saitama'           => '埼玉県自動車学校',
        'houtoku'           => '報徳自動車学校',
        'kuroisominami'     => '黒磯南自動車教習所',
        'sankyo'            => '三共自動車教習所',
        'utunomiyatomaturi' => '宇都宮戸祭自動車教習所',
        'okamotodai'        => '宇都宮岡本台自動車学校',
        'tochigichubu'      => '栃木県中部自動車学校',
        'shimodate'         => '下館自動車学校',
        'honjo'             => '埼玉本庄自動車学校',
        'ibaragiishioka'    => '茨城県石岡自動車学校',
        'tobukasumi'        => '東武かすみ自動車教習所',
        'iwatuki'           => 'いわつき自動車学校',
        'musashino'         => '寄居武蔵野自動車教習所',
        'fineageo'          => 'ファインモータースクール上尾校',
        'finesashiougi'     => 'ファインモータースクール指扇校',
        'fineomiya'         => 'ファインモータースクール大宮校',
        'ibarakiken_sakai'  => '茨城県自動車学校境校',
        'hanno'             => '飯能自動車学校',
        'tochigi'           => '栃木自動車教習所',
        'ogose'             => 'おごせ自動車学校',
        'kasukabe'          => '春日部自動車教習所',
        'higashisaitama'    => '東埼玉自動車教習所 ',
        'ibaraginaka'       => '那珂安全自動車学校',
        'gunmanumata'       => '沼田自動車教習所',
        'tanigawa'          => '谷川ドライビングスクール',
        'ohwatari'          => '大渡自動車学校',
        'nishin'            => '日進自動車教習所',
        'azumaen'           => '東園自動車教習所',
        'nishikashiwa'      => '西柏自動車教習所',
        'yanasebashi'       => '柳瀬橋自動車教習所',
        'shibukawa'         => '南渋川自動車教習所',
        'isesaki'           => '伊勢崎自動車教習所',
        'tochigikyoritu'    => '栃木県共立自動車学校',
        'nikko'             => '日光自動車学校',
        'mitodaiichi'       => '水戸第一自動車学校'
    );

    private static $_area = array(
        1 => '北海道地方',
        2 => '東北地方',
        3 => '関東地方',
        4 => '中部地方',
        5 => '近畿地方',
        6 => '中国地方',
        7 => '四国地方',
        8 => '九州地方・沖縄地方',
    );

    private static $_pref = array(
        1  => '北海道',
        2  => '青森県',
        3  => '岩手県',
        4  => '宮城県',
        5  => '秋田県',
        6  => '山形県',
        7  => '福島県',
        8  => '茨城県',
        9  => '栃木県',
        10 => '群馬県',
        11 => '埼玉県',
        12 => '千葉県',
        13 => '東京都',
        14 => '神奈川県',
        15 => '新潟県',
        16 => '富山県',
        17 => '石川県',
        18 => '福井県',
        19 => '山梨県',
        20 => '長野県',
        21 => '岐阜県',
        22 => '静岡県',
        23 => '愛知県',
        24 => '三重県',
        25 => '滋賀県',
        26 => '京都府',
        27 => '大阪府',
        28 => '兵庫県',
        29 => '奈良県',
        30 => '和歌山県',
        31 => '鳥取県',
        32 => '島根県',
        33 => '岡山県',
        34 => '広島県',
        35 => '山口県',
        36 => '徳島県',
        37 => '香川県',
        38 => '愛媛県',
        39 => '高知県',
        40 => '福岡県',
        41 => '佐賀県',
        42 => '長崎県',
        43 => '熊本県',
        44 => '大分県',
        45 => '宮崎県',
        46 => '鹿児島県',
        47 => '沖縄県',
    );

    private static $_pref1 = array(
        1  => '北海道',
    );

    private static $_pref2 = array(
        2  => '青森県',
        3  => '岩手県',
        4  => '宮城県',
        5  => '秋田県',
        6  => '山形県',
        7  => '福島県',
    );

    private static $_pref3 = array(
        8  => '茨城県',
        9  => '栃木県',
        10 => '群馬県',
        11 => '埼玉県',
        12 => '千葉県',
        13 => '東京都',
        14 => '神奈川県',
    );

    private static $_pref4 = array(
        15 => '新潟県',
        16 => '富山県',
        17 => '石川県',
        18 => '福井県',
        19 => '山梨県',
        20 => '長野県',
        21 => '岐阜県',
        22 => '静岡県',
        23 => '愛知県',
    );

    private static $_pref5 = array(
        24 => '三重県',
        25 => '滋賀県',
        26 => '京都府',
        27 => '大阪府',
        28 => '兵庫県',
        29 => '奈良県',
        30 => '和歌山県',
    );

    private static $_pref6 = array(
        31 => '鳥取県',
        32 => '島根県',
        33 => '岡山県',
        34 => '広島県',
        35 => '山口県',
    );

    private static $_pref7 = array(
        36 => '徳島県',
        37 => '香川県',
        38 => '愛媛県',
        39 => '高知県',
    );

    private static $_pref8 = array(
        40 => '福岡県',
        41 => '佐賀県',
        42 => '長崎県',
        43 => '熊本県',
        44 => '大分県',
        45 => '宮崎県',
        46 => '鹿児島県',
        47 => '沖縄県',
    );

    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('pagination');
        $this->CI->load->model('school_info_model');
        $this->CI->load->model('partner_school_model');
    }

/*------------------------------------------------------------------------------------------*
 * 教習所一覧
 *------------------------------------------------------------------------------------------*/
    /**
     * エリアリスト
     * @return array　エリアリスト
     */
    public static function getAreaList()
    {
        return self::$_area;
    }

    /**
     * 都道府県リスト
     * @return array 都道府県リスト
     */
    public function getPrefList($id=null)
    {
        //検索条件取得
        $filter = $this->getFilter();
        //地域指定されている場合
        if (isset($filter['area_id']) && !empty($filter['area_id'])) {
            $id = $filter['area_id'];
        }

        $result = array();
        if($id == 1){
            $result = self::$_pref1;
        }else if($id == 2){
            $result = self::$_pref2;
        }else if($id == 3){
            $result = self::$_pref3;
        }else if($id == 4){
            $result = self::$_pref4;
        }else if($id == 5){
            $result = self::$_pref5;
        }else if($id == 6){
            $result = self::$_pref6;
        }else if($id == 7){
            $result = self::$_pref7;
        }else if($id == 8){
            $result = self::$_pref8;
        }else{
            $result = self::$_pref;
        }
        return $result;
    }

    /**
     * 検索条件
     * @return array 検索条件
     */
    public function getFilter()
    {
        $offset = $this->CI->input->get('page');
        if (empty($offset) || !is_numeric($offset)) $offset = 0;
        return array(
            'area_id'       => $this->CI->input->get('area_id'),
            'pref_id'       => $this->CI->input->get('pref_id'),
            'offset'        => $offset,
            'display_count' => self::$_dispCount,
        );
    }

    /**
     * 教習所IDと教習所名取得
     * @return array 教習所IDと教習所名の配列
     */
    public function getSchoolList()
    {
        $filter = $this->getFilter();
        $datas = $this->CI->school_info_model->getSchoolList($filter);
        if (!$datas) return null;

        // 提携校データ取得
        $partners = self::getPartnerSchool();

        $return = array();
        foreach ($datas as $record) {
            $temp = array();
            $temp = $record;
            // 都道府県コードを元に都道府県名セット
            $temp['pref_name'] = '';
            if (isset(self::$_pref[$record['pref_id']])) {
                $temp['pref_name'] = self::$_pref[$record['pref_id']];
            }
            // 提携校の場合は値も追加
            if (isset($partners[$record['code']])) {
                $addData = $partners[$record['code']];
                // idカラムは不要
                unset($addData['id']);
                $temp = array_merge($temp, $addData);
                // 提携校フラグ立てておく
                // $temp['pay_flg'] = 1;
            }
            $return[$record['code']] = $temp;
        }
        return $return;
    }

    /**
     * ページネーション取得
     * @param  string PC or SP
     * @return string ページネーションHTMLコード
     */
    public function pagenation($param)
    {
        // 該当データ総数
        $iRows = $this->getContractCount();
        // ページ番号
        $offset = $this->CI->input->get('page');
        if (!is_numeric($offset)) $offset=false;

        // ページネーションのHTMLコード生成して返す
        if ($param == 'pc') {
            return $this->CI->pagination->getPagination(
                self::$_dispCount,
                $iRows,
                'search',
                'schoollist',
                $this->_getparams(),
                $offset
            );
        } else {
            return $this->CI->pagination->getSpPagination(
                self::$_dispCount,
                $iRows,
                'search',
                'schoollist',
                $this->_getparams(),
                $offset
            );
        }
    }

    /**
     * GETの条件取得
     * @return array 絞り込み条件
     */
    private function _getparams()
    {
        $keywords = array(
            'area_id',
            'pref_id',
        );
        $filter = array();
        foreach ($keywords as $keyword) {
            $param = $this->CI->input->get($keyword);
            if (!$param && $param !== '0') continue;
            $filter[] = "{$keyword}={$param}";
        }
        if (count($filter) == 0) return false;
        return implode('&amp;', $filter);
    }

    /**
     * 学校一覧の該当件数取得
     * @return int 学校一覧の該当件数
     */
    public function getContractCount()
    {
        return $this->CI->school_info_model->getContractCount();
    }

/*------------------------------------------------------------------------------------------*
 * 詳細ページ
 *------------------------------------------------------------------------------------------*/
    /**
     * 教習所名取得
     * @return string 教習所名
     */
    public function getSchoolNameById($schoolId)
    {
        $schoolList = $this->getSchoolList();
        if (isset($schoolList[$schoolId]['school_name'])) {
            return $schoolList[$schoolId]['school_name'];
        } else {
            return '';
        }
    }

    /**
     * 教習所データ取得
     * @param  string $code 教習所コード
     * @return array  教習所データ
     */
    public function getSchoolInfo($code=null)
    {
        if (empty($code)) return null;
        $schoolData = $this->getSchoolData(array('code' => $code));
        if (!$schoolData) return null;
        $schoolData['pref_name'] = isset(self::$_pref[$schoolData['pref_id']]) ? self::$_pref[$schoolData['pref_id']] : '';
        return $schoolData;
    }

    /**
     * 教習所データ取得
     * @param  array $param 教習所コードか教習所ID
     * @return array 教習所データ
     */
    public function getSchoolData($param)
    {
        return $this->CI->school_info_model->getSchoolData($param);
    }

    /**
     * 提携校かチェック
     * @param  string $schoolcode
     * @return boolean
     */
    public static function checkAffiliated($schoolcode)
    {
        if (isset(self::$_schoolList[$schoolcode])) {
            return true;
        }
        return false;
    }


    /**
     * 提携教習所データ取得
     *
     * @param  array $param 教習所コードか教習所ID
     * @return array 教習所データ
     */
    public function getPartnerSchool()
    {
        // partner_schoolデータ取得
        $partnerSchoolList = $this->CI->partner_school_model->getAllDatas();

        $partners = array();
        foreach ($partnerSchoolList as $row => $partnerRecord) {
            $partners[$partnerRecord['code']] = $partnerSchoolList[$row];
        }
        return $partners;
    }
}
