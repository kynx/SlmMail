<?php
return array(
    'slm_mail' => array(
        'elastic_email' => array(
            'username' => 'my-username',
            'key' => 'my-secret-key'
        ),
        
        'mandrill' => array(
            'key' => 'my-secret-key'
        ),
        
        'postage' => array(
            'key' => 'my-secret-key'
        ),
        
        'postmark' => array(
            'key' => 'my-secret-key'
        ),
        
        'mailgun' => array(
            'domain' => 'my-domain',
            'key' => 'my-key',
            'api_endpoint' => 'mailgun-api-endpoint',
        ),
        
        'send_grid' => array(
            'username' => 'my-username',
            'key' => 'my-key'
        ),

        'spark_post' => array(
            'key' => 'my-secret-key'
        )
    ),
    
    'aws' => array(
        'region' => 'us-east-1',
        'version' => 'latest'
    )
);
