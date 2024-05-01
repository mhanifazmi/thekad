<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Tailwind Starter Template - Landing Page Template: Tailwind Toolbox
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        html {
            width: 100%;
            height: 100%;
        }

        body {
            text-align: center;
            margin: 0px;
            padding: 0px;
            height: 100%;
            color: #fff;
            font-family: sans-serif;
            background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
            background-size: 400% 400%;
            -webkit-animation: Gradient 15s ease infinite;
            -moz-animation: Gradient 15s ease infinite;
            animation: Gradient 15s ease infinite;
        }

        .vh {
            height: 100%;
            align-items: center;
            display: flex;
        }

        .vh>div {
            width: 100%;
            text-align: center;
            vertical-align: middle;
        }

        img {
            max-width: 100%;
        }

        .wrap {
            text-align: center;
        }

        .wrap h1 {
            font-size: 30px;
            font-weight: 700;
            margin: 0 0 90px;
        }

        .wrap h2 {
            font-size: 24px;
            font-weight: 400;
            line-height: 1.6;
            margin: 0 0 80px;
        }

        @-webkit-keyframes Gradient {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0% 50%
            }
        }

        @-moz-keyframes Gradient {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0% 50%
            }
        }

        @keyframes Gradient {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0% 50%
            }
        }
    </style>
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <div class="vh">
        <div>
         <div class="wrap">
          <h1>Maintenance mode</h1>
          <h2><p>Sorry for the inconvenience.<br>Our website is currently undergoing scheduled maintenance.<br><br></p></h2>
          <p>Thank you for your understanding.</p>
          </div>
        </div>
      </div>
</body>

</html>
