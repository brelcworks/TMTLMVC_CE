Imports System.Web.Mvc
Public Class StockController
    Inherits System.Web.Mvc.Controller
    Dim dc As DB1Entities = New DB1Entities

    Function List() As ActionResult
        Return View(dc.TABLE1.ToList())
    End Function

    Function Details(ByVal id As Integer) As ActionResult
        Return View(dc.TABLE1.Find(id))
    End Function
    Function Create() As ActionResult
        Return View()
    End Function
    <HttpPost, ValidateAntiForgeryToken>
    Function Create(e As TABLE1) As ActionResult
        Using (dc)
            dc.TABLE1.Add(e)
            dc.SaveChanges()
        End Using
        Return RedirectToAction("List")
    End Function
End Class