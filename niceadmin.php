<?php

global $Wcms;

function plainadmin($args) {

    $args[0] .= <<<HTML
    <style>
    /* Using a quick hack to get a higher priority */

    body #adminPanel,
    body .subTitle {
        font-family: "Lato", sans-serif;
        font-variant: none;
    }

    body #adminPanel .nav li,
    body .subTitle {
        font-size: 1.2em;
    }

    #adminPanel div.editText {
        display: block;
        width: 100%;
        min-height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }

    #adminPanel .modal-header:before {
        content: "WonderCMS";
        display: block;
        font-size: 2em;
        position: absolute;
        top: 0.5em;
        left: 0;
        width: 100%;
        text-align: center;
    }

    #adminPanel #menuSettings {
        line-height: 2.25em;
    }

    #adminPanel .glyphicon {
        font-family: inherit;
    }
    #adminPanel .glyphicon:before {
        font-family: 'Glyphicons Halflings';
    }

    .alert {
        position: fixed;
        top: 1em;
        left: 50%;
        transform: translateX(-50%);
        z-index: 2000;
        box-shadow: 0 0 10em -1em #000;
    }
    #adminPanel .nav-tabs>li.active a, #adminPanel .tab-pane.active {
        outline: none;
    }
    div#save {
        top: 50%;
        left: 50%;
        width: auto;
        height: auto;
        padding: 2em 5em;
        transform: translate(-50%, -50%);
    }
    #save h2 {
        margin: 0;
    }
    </style>
HTML;

    return $args;
};

$Wcms->addListener('css', 'plainadmin');

?>
