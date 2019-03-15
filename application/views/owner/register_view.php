
<?php echo form_open('register/simpleform'); ?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
    body{
        text-align: center;
               }
        .formss{
            padding-top: 70px;
        }

    </style>
</head>

<body>

<div class="container">

    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                 <a class="navbar-brand" href="">Welcome</a>
            </div>
            </div>
        </nav>

    <div class="page-header"> <h1>Register With Us!</h1></div>



<div id="form_input" class="formss">
<!--
    <?php/*
    echo form_label('Username', 'username');
    $data= array(
    'name' => 'username',
    'placeholder' => 'Choose a username',
    'class' => 'username'
    );
    echo form_input($data);
    echo "<br />";
    echo form_label('Password', 'password');
    $data= array(
        'name' => 'password',
        'placeholder' => 'Choose a password',
        'class' => 'password'
    );
    echo form_input($data);
    */?> !-->

    <?php
    echo form_label('Name', 'username');
    $data= array(
        'name' => 'username',
        'placeholder' => 'Enter a name',
        'class' => 'username'
    );
    echo form_input($data);
    echo "<br />";
    echo form_label('Address', 'Address');
    $data= array(
        'name' => 'Address',
        'placeholder' => 'Enter Address',
        'class' => 'Address'
    );
    echo form_input($data);

    echo "<br />";
    echo form_label('Email', 'Email');
    $data= array(
        'name' => 'Email',
        'placeholder' => 'Enter an email',
        'class' => 'Email'
    );
    echo form_input($data);

    echo "<br />";
    echo form_label('Telephonenumber', 'Telephonenumber');
    $data= array(
        'name' => 'Telephonenumber',
        'placeholder' => 'Choose a phone number',
        'class' => 'Telephonenumber'
    );
    echo form_input($data);

    echo "<br />";
    echo form_label('Dateofbirth', 'Dateofbirth');
    $data= array(
        'name' => 'Dateofbirth',
        'placeholder' => 'Enter a DOB',
        'class' => 'Dateofbirth'
    );
    echo form_input($data);


    ?>
</div>

    <?php echo form_submit('submit', 'Submit'); ?>

    <?php echo form_close(); ?>

    </div>


</body>

</html>

