function classList_add_remove(cname,on_or_off=1,cval='d-none')
{
    var x = document.getElementsByClassName(cname);
    var l = x.length;
    var i;
    for(i=0;i<l;i++)
    {
	if(on_or_off)
	x[i].classList.add(cval);
	else
	x[i].classList.remove(cval);
    }
}
