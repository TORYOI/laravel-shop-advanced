<?php

return [
    'alipay' => [
        'app_id'         => '2016091900546385',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzPoQQwS0dbYgJAvC/HvNiczLJJJtabdamGq5HfPmYtXK3buoanxF2eHgsq1fG6maDuYEB2t4hG/YrljDBUodPL9nimxKK+gyj5jAb2NIiopnh8fiZjauKvTzjQZFJS07XoJwaFJhtl31uP2GvsoUP/3+u+I//49WdrQu3dsl2vwPi4E8WGmj3nmVRRlzAhlGJneOrcIkVAE7uGq2ZXqREmBPqNu16kz6y8lRWL+jH7sZZxBYI4EKHkBCulWgouRRRxU08eIGh9IGfRAb2ta3h4uUJHcwv9SIMBjaT3Ug92vGMcDLWq3WoPxdQZaTqrdbO+4TdkSJm/P4PTgvNDCu/QIDAQAB',
        'private_key'    => 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCGt7c8656580K518ihoH1iW/XEas331ZT4iK0UsWajU1tJoe5Zyyr/tJOMymuHsfE48sr55rYW9tcNrpc8PvMnZ0VMvIWicKKPJRip9MJNiII3NjQdLTJDDpucuG3Yg1Qq52eOvKJZTBixU3Emi8pDc7ylssm3Ius42NE8Jn0E52bSaX4JlutH9syBA0xwMhGVXelrORxAF5csVo0gUbULG3qFma2G3orOQ0ishGyI3yuxmVChU7Wa6RUsyw8j/s4ks9KdQZcLw1II61tzdETO8o81SGVHrZuqkGZNMRYyd/X4LqdBTBcy7D8vhlDEF2ucSumZQ321ooE+GrqBYNMfAgMBAAECggEAQNuyHGJTyLKVLWP189qQgwpDCI1jHC53yjADJDNEdt1q1chgOFrYGMOXRfEuU+YXfJNnpWitweCVKMEljpu/9PiDJK6ep9YSbVgux6RO54URLAOsk19vE1m1EX65Y8PWgdFmyhGHF/bK7JR/pU8n0dGmwR+SfdkR5gx8r7jX98O88Dc3p7OUYq2zn/ykrTgQFJ72HLC8B5dW0S0pEFTD+vrg2Tou4OGQ9s075JVVMg8jKe9AwdDXgcVOt4BZF0d52UwvcLdBZ+e4Wh+54dFPSiV7gw63vqbpsWaXlAV/kx4aM8CtihlJ1Dwr0HFZT3/4/hsEbqGiFnsz0J45Rlj4AQKBgQDLTXI5ikZX15b+acV4VQD8PVGk6+sxX/tgHSX/tandy96629oc2tQus6f2m0syXGBkpvvtF3hsa1vrokcSoCjxUemhZLm9K+bJFkix2ipo24Dn3feufp7F52EtgiN10UxugSNFMMEaLEuuCMm5ZbX2FFD5bQV5cO8mwmwEVzw70QKBgQCpoy38llTDB/vsndwrAP68ciYk22tQtu5Fyhgxhra8HgNnOV3ga4SAxj1w0budS1tLgu+bOLUseZK9jxEX2DZOy/2HcdsL/aU7CtiBFU2danKldE+3tyduv+/MTzspyU1u6hqw5/wHCruRkXg6aZl4qZEGbFKm3SDV+TMLjCML7wKBgAe/wfTTgm7itsynt3EovErhA3Wn0GUnZWt6cPJYOEtN9AVnT979sEy/aE2MCce3oaz0eHHHDT4EsZI/sznQhP79wkv2jOXbAIb1pHuy9x7cDwPHgCNUjDS65wdXCIb7HVCw92kxvIqE2bWefCHm8JKan6OCNk00ssjlbDyWHqOhAoGANkt0PJQhLQsxJtqfzWPUJJykeMeB4aOrP8sfUzq64hr5G+DQmzPOhSjuIV3/nqiv38tYxWWxFzsSLHnODsO1HiNMUj2uznewmuUtxqL65JddendvzG1iwZ/NMKdrWESF9CoZwOV/VQGqZz0YLhn+dRBQyq2BBsdf6xyHqfqAfSECgYEAx1zyW/lv3nmlmIHfq0AnwMsmbNEq/Lrn2+uu//t4uLE1tvsaV1CAJLChmFt0MxVWwVRmcNsuhoIZw3T6vlM4mKXODyw+5Nc9AEK+fyxrzK0V1uijR/7Dstw+Z108pX+h/99zQQOCjiKGK0yBMsfId1I6jE4SfAE75MgDa5ApDrI=',
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
