@ModelType list(of TMTLMVC_CE.MAINPOPU)

@Code
    Layout = Nothing
    Dim grid = New WebGrid(source:=Model, canPage:=True, rowsPerPage:=10)
End Code

<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Index</title>
</head>
<body>
    <div>
        @grid.GetHtml
    </div>
</body>
</html>
