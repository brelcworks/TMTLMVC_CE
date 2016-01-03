﻿@ModelType List(Of TMTLMVC_CE.MAINPOPU)

@Code
    Dim grid = New WebGrid(source:=Model, canPage:=False, canSort:=True)
End Code

        @grid.GetHtml(tableStyle:="table table-hover table-bordered", _
                   columns:=grid.Columns( _
                        grid.Column("sid", "Site Id"),
                        grid.Column("Cname", "Customer"), _
                        grid.Column("sname", "Site Name"), _
                        grid.Column("rat_ph", "Rating"), _
                        grid.Column("phase", "Phase"), _
                        grid.Column("ens", "Engine Sr. No"), _
                        grid.Column("dgno", "DG Set No"), _
                        grid.Column("cpn", "Contact Person"), _
                        grid.Column("phno", "Ph. No"), _
                        grid.Column("doc", "DT. of Comm.") _
                        ) _
                    )
    