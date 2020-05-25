<?php

return [
    'alipay' => [
        'app_id'         => '2016101600702513',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAggKiFOKZUkto8XBgOvFQiUbSSsq99Jm5xALZx3LtV0Pte8QcnJpplNOo68kJaOh/nLCOOpGI+DGMY16oPB57o26DlCbsR7CneTmzYaTYNj2by5AtZKB3Ta5NHThEGVYetbPq2JdFgf1L9QnFBbGuHgoemtwzsAjNT8f6yTccJIux60yv8rbaVv039dNidPGuVb9+NDWSZag+T9nVlXGbCTvOfs69sFb4nEjC9VUw6md+TCAuZPvYon+miOullBIFWnFuAILuSPWqTFy/fZv99ScF/zPAt0sGK0PR/OCLKVAU7NDUinc2iEkWlZZaCX9EgNPBkbIG0TVfpB9GLQjwIwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAi1SRQZNmMYRr7lWQwOI2JMuOZApb32/ItxziXlk3ct364nwCxatS7c5OYEhPjB0DgQLwVhMGl3CDCxtndd8IQOs8A3s+3azQKSTsrivCAGGaeOJwxmS0urTpV5PisGjWX9aDpNmMiJ5PqSp8l1ZgvQ6aeyIMhCCddHMaxFbsDwYff4j6HHh2fE5sU1kZln7uB9KgtzVFiTzStL6eONY6B3UniYBhqxaMpZ0Q6JxnwyfRWdIFs0lykNK+gWxitpw6PafDTQjXvc0z3IQlb+MKRvqHD7Ne0e4GZvxgF92hDWD+9NdekvJxWcnGilewnI/kZcrvp5jNeGIjNahzyGP7TwIDAQABAoIBADoQlDhv5TbdqN06a4j2vPm4my614nPLcipdrzkClUkZmWSpqb4XGAhi4ebeO8h4ju1E/EPiyexyxynp0cQdnqLvZaNNyXU4f8ely70KH19pTabzN2x2q5rjqhsFVoOOLUjjbRlWUGrfDvPA8QtgxBAF9fs6xVyK+xN8pLsOPnJDzF99etYCR63nCOG01tO76MScz2d3HE2BUQSL+rks92Bb5hfseqlr0D9OVoRvAL21tS5ptBQRkEJuuAuHfcykaRBS2KDjswN7vw3DzTqDPrVhGSSTIpj3b1kvnMdyAhiFV+vw7DCrzZi4jEIpMYnM/sMMC/WEtExSpNTunQ6tngECgYEA1acS0Jh42uG+oNlK+rvV8o+cfKeVBkYYebI3xe2Uw4w8EnQuWImkuLsYQvyUgTlCZK8mScc00OKmPVWQU1pmdw48J2xWU2S3f4DenZ63CEdDewSb0jGDfwWSmEltyJ/lEIp0u28MYxmpy+rVhURYcPAhVTyz9rxAAByXjYU0rTECgYEApvJQbDhKUJ3fhAI/+xSsUH+B/QdRBvrg3+21fhz+Huxrj9+bWNwY9FsCk0HpjtYru9AGJJ9khn+K405bcpogkCacQ/W6R2R+gqDoA7VsQkFnbSvSC7A4D4xQh42CzWGRErJJ0N3Jk9T8/Tjgnb6Cp/LvzH474Tkk02R4D4efEH8CgYB9/Ys71V4XfV4Dzn/HwjLVWljmrZBU5csTIMSBBKxgcHcQTtDxxyGLClGxVu9gENsVMrA6e62qrK1pp+Z3MO0RsiRI/zsc7FzFZMJiYrD+wb+KcNpOpoIryqZ7BXonABt9mJhj24WLfxvBM5d8giRBXWnasPRTQQngxvucKfw5UQKBgD6b7XFIgwZMzsBxH5GIJT9jMlq0XbziZWdVfJU5RkxOmeAxGc9va6RoZUTYmUDKLUiYMVWWuVp/hpTMlBsclk25TS1ngF6534AZ3ClX5qvKX4Ffx7w+cCfUlXbgqUdg6ck7N9eu9aQNYnuM0yAVjGZ0A16LkOVcSuVEbopUcGD9AoGBAKl+jOqDPiFtpgrmNcgKWih1fSiTR23pmV2EIsheHE15yWAZVnZ9YVZVOYTOaT4eW2PWCtiFj5uLd+UBRznwZ1AaqZicHhc1+E5hmNXNFZutOuhAXdM6AqeI7yMToQ+C26GyZ1jz9n6vOW2ARqcXzyNdV9hXizCkBiNNLhyIlXeB',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];