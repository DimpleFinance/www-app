function cron_action()
{
    var act =     glob["cron_action"];

    console.log(act+" "+glob["cron_action_counter"]);
	    manage_balance();
    switch(act)
    {
	case "manage_balance":
//	    manage_balance();
	break;
	case "manage_staking":
	    manage_staking();
	break;
    }
glob["cron_action_counter"]++;
}
setInterval(cron_action,500);

/*
    console.log("FUNC: api_load_wallet");
    var url = glob["api2_url"] + 'balance/'+login_get();
//    console.log(url);
    getData(url,"ajax_update(xhr.response);");

*/
function manage_balance()
{
    var url;
    if(glob["cron_action_counter"] >= 10)
    glob["cron_action_counter"] = 0;

    if(glob["cron_action_counter"]==0)
    {
        url = glob["api_url"] + 'balance/'+login_get();
	console.log("Need download balance "+url);
        getData(url,"ajax_update(xhr.response);");
    }
}
function manage_staking()
{
    var x;
    x = document.getElementById('btn_stake');
    x.innerHTML = 'Stake';
    glob["action"]["staking"] = "stake_approve();";
    //console.log(glob["api_info"]["allowance_usdc"]);
    if(glob["api_info"]["allowance_usdc"]=="0")
    {
	x = document.getElementById('modal_staking');
	if(x.innerHTML != "Approve")
	{
	x.innerHTML = "Approve";
	glob["action"]["staking2"] = 'web3_stake_allowance(-1);';
	}
    }
    else
    {
	x = document.getElementById('modal_staking');
	if(x.innerHTML != "Stake")
	{
	x.innerHTML = "Stake";
	//glob["action"]["staking2"] = 'web3_stake();';
	glob["action"]["staking2"] = 'StakeClick();';
	}
	
    }
    x = document.getElementById('btn_unstake');
    x.innerHTML = 'Untake';
//    glob["action"]["unstaking"] = "UnstakeClick();";
    glob["action"]["unstaking"] = "unstake_modal_show();";

}
function stake_approve()
{
$('#modal_stake').modal('show');

}
function unstake_modal_show()
{
$('#modal_unstake').modal('show');

}


function stake_click()
{
    e = glob["action"]["staking"];
    if(e)
    {
	eval(e);
    }
}
function unstake_click()
{
    e = glob["action"]["unstaking"];
    if(e)
    {
	eval(e);
    }
}

function modal_staking_btn_click()
{
    e = glob["action"]["staking2"];
    if(e)
    {
	eval(e);
    }
    
}
function set_unstake_value()
{
    var x = document.getElementById('unstake_amount');
    x.value = glob["api_info"]["balance_stdimple"];
}
function set_stake_value()
{
    var x = document.getElementById('stake_amount');
    x.value = glob["api_info"]["balance_usdc"];
}
