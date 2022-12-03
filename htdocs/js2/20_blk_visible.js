function blk_visible(item,item2)
{
    var x = document.getElementsByClassName("item_type");
    var l = x.length;

/*
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
*/
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

    switch(item2)
    {
	case "txs":
	    t = "Transactions .:. "+glob['title'];
	break;
	case "balance":
	    t = "Balance .:. "+glob['title'];
	break;
	case "staking":
	    t = "Staking .:. "+glob['title'];
	break;
	case "faucet":
	    t = "Faucet .:. "+glob['title'];
	break;
	case "all":
	break;

    }

    document.title = t;

    x = document.getElementsByClassName('pages');
    l = x.length;
    for(i=0;i<l;i++)
    {
	x[i].classList.add('d-none');
    }
    x = document.getElementsByClassName('page_'+item2);
    l = x.length;
    for(i=0;i<l;i++)
    {
	x[i].classList.remove('d-none');
    }

    glob["cron_action"] = item+"_"+item2;
    glob["cron_action_counter"] = 0;

//    var t = 'item_type_'+item;
//    console.log(t);


//    console.log(x);
//    x = document.getElementById(t);
//'item_type_'+item   
//    x.className = 'item_type'; 
//    x.innerHTML = 'd';
//    x.classList.remove("d-none");
}