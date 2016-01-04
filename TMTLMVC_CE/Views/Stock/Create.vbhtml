@ModelType TMTLMVC_CE.TABLE1

@Code
    ViewData("Title") = "Create"
    Layout = "~/Views/Shared/_Layout1.vbhtml"
End Code

<h2>Create</h2>

@Using Html.BeginForm()
    @Html.AntiForgeryToken()
    @Html.ValidationSummary(True)

    @<fieldset>
        <legend>TABLE1</legend>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.RID1)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.RID1)
            @Html.ValidationMessageFor(Function(model) model.RID1)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.RID)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.RID)
            @Html.ValidationMessageFor(Function(model) model.RID)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.TYPE)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.TYPE)
            @Html.ValidationMessageFor(Function(model) model.TYPE)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.PART_NO)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.PART_NO)
            @Html.ValidationMessageFor(Function(model) model.PART_NO)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.PARTI)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.PARTI)
            @Html.ValidationMessageFor(Function(model) model.PARTI)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.MRP)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.MRP)
            @Html.ValidationMessageFor(Function(model) model.MRP)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.QTY)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.QTY)
            @Html.ValidationMessageFor(Function(model) model.QTY)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.TOTAL)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.TOTAL)
            @Html.ValidationMessageFor(Function(model) model.TOTAL)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.RACKNO)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.RACKNO)
            @Html.ValidationMessageFor(Function(model) model.RACKNO)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.TAX)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.TAX)
            @Html.ValidationMessageFor(Function(model) model.TAX)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.TVAL)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.TVAL)
            @Html.ValidationMessageFor(Function(model) model.TVAL)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.STOTAL)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.STOTAL)
            @Html.ValidationMessageFor(Function(model) model.STOTAL)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.PPRICE)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.PPRICE)
            @Html.ValidationMessageFor(Function(model) model.PPRICE)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.UNIT)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.UNIT)
            @Html.ValidationMessageFor(Function(model) model.UNIT)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.SPRICE)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.SPRICE)
            @Html.ValidationMessageFor(Function(model) model.SPRICE)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.SSTA)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.SSTA)
            @Html.ValidationMessageFor(Function(model) model.SSTA)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.EOR)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.EOR)
            @Html.ValidationMessageFor(Function(model) model.EOR)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.DPCODE)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.DPCODE)
            @Html.ValidationMessageFor(Function(model) model.DPCODE)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.lmodi)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.lmodi)
            @Html.ValidationMessageFor(Function(model) model.lmodi)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.grop)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.grop)
            @Html.ValidationMessageFor(Function(model) model.grop)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.AEDT)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.AEDT)
            @Html.ValidationMessageFor(Function(model) model.AEDT)
        </div>

        <div class="editor-label">
            @Html.LabelFor(Function(model) model.USER1)
        </div>
        <div class="editor-field">
            @Html.EditorFor(Function(model) model.USER1)
            @Html.ValidationMessageFor(Function(model) model.USER1)
        </div>

        <p>
            <input type="submit" value="Create" />
        </p>
    </fieldset>
End Using

<div>
    @Html.ActionLink("Back to List", "List")
</div>

