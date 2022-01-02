<?php

/*

//These are some templates for how the forms will work

[
    'name'=>'UserEmail',
    'typeName'=>'FormSelect',
    'selectLabel'=>'User',
    'options'=>[
        [
            "value"=>'Owen',
            "option"=>'owen'
        ],
        [
            "value"=>'Terrilee',
            "option"=>'terrilee'
        ],
        [
            "value"=>'Dustin',
            "option"=>'dustin'
        ]  
    ]
    
],

[
    'name'=>'Age',
    'typeName'=>'FormCheckbox',
    'checkboxTitle'=>'18+',
    'checkboxLabel'=>'Age',
    "required"=>true
],


[
    'name'=>'Message',
    'typeName'=>'FormTextarea',
    'placeolder'=>'Type your message here',
    'textareaLabel'=>'Message'
    
]



*/



$FormBuilderArray = [
    'Routes'=>[
        'companies'=>[
            'tokenAuth'=>'CompCreateAuth',
            'dbCreate'=>'CompanyName',
            'formTitle'=>'Add Company',
            'formName'=>'CompanyAddItem',
            'tableName'=>'Companies',
            'secondTable'=>'Users',
            'Sucess'=>'Company and User sucessfully created!',
            'items'=>[
                [
                    'name'=>'CompanyName',
                    'typeName'=>'FormInput',
                    'type'=>'text',
                    'inputLabel'=>'Company Name',
                    
                ],
                [
                    'name'=>'UserEmail',
                    'typeName'=>'FormInput',
                    'unique'=>True,
                    'type'=>'text',
                    'inputLabel'=>'User Email',
                    'secondTable'=>True
                    
                ],
                [
                    'name'=>'UserPassword',
                    'typeName'=>'FormInput',
                    'type'=>'password',
                    'inputLabel'=>'Password',
                    'secondTable'=>True                    
                ],
                [   //TODO: Work on getting the passwords match to work before the form is submited
                    'name'=>'UserPassword-confirm',
                    'typeName'=>'FormInput',
                    'passwordConfirm'=>'UserPassword',
                    'type'=>'password',
                    'inputLabel'=>'Confirm Password'
                ]
            ]
        ],
        'gen'=>[
            'view'=>true
        ],
        'server'=>[
            'view'=>True
        ],
        'users'=>[
            'formTitle'=>'Add Company',
            'formName'=>'CompanyAddItem',
            'items'=>[
                [
                    'name'=>'CompanyName',
                    'typeName'=>'FormInput',
                    'type'=>'text',
                    'inputLabel'=>'Company Name',
                    
                ],
                [
                    'name'=>'UserEmail',
                    'typeName'=>'FormSelect',
                    'selectLabel'=>'User',
                    'options'=>[
                        [
                            "value"=>'Owen',
                            "option"=>'owen'
                        ],
                        [
                            "value"=>'Terrilee',
                            "option"=>'terrilee'
                        ],
                        [
                            "value"=>'Dustin',
                            "option"=>'dustin'
                        ]  
                    ]
                    
                ],
                [
                    'name'=>'UserPassword',
                    'typeName'=>'FormInput',
                    'type'=>'password',
                    'inputLabel'=>'Password'
                    
                ],
                [
                    'name'=>'Age',
                    'typeName'=>'FormCheckbox',
                    'checkboxTitle'=>'18+',
                    'checkboxLabel'=>'Age',
                    "required"=>true
                    
                ],
                [
                    'name'=>'Address',
                    'typeName'=>'FormInput',
                    'type'=>'text',
                    'inputLabel'=>'Address'
                    
                ],
                [
                    'name'=>'Message',
                    'typeName'=>'FormTextarea',
                    'placeolder'=>'Type your message here',
                    'textareaLabel'=>'Message'
                    
                ]
            ]
        ]

    ]
];