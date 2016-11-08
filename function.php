<?php

/**
 * 通过curl发送http请求
 * @param string $url 请求URL
 * @param array  $params 请求时所需要的参数
 * @param string $method 请求的方法GET、POST
 * @param boolean $post_json POST数据是否是JSON格式
 * @param boolean $return_json 返回值是否是JSON格式  
 */
function http_request($url, $params=array(), $method='GET', $headers = array(), $post_json = false, $return_json=false)
{
    $ch = curl_init();
    $method = strtoupper($method);
    switch ($method)
    {
        case 'GET':
            if ($params) $url .= '?'.http_build_query($params, '', '&');
            curl_setopt($ch, CURLOPT_URL, $url);
        case 'POST':
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            //是否提交JSON数据
            if ($post_json){
            	$headers[] = "Content-type: application/json";
            	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
            } else{
            	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params, '', '&'));
            }
            break;
        default:
            break;
    }
    if ($headers) curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_DNS_USE_GLOBAL_CACHE, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $content = curl_exec($ch);
    curl_close($ch);
    return $return_json ? json_decode($content, true) : $content;
}


function get_content()
{
	$p = @$_GET['p'];
	if (empty($p)) {
		header("Location: /");
		exit;
	}
	$url = "http://www.banlimi.com/" . ltrim($p, '/');
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
}
