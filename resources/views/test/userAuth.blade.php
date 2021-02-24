<!DOCTYPE html>
<html>
    <head>
        <title>Test user auth</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }



        </style>

        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/moment.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form method="post" action="/api/users/auth">
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Телефон (10 цифр)</label>
                            <input type="text" class="form-control" name="phone" value="9262204080" />
                        </div>
                        <div class="col-lg-12">
                            <label>Подпись запроса</label>
                            <input type="text" class="form-control" name="sign" value="9bc17545b9cd19847539e1b81daa07fe5ef9dc0c" />
                        </div>
                        <div class="col-lg-12" style="margin-top: 5px">
                            <input type="submit" class="btn btn-success" value="Оправить" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
