<?php
  // cUrlでAPIを叩く
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://yuki-design-blog.microcms.io/api/v1/blog');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

  $headers[] = 'X-MICROCMS-API-KEY: ce58188d4ff64a9bbc341a253268c069c4c6';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $response = curl_exec($ch);
  curl_close($ch);

  // 取得したら表示
  $blogArray = json_decode($response, true);
?>