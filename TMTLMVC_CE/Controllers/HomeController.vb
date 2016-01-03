Public Class HomeController
    Inherits System.Web.Mvc.Controller

    '
    ' GET: /Home

    Function Index() As ActionResult
        Return View()
    End Function
    <HttpPost> _
    Public Function Login(u As user1) As ActionResult
        ' this action is for handle post (login)
        If ModelState.IsValid Then
            ' this is check validity
            Using dc As New DB1Entities()
                Dim v = dc.user1.Where(Function(a) a.uid.Equals(u.uid) AndAlso a.pass.Equals(u.pass)).FirstOrDefault()
                If v IsNot Nothing Then
                    Session("LogedUserID") = v.uid.ToString()
                    Session("LogedUserFullname") = v.fname.ToString()
                    Return RedirectToAction("AfterLogin")
                Else
                    ViewBag.message = "Login Failed"
                End If
            End Using
        End If
        Return View(u)
    End Function

    Public Function AfterLogin() As ActionResult
        If Session("LogedUserID") IsNot Nothing Then
            Return View()
        Else
            Return RedirectToAction("Index")
        End If
    End Function
End Class