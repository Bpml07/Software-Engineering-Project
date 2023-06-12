<?php
session_start();
include_once('host.php');
?>
<!DOCTYPE html>
<html>

<head>

    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            padding: 10px;
            background: #f1f1f1;
        }


        /* styling */
        /* header */
        .header {
            padding: 30px;
            text-align: center;
            background: white;
        }

        .header h1 {
            font-size: 50px;
        }

        /* topnav bar */
        .topnav {
            overflow: hidden;
            background-color: black;

        }

        /* topnav links */
        .topnav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* topnav hover color */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        /*
	/* columns (body) */
        .leftcolumn {
            float: left;
            width: 75%;
        }

        .rightcolumn {
            float: left;
            width: 25%;
            background-color: #f1f1f1;
            padding-left: 20px;
        }

        /*card effect */
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        /* clear floats after columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* responsive layout effects */
        @media screen and (max-width:800px) {

            .leftcolumn,
            .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }

        @media screen and (max-width:400px) {

            .leftcolumn,
            .rightcolumn {
                width: 100%;
                float: none;
            }
        }

        /* footer */
        .footer {
            background-color: lightgrey;
            padding: 20px;
            margin-top: 20px;
            text-align: right;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .btn-group button {
            background-color: #ADD8E6;
            /* light blue background */
            border: 1px solid black;
            /* black border */
            color: black;
            /* Black text */
            padding: 35px 24px;
            /* Some padding */
            cursor: pointer;
            /* Pointer/hand icon */
            float: left;
            /* Float the buttons side by side */
        }

        /* Clear floats (clearfix hack) */
        .btn-group:after {
            content: "";
            clear: both;
            display: table;
        }

        .btn-group button:not(:last-child) {
            border-right: none;
            /* Prevent double borders */
        }

        /* Add a background color on hover */
        .btn-group button:hover {
            background-color: #f1f1f1;
        }

        .btn-group>div {
            background-color: #ADD8E6;
            /* light blue background */
            border: 1px solid black;
            /* black border */
            color: black;
            /* Black text */
            padding: 20px 24px;
            /* Some padding */
            cursor: pointer;
            /* Pointer/hand icon */
            float: left;
            /* Float the buttons side by side */
            text-align: center;
            width: 25%;
            display: flex;
            flex-direction: column;

        }

        .price {
            text-align: center;
        }

        .name {
            text-align: center;
        }

        .btn-group div:hover {
            background-color: #f1f1f1;
        }

        li {
            list-style: none;
        }

        .check-out-item-link {
            color: black;
        }
    </style>

    <script>
    </script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</head>

<body>
    <div class="header">
        <h1>7 Brunch</h1>
        <p>Menu</p>
    </div>