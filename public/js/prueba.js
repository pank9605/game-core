CKEDITOR.replace('editor1',{
    filebrowserUploadUrl: "{{route(\'upload\', [\'_token\' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});

function validateDelete(form){
    var res = confirm("¿Desea Eliminar a este Fundador?");
    if (res != true){
        return false;
    }
}



