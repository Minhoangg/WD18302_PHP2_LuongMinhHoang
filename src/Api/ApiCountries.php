<?php

namespace app\src\Api;

class ApiCountries
{
    private $urlApi;

    public function __construct($urlApi) {
        $this->urlApi = $urlApi;
    }

    public function getCountriesData() {
        // Thiết lập giới hạn thời gian thực thi lên 60 giây (1 phút)
        set_time_limit(60);

        // Khởi tạo session cURL
        $ch = curl_init();

        // Thiết lập URL và các tùy chọn cURL
        curl_setopt($ch, CURLOPT_URL, $this->urlApi);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Tắt kiểm tra chứng chỉ SSL
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        // Thực thi session cURL và lấy dữ liệu phản hồi từ API
        $response = curl_exec($ch);

        // Kiểm tra và xử lý phản hồi từ API
        if ($response === false) {
            return "Failed to fetch data: " . curl_error($ch);
        } else {
            $countries_data = json_decode($response, true);

            // Sắp xếp mảng các quốc gia theo tên
            usort($countries_data, function($a, $b) {
                return strcmp($a["name"]["common"], $b["name"]["common"]);
            });

            // Đóng session cURL
            curl_close($ch);

            return $countries_data;
        }
    }
}


