function cron_action()
{
    var act =     glob["cron_action"];

    console.log(act+" "+glob["cron_action_counter"]);
    switch(act)
    {
	case "manage_balance":
	    manage_balance();
	break;
    }
glob["cron_action_counter"]++;
}
setInterval(cron_action,1000);

/*
    console.log("FUNC: api_load_wallet");
    var url = glob["api2_url"] + 'balance/'+login_get();
//    console.log(url);
    getData(url,"ajax_update(xhr.response);");

*/
function manage_balance()
{
    var url;
    if(glob["cron_action_counter"] >= 5)
    glob["cron_action_counter"] = 0;

    if(glob["cron_action_counter"]==0)
    {

        url = glob["api_url"] + 'balance/'+login_get();
	console.log("Need download balance "+url);
        getData(url,"ajax_update(xhr.response);");
    }
}