@ModelType List(Of TMTLMVC_CE.MAINPOPU)

@Code
    Layout = Nothing
    Dim grid = New WebGrid(source:=Model, canPage:=False, canSort:=True)
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
    <title>Population</title>
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
                <div class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
            </div>
        </div>
    </nav>
    <div>
        @grid.GetHtml(tableStyle:="table table-hover table-bordered", _
                   columns:=grid.Columns( _
                        grid.Column("sid", "Site Id"),
                        grid.Column("Cname", "Customer"), _
                        grid.Column("sname", "Site Name"), _
                        grid.Column("rat_ph", "Rating"), _
                        grid.Column("phase", "Phase"), _
                        grid.Column("ens", "Engine Sr. No"), _
                        grid.Column("dgno", "DG Set No"), _
                        grid.Column("doc", "DT. of Comm.") _
                        ) _
                    )
    </div>
</body>
</html>