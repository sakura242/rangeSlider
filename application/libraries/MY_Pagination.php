<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * ページネーションライブラリ <MY_Pagination>
 *
 *
 * @package    SDMS
 * @since      2016/04/21
 * @category   Library
 * @author     takehara@cmps.jp
 */
class MY_Pagination extends CI_Pagination
{
    function __construct() {
        parent::__construct();
        $this->CI =& get_instance();
    }

    /**
     * ページネーション ※PCサイト用
     *
     */
    public function getPagination($limit, $totalRows, $controller, $method, $getparams=false, $cur_page=false)
    {

        $get_param = '?';
        if ($getparams && !empty($getparams)) $get_param .= $getparams;

        $config['num_links'] = 3;
        $config['page_query_string'] = true;
        $config['query_string_segment'] = 'page';
        $config['full_tag_open'] = '<div class="pager_box"><ul class="pager_list">';
        $config['full_tag_close'] = '</ul></div>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['prev_tag_open'] = '<li class="pager_list_btn pager_list_btn-left">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="pager_list_btn pager_list_btn-right">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '<p>前へ</p>';
        $config['next_link'] = '<p>次へ</p>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] ='<li><span>';
        $config['cur_tag_close'] ='</span></li>';
        $config['base_url'] = $base_url = base_url($controller.'/'.$method.'/'.$get_param); //遷移先URL
        $config['total_rows'] = $totalRows ; //全行数
        $config['per_page'] = $limit; //1ページあたりの行数
        //ページ指定
        if ($cur_page || strlen($cur_page)) {
            $config['cur_page'] = $cur_page;
        }
        $this->initialize($config);
        return $this->create_links();
    }

    /**
     * ページネーション ※SPサイト用
     *
     */
    public function getSpPagination($limit, $totalRows, $controller, $method, $getparams=false, $cur_page=false)
    {

        $get_param = '?';
        if ($getparams && !empty($getparams)) $get_param .= $getparams;

        $config['num_links'] = 2;
        $config['page_query_string'] = true;
        $config['query_string_segment'] = 'page';
        $config['full_tag_open'] = '<div><ul class="pager">';
        $config['full_tag_close'] = '</ul></div>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['prev_tag_open'] = '<li class="pager_list pager_list-prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="pager_list pager_list-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '<p>前へ</p>';
        $config['next_link'] = '<p>次へ</p>';
        $config['num_tag_open'] = '<li class="pager_list">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] ='<li class="pager_list"><span>';
        $config['cur_tag_close'] ='</span></li>';
        $config['base_url'] = $base_url = base_url($controller.'/'.$method.'/'.$get_param); //遷移先URL
        $config['total_rows'] = $totalRows ; //全行数
        $config['per_page'] = $limit; //1ページあたりの行数
        //ページ指定
        if ($cur_page || strlen($cur_page)) {
            $config['cur_page'] = $cur_page;
        }
        $this->initialize($config);
        return $this->create_links();
    }
}
