$('.delete-btn').click(function()
{
    var res=confirm('You are want delete?');
    if(!res)
    {
    return false;
    }
}

);

tinymce.init({
  selector: '.editor',
  plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
  toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
  toolbar_mode: 'floating',
  tinycomments_mode: 'embedded',
  tinycomments_author: 'Author name',
});
