@Code
    Layout = Nothing
End Code

<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <link href="~/Content/bootstrap.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="~/DESIGN/favicon.ico" />
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="~/Scripts/jquery-2.1.4.js"></script>
    <script src="~/Scripts/bootstrap.js"></script>
    <title>My MVC Web</title>
    <style type="text/css">
        .webgrid-table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            font-size: 0.8em;
            width: 100%;
            display: table;
            border-collapse: separate;
            border: solid 1px #98BF21;
            background-color: white;
            word-wrap :inherit ;
        }

            .webgrid-table td, th {
                border: 1px solid #98BF21;
                padding: 3px 7px 2px;
            }

        .webgrid-header {
            background-color: #A7C942;
            color: #FFFFFF;
            padding-bottom: 4px;
            padding-top: 5px;
            text-align: left;
        }

        .webgrid-footer {
        }

        .webgrid-row-style {
            padding: 3px 7px 2px;
        }

        .webgrid-alternating-row {
            background-color: #EAF2D3;
            padding: 3px 7px 2px;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-inverse" style="background-color :indigo  ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a>@Html.ActionLink("Population", "Index", "Pop")</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventory <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a>@Html.ActionLink("Stock List", "List", "Stock")</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-form navbar-right" role="search">
                    @If Session("LogedUserID") <> "" Then
                        @<fieldset>
                            <a>Welcome @Session("LogedUserFullname").ToString()</a>
                        </fieldset>
                    End If
                </div>
            </div>
        </div>
    </nav>
    <div>
    </div>
    @RenderBody()
</body>
</html>