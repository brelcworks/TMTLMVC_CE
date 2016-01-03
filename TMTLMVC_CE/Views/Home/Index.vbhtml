﻿@ModelType TMTLMVC_CE.user1

@Code
    Layout = Nothing
End Code

<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <link href="~/Content/bootstrap.min.css" rel="stylesheet" />
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="~/Scripts/jquery-2.1.4.js"></script>
    <script src="~/Scripts/bootstrap.js"></script>
    <title>Index</title>
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
                    </ul>
                    <div class="navbar-form navbar-right" role="search" >
                        @Using (Html.BeginForm("Login", "Home", FormMethod.Post))
                            @<fieldset>
                                    @Html.TextBoxFor(Function(model) model.uid)
                                    @Html.PasswordFor(Function(model) model.pass)
                                 <button type="submit" class="btn btn-primary btn-xs" value="Login">Sign In</button>
                            </fieldset> 
                        End Using 
                   </div>
                </div>
            </div>
        </nav>
        <div>
           <h1 >This is Index</h1>
        </div>
</body>
</html>
