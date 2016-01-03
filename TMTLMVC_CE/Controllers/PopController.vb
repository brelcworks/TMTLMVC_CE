Public Class PopController
    Inherits System.Web.Mvc.Controller

    '
    ' GET: /Pop

    Function Index() As ActionResult
        If Session("LogedUserID") IsNot Nothing Then
            Dim pops = New List(Of MAINPOPU)
            Dim dc As DB1Entities = New DB1Entities()
            pops = dc.MAINPOPU.ToList()
            Return View(pops)
        Else
            Return RedirectToAction("Index", "Home")
        End If
    End Function

End Class