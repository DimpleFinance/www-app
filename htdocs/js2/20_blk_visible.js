function blk_visible(item)
{
    var x = document.getElementsByClassName("item_type");
    var l = x.length;
    var t = "item_type_"+item;
    //console.log("link len: "+l);
    //log("TYPE "+item);
    for(var i = 0;i<l;i++)
    {
	console.log(x[i].id+' - '+t);
	if(x[i].id != t)	
	{
	x[i].classList.add('d-none');
	//console.log("+++++++++++++++");
	}
	else
	{
	x[i].classList.remove('d-none');
	//console.log("--------------");
	}
    }
    //item_switch(item);

    switch(item)
    {
	case "manage":
	t = "Service management";
	break;

	default:
//	case "stake":
	t = "Service management";
	break;
    }
    x = document.getElementById("item_title");
    x.innerHTML = t;
    t = t + ' .:. '+glob['title'];
    document.title = t;
//    var t = 'item_type_'+item;
//    console.log(t);


//    console.log(x);
//    x = document.getElementById(t);
//'item_type_'+item   
//    x.className = 'item_type'; 
//    x.innerHTML = 'd';
//    x.classList.remove("d-none");
}