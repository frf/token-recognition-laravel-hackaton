<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mercado Libre</title>
    <!-- CSS Reset -->
    <link rel="shortcut icon" href="http://static.mlstatic.com/org-img/chico/img/favicon.ico?new"/>
    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://http2.mlstatic.com/ui/webfonts/v3.0.0/proxima-nova/300-400.woff2.css">

    <style type="text/css">
        p strong {
            font-weight: normal;
        }

        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            image-rendering: -moz-crisp-edges;
            /* Firefox */
            image-rendering: -o-crisp-edges;
            /* Opera */
            /* Webkit (non-standard naming) */
            image-rendering: crisp-edges;
            -ms-interpolation-mode: nearest-neighbor;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*='margin: 16px 0'] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        a, td, h1, h2, h3, h4, h5, div {
            font-family: 'Proxima Nova', Helvetica, Arial !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table al=
ignment bug. Applies table-layout to the first 2 tables then removes for an=
ything nested deeper. */
        table {
            font-family: 'Proxima Nova', Helvetica, Arial !important;
            border-spacing: 0 !important;
            margin: 0 auto;
        }

        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in =
IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }

        table, tr, td, span, a {
            -webkit-text-size-adjust: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .bold {
            font-weight: 400;
        }

        .mail__title {
            width: 78.2% !important;
        }

        .div-table-wrapper {
            padding: 0;
            background-color: #fff;
        }

        /* This is necessary because of some interesting browsers... (bugs) */
        .im {
            text-decoration: none !important;
            font-family: 'Proxima Nova', Arial, Helvetica, sans-serif !important;
            font-weight: 300 !important;
            font-size: 14px !important;
            text-align: center !important;
            color: #333333 !important;
            margin: 0 auto !important;
            line-height: 1.29 !important;
            max-width: 367px !important;
            width: 100% !important;
        }

        .table-header-withouttitle {
            display: none;
        }

        .color_fuente {
            color: #999999;
        }

        @media only screen and (min-width: 480px) {
            .title {
                width: 78.2% !important;
            }

            .title span {
                font-size: 26px !important;
            }

            .responsive-width {
                display: block !important;
            }

            .responsive-width div {
                height: 50px !important;
                border: solid !important;
                box-shadow: 0 5px 10px #eeeeee !important;
                border-width: 0 !important;
                border-style: solid !important;
                border-color: #efefef !important;
                margin: 0 auto !important;
                background-color: #fff !important;
                display: block !important;
            }

            .main-card-shadow {
                border: solid !important;
                box-shadow: 0 10px 10px #eeeeee !important;
                border-width: 0 1px 2px 1px !important;
                border-style: solid !important;
                border-color: #efefef !important;
                width: 78.2% !important;
                margin: 0 auto !important;
            }

            .main-card-shadow-withouttitle {
                border: solid !important;
                box-shadow: 0 10px 10px #eeeeee !important;
                border-width: 1px 1px 2px 1px !important;
                border-style: solid !important;
                border-color: #efefef !important;
                width: 78.2% !important;
                margin: 0 auto !important;
            }

            .div-table-wrapper {
                background-color: #f8f8f8;
            }

            .responsive-width {
                width: 78.2% !important;
            }

            .main-card-shadow,
            .responsive-width {
                width: 78.2% !important;
            }

            .mail__title {
                display: inline-block;
            }

            .mail__text-card {
                line-height: 1.17 !important;
            }

            .mail__buttons-container {
                max-width: 70% !important;
                height: 36px !important;
            }

            /* Force break-line in disclaimer when is desktop */
            p span {
                display: block;
            }

            .table-header-withouttitle {
                display: block;
            }
        }
    </style>
</head>
<body>
<!-- PREHEADER -->
<span class="mail__preheader" style="font-size:1px; color: transparent; background-color: transparent; display:none
!important">

</span>
<!-- CONTAINER HACK - DONT REMOVE -->
<style>
    @import url('https://http2.mlstatic.com/ui/webfonts/v3.0.0/proxima-nova/300-400.woff2.css');
</style>
<table cellpadding="0" cellspacing="0" border="0" style="padding: 0; margin: 0 auto; width: 100%; max-width: 620px;">
    <tbody>
    <tr>
        <td colspan="3" style="padding:0px;margin:0px;font-size:1px;height:1px;" height="1">&nbsp;</td>
    </tr>
    <tr>
        <td style="padding:0px;margin:0px;font-size:1px;">&nbsp;</td>
        <td style="padding:0px;margin:0px;" width="590">
            <!-- HEADER -->
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <tr style="background-color: #ffffff;">
                    <td class="logo" style="padding: 11px 15px 8px 15px;">
                        <img class="mail__img-header" title="iconTitle" alt="MercadoLibre" border="0" width="125"
                             src="https://http2.mlstatic.com/ui/navigation/4.1.4/mercadopago/logo__large.png"
                             alt="Mercado Pago" title="Mercado Pago">
                    </td>
                    <td class="logo"
                        style="padding: 11px 23px 8px 15px; float:right; font-size:12px; font-weight: 300; line-height: 1.0; color:#333333; font-family: 'Proxima Nova', Helvetica, Arial ,sans-serif;">
                        <p style="float: right;">{{$name}}</p>
                    </td>
                </tr>
                </tbody>
            </table>


            <table class="table-header-withouttitle" align="center" width="100%" cellspacing="0" cellpadding="0"
                   border="0" style="text-align:center;background-color: #f8f8f8;">
                <tbody class="mail__img-footer">
                <tr style="background-color:#f8f8f8 !important;">
                    <td colspan="3" align="center" height="20"></td>
                </tr>
                </tbody>
            </table>


            <!-- content -->
            <div id="div-table-wrapper" class="div-table-wrapper" style="text-align:center;margin: 0 auto;">

                <table class="main-card-shadow-withouttitle" bgcolor="#ffffff" align="center" border="0" cellpadding="0"
                       cellspacing="0" style="box-shadow: none; border: none; padding: 48px 10px 0; text-align:center;">

                    <tbody>

                    <tr>
                        <td align="center">
                            <div
                                style="padding-left: 25px;padding-right: 25px;font-family: 'Proxima Nova', Arial,
                                Helvetica, sans-serif , Helvetica, Roboto, Arial, sans-serif; font-size: 18px; font-weight: 300; line-height:1.17; margin: 0px; color: #333;">
                                <p style="margin: 0; color:#666; font-size: 18px;">
                                    O token de confirmação da sua <b>venda</b> foi gerado com sucesso:
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div style="padding: 20px 0; font-family: 'Proxima Nova', Arial, Helvetica; font-size: 18px; font-weight:
        bold; line-height: 1.22; margin: 0px; color: #333;">
                                <p style="margin: 0; color:#666; font-size: 18px;">
                                    {{$token}}
                                </p>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td align="center">
                            <div style="padding-left: 25px;padding-right: 25px;font-family: 'Proxima Nova', Arial, Helvetica, Helvetica,
        Roboto, Arial, sans-serif; font-size: 14px; line-height: 1.17; margin: 0px; color: #333;">
                                <p style="font-family: 'Proxima Nova', Arial, Helvetica, Roboto, Arial, sans-serif;
                    font-size: 14px; font-weight: 100; line-height: 1.25; margin: 0px;color: #666;">
                                    Não compartilhe.
                                    Observe que ele será válido a partir do momento em que você recebeu este e-mail.
                                </p>
                            </div>
                        </td>
                    </tr>


                    <tr style="background-color:#ffffff !important;">
                        <td align="center" height="48"></td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <table align="center" width="100%" cellspacing="0" cellpaddi=
            ng="0" border="0"
                   style="text-align:center; background-color: #f8f8f8 !important;">
                <tbody class="mail__img-footer">
                <tr style="background-color:#f8f8f8 !important;">
                    <td colspan="3" align="center" height="10"></td>
                </tr>
                </tbody>
            </table>
            <!-- item detail -->

            <!-- FOOTER -->
            <table align="center" width="100%" cellspacing="0" cellpaddi=
            ng="0" border="0"
                   style="text-align:center; background-color: #f8f8f8 !important;">
                <tbody class="mail__img-footer">
                <tr style="background-color: #f8f8f8 !important;">
                    <td colspan="3" align="center" height="48"></td>
                </tr>
                <tr class="color_fuente" style="background-color: #f8f8f8; =
!important;">
                    <td colspan="3" align="center">
                        <span class="color_fuente"
                              style="font-family: 'Proxima Nova', Arial, Helvetica, sans-serif;font-size: 13px;font-weight: 300;line-height: 1.08;text-align: center;color: #999999;">Precisa de ajuda?</span>
                        <a href="https://www.mercadopago.com.br/ajuda" title="Fale conosco"
                           style="text-decoration: none; font-weight: normal; color: #3483fa;">Fale
                            conosco</a>
                    </td>
                </tr>
                <tr style="background-color: #f8f8f8 !important;">
                    <td colspan="3" align="center" height="30"></td>
                </tr>
                <!-- FOOTER -->
                </tbody>
            </table>
        </td>
        <td style="padding:0px;margin:0px;font-size:1px;">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3" style="padding:0px;margin:0px;font-size:1px;height:1px;" height="1">&nbsp;</td>
    </tr>
    </tbody>
</table>

<img src="https://u9647731.ct.sendgrid.net/wf/open?upn=g060N-2FF8BNyaIz=
     6szCXeLhU4-2FCutlQYWjQts34izrdicksHh0TfgHiUg0G74loZzTO0ayxX3FBp8HFRk5veYrSA=
     we1JaYDcE3958DI1tBGqKR0uWzrI-2BezqmSjQ8rI1kJUf8uLjzVRAPY-2FdJKXybjq-2FrK0lQ=
     mk6HsKrfGQbY8Me8kK3xFIpu4LXj64i3G6EFvtadma5Z1J-2B9PMRNcVoQiE0RrjRpJUPlOQQDM=
     GMFrDvBGWoSecZT8d9NiW-2BZqz4yMMkb-2F28MoiJLS92qS4Ctmzc7ENaevk7VXgjc3X8bGCmI=
     pi-2F2PZ4twi7HyyglY7VhjdzdleXxMQfcKluVBuaegXvWVRcrcS5DjTb0Xy-2F8WTYgRirEk-2=
     BLt1UeYUOdVO9zY-2F4XdNuU5MNp-2FxaYg6tf3Soucz36EQNhP8UVAslKlG4ZD8QpwYKk-2B12=
     KiOOnEq-2FEEGzIs4-2FdTNS7JMV8YyVF-2BjOzeUukaOpzsYotkQn6PgsFVNdviMXYxf7l86bJ=
     BVzQkQX2uJpAfJLh2ZoTqeyNS14GJ036WQgm8W-2BymWmGS-2FR9NDLQhCMfImUaF6kqF7KjI5J=
     PHnGa4-2F0q1k-2FqMIXDl6tg4h-2BJ-2Fht76Cs19OMmhQTm-2FWR5AP2VM0jQg6ucfNXEYg-2=
     B2z3H0FIay5A0zyfwFv6WJo7jJDoRqBCWsqTBP0FCibhbyPAsfZ5cBxAgbJHphSzwiIvdSK-2Fm=
     4b18e4uhg4uA--" alt="" width="1" height="1" border="0" style="height:1px !important;width:1px !important;border-width:0 !important;margin-top:0 !important;margin-bottom:0 !important;margin-right:0 !important;mar=
gin-left:0 !important;padding-top:0 !important;padding-bottom:0 !important;=
padding-right:0 !important;padding-left:0 !important;"/>
</body>
</html>
