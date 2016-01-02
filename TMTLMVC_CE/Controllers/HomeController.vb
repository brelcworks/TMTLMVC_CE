Public Class HomeController
    Inherits System.Web.Mvc.Controller

    '
    ' GET: /Home

    Function Index() As ActionResult
        Return View()
    End Function
    Function List() As ActionResult
        Dim pops = New List(Of MAINPOPU)
        Dim dc As DB1Entities = New DB1Entities()
        pops = dc.MAINPOPU.ToList()
        Return View(pops)
    End Function
End Class