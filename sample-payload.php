<?php

 return [
  'testimonial' => [
      'id' => 1,
      'type' => 'text|video',
      'public_url' => 'https://depoiment.us/s/xxxxx',
      'content' => [
          'body' => 'conteúdo do depoimento em texto',
          'special_quote' => 'Amei a interface!',
          'body_image' => 'https://depoimentus.s3.aws.com/xxxxx.jpg',
          'video_url' => 'https://video.depoimentus.com/xxxxxx.mp4',
      ],
      'author' => [
          'name' => 'João Pedro',
          'email' => 'japedro@email.com',
          'avatar' => 'https://depoimentus.s3.aws.com/avatares/xxxxx.jpg',
          'social_link' => 'https://instagram.com/user_3',
          'role_company' => 'CEO, LinkTree|null',
          'company_link' => 'https://linktree.com|null',
          'address' => 'Rua João Mario 34',
          'neighborhood' => 'Zone X',
          'city' => 'São Paulo',
          'country' => 'br',
          'zipcode' => '18033-222',
      ],
      'space' => [
          'id' => 1234,
          'name' => 'Espaço de Coleta X'
      ],
      'account_id' => 123,
      'created_at' => '2022/03/04 03:20:22',
];

?>
