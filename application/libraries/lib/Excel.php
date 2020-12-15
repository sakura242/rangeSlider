<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Excel操作系ライブラリ <Excel>
 *
 *
 * @package    SDMS
 * @since      2016/05/02
 * @category   Library
 * @author     takehara@cmps.jp
 */
class Excel
{
    private $_phpexcel = null;

    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('lib_list');
        $this->CI->load->library('PHPExcel');
        $this->CI->load->model('member_info_model');
        $this->_phpexcel = new PHPExcel();
    }

    /**
     * 伝票出力
     * @param array 選択データの配列
     * @param string 発送日
     * @return string 伝票のファイル名
     */
    public function exportSlip($arSelectedData, $sShippingAt)
    {
        //テンプレート読み込み
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $objBook = $objReader->load(APPPATH."excel/slip/iPad_import_templete.xls");
        //シート設定
        $objBook->setActiveSheetIndex(0);
        $objSheet = $objBook->getActiveSheet();

        $iCount = count($arSelectedData);
        for ($i=0; $i<$iCount; $i++) {
            $arEach = $arSelectedData[$i];
            // 電話番号
            $sTel = $this->CI->convert->convertTel($arEach, 'tel');
            if (empty($sTel)) {
                $sTel = $this->CI->convert->convertTel($arEach, 'moba');
            }
            // 郵便番号
            $sZip = $this->CI->convert->convertZip($arEach);
            // 商品名
            $sIPadType = $arEach['disp_models'];
            $sProductName1 = "{$sIPadType} Wi-Fi+Cellular";
            $sProductName2 = "{$arEach['disp_storage']} {$arEach['disp_color']}";
            // set value
            $iRow = $i + 2;
            $objSheet->setCellValue('A'.$iRow, $sShippingAt); //iPad発送日
            $objSheet->setCellValue('B'.$iRow, $arEach['contract_number']); //契約番号
            $objSheet->setCellValue('C'.$iRow, $sTel); //電話番号
            $objSheet->setCellValue('D'.$iRow, $arEach['name']); //氏名
            $objSheet->setCellValue('E'.$iRow, $sZip); //郵便番号
            $objSheet->setCellValue('F'.$iRow, $arEach['address1']); //住所1
            $objSheet->setCellValue('G'.$iRow, $arEach['address2']); //住所2
            $objSheet->setCellValue('H'.$iRow, '様'); //敬称
            $objSheet->setCellValue('I'.$iRow, $sIPadType); //Air or Mini
            $objSheet->setCellValue('J'.$iRow, $sProductName1); //品名1
            $objSheet->setCellValue('K'.$iRow, $sProductName2); //品名2
        }
        $sDate = str_replace('/', '', $sShippingAt);
        $objWriter = PHPExcel_IOFactory::createWriter($sDate, "Excel5");
        $objWriter->save(APPPATH."excel/slip/iPad_import{$sDate}.xls");

        return "iPad_import{$sDate}.xls";
    }


    /**
     * デバイス注文票出力
     * @return Excelファイル or 機種変データがなければFALSE
     */
    public function exportOrder()
    {
        $this->CI->load->model('order_history_model');

        $arOrder = $this->CI->order_history_model->current_order_list();

        if (count($arOrder) < 1) {
            // 注文データが無かったら処理終了
            return FALSE;
        }

        $arData = array();
        foreach ($arOrder as $arItem) {
            $iModeldsId = $arItem['models_id'];
            $iColorId = $arItem['color_id'];
            $iStorageId = $arItem['storage_id'];
            $arData["$iModeldsId-$iColorId-$iStorageId"] = $arItem['number'];
        }

        //端末ID-カラーID-容量ID
        $arKey = array(
            'air_black_16'=>'3-5-9',        'air_black_64'=>'3-5-10',    'air_black_128'=>'3-5-11',
            'air_white_16'=>'3-6-9',        'air_white_64'=>'3-6-10',    'air_white_128'=>'3-6-11',
            'air_gold_16' =>'3-7-9',        'air_gold_64' =>'3-7-10',    'air_gold_128' =>'3-7-11',
            'mini_black_16'=>'6-13-17',        'mini_black_64'=>'6-13-18',    'mini_black_128'=>'6-13-19',
            'mini_white_16'=>'6-14-17',        'mini_white_64'=>'6-14-18',    'mini_white_128'=>'6-14-19',
            'mini_gold_16' =>'6-15-17',        'mini_gold_64' =>'6-15-18',    'mini_gold_128' =>'6-15-19',
            'nexus_white_16'=>'5-11-15',    'nexus_black_16'=>'5-12-15'
        );

        //
        foreach ($arKey as $sItem) {
            if (!isset($arData[$sItem])) $arData[$sItem] = 0;
        }

        //テンプレート読み込み
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $objBook = $objReader->load(APPPATH."excel/order/order_templete.xls");

        //シート設定
        $objBook->setActiveSheetIndex(0);
        $objSheet = $objBook->getActiveSheet();
        //日付
        $sDataYmd = date("Ymd");
        $sDataMdJp = date("m月d日");
        $objSheet->setCellValue('A2',  $sDataMdJp);
        // $objSheet->setCellValue('A11', $data_md_jp);
        //air
        $objSheet->setCellValue('C3', $arData[$arKey['air_black_16']]);
        $objSheet->setCellValue('D3', $arData[$arKey['air_black_64']]);
        $objSheet->setCellValue('E3', $arData[$arKey['air_black_128']]);
        $objSheet->setCellValue('C4', $arData[$arKey['air_white_16']]);
        $objSheet->setCellValue('D4', $arData[$arKey['air_white_64']]);
        $objSheet->setCellValue('E4', $arData[$arKey['air_white_128']]);
        $objSheet->setCellValue('C5', $arData[$arKey['air_gold_16']]);
        $objSheet->setCellValue('D5', $arData[$arKey['air_gold_64']]);
        $objSheet->setCellValue('E5', $arData[$arKey['air_gold_128']]);
        //mini
        $objSheet->setCellValue('C6', $arData[$arKey['mini_black_16']]);
        $objSheet->setCellValue('D6', $arData[$arKey['mini_black_64']]);
        $objSheet->setCellValue('E6', $arData[$arKey['mini_black_128']]);
        $objSheet->setCellValue('C7', $arData[$arKey['mini_white_16']]);
        $objSheet->setCellValue('D7', $arData[$arKey['mini_white_64']]);
        $objSheet->setCellValue('E7', $arData[$arKey['mini_white_128']]);
        $objSheet->setCellValue('C8', $arData[$arKey['mini_gold_16']]);
        $objSheet->setCellValue('D8', $arData[$arKey['mini_gold_64']]);
        $objSheet->setCellValue('E8', $arData[$arKey['mini_gold_128']]);
        //nexus
        // $objSheet->setCellValue('C12', $data[$key['nexus_black_16']]);
        // $objSheet->setCellValue('C13', $data[$key['nexus_white_16']]);

        $sOrderFile = APPPATH."excel/order/order_$sDataYmd.xls";
        $objWriter = PHPExcel_IOFactory::createWriter($objBook, "Excel5");
        $objWriter->save($sOrderFile);

        return $sOrderFile;
    }


    /**
     * デバイス注文票出力 機種変分
     * @return Excelファイル or 機種変データがなければFALSE
     */
    public function export_model_change_order()
    {
        // 機種変更データ取得
        $this->CI->load->model('contract_info_model');
        $arModelChange = $this->CI->contract_info_model->get_mc_enterd_data();

        if (count($arModelChange) < 1) {
            // 機種変データが無かったら処理終了
            return FALSE;
        }

        // テンプレート読み込み
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $objBook = $objReader->load(APPPATH."excel/model_change/model_change_templete.xls");

        //シート設定
        $objBook->setActiveSheetIndex(0);
        $sheet = $objBook->getActiveSheet();

        // 機種・容量・色のリリスト取得
        $models_list = $this->CI->lib_list->models_list();
        $storage_list = $this->CI->lib_list->storage_list();
        $color_list = $this->CI->lib_list->color_list();

        $iRow = 3;
        $iCount = 1;
        foreach ($arModelChange as $arData) {
            /* スタイル・値セット */
            // NO
            $objSheet->duplicateStyle($objSheet->getStyleByColumnAndRow(0, 3), 'A'.$iRow);
            $objSheet->setCellValue('A'.$iRow, $iCount);
            // MSN(デバイス電話番号)
            $objSheet->duplicateStyle($objSheet->getStyleByColumnAndRow(1, 3), 'B'.$iRow);
            $objSheet->setCellValueExplicit('B'.$iRow, $arData['device_number'], PHPExcel_Cell_DataType::TYPE_STRING);
            // 郵便番号
            $objSheet->duplicateStyle($objSheet->getStyleByColumnAndRow(2, 3), 'C'.$iRow);
            $objSheet->setCellValue('C'.$iRow, '6750067');
            // 住所(住所1)
            $objSheet->duplicateStyle($objSheet->getStyleByColumnAndRow(3, 3), 'D'.$iRow);
            $objSheet->setCellValue('D'.$iRow, '兵庫県加古川市加古川町河原333-1');
            // 建物名(住所2)
            $objSheet->duplicateStyle($objSheet->getStyleByColumnAndRow(4, 3), 'E'.$iRow);
            $objSheet->setCellValue('E'.$iRow, '');
            // 企業名
            $objSheet->duplicateStyle($objSheet->getStyleByColumnAndRow(5, 3), 'F'.$iRow);
            $objSheet->setCellValue('F'.$iRow, '日本共済株式会社');
            // 部署名
            $objSheet->duplicateStyle($objSheet->getStyleByColumnAndRow(6, 3), 'G'.$iRow);
            $objSheet->setCellValue('G'.$iRow, '共済事業部');
            // 担当者名
            $objSheet->duplicateStyle($objSheet->getStyleByColumnAndRow(7, 3), 'H'.$iRow);
            $objSheet->setCellValue('H'.$iRow, '兵頭');
            // TEL
            $objSheet->duplicateStyle($objSheet->getStyleByColumnAndRow(8, 3), 'I'.$iRow);
            $objSheet->setCellValue('I'.$iRow, '079-457-3120');
            //変更機種
            $temp_device = $models_list[$arData['device_type']]['name'];
            $temp_capacity = $storage_list[$arData['device_capacity']]['name'];
            $temp_color = $color_list[$arData['device_color']]['name'];
            $objSheet->duplicateStyle($objSheet->getStyleByColumnAndRow(9, 3), 'J'.$iRow);
            $objSheet->setCellValue('J'.$iRow, "{$temp_device} {$temp_capacity} {$temp_color}");
            $iRow++;
            $iCount++;
        }

        $data_ymd = date("Ymd");    //日付
        $order_file = APPPATH."excel/model_change/model_change_order_$data_ymd.xls";
        $writer = PHPExcel_IOFactory::createWriter($book, "Excel5");
        $writer->save($order_file);

        return $order_file;
    }
}
