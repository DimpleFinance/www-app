function login_set(item,item2,wal)
{
    log("Login: "+wal);

    if(wal!== null)
    if(wal.length == 42)
    {
    wal = wal.toLowerCase();
    glob["wal"] = wal;
    localStorage.setItem('wal', wal);
    //login_redir("/claim/"+wal);
    //console.log("login_set: item:"+item+" item2:"+item2);
    check_logining(item,item2);
    //sale_set_val(wal);
    }

}
function login_unset()
{
    var wal = '';
    glob["wal"] = wal;
    localStorage.setItem('wal', wal);
//    login_redir(wal);
//    onDisconnect();
    connect_wallet_show_hide(1);
    web3Modal.clearCachedProvider();

//    console.log("================= provider ==============");
//    console.log(provider.close);
//    console.log(provider);

}
function login_redir(url)
{
    console.log("login_redir to: "+url);
//    debugger;
    redir(url);
}
function login_get()
{
    var wal = localStorage.getItem('wal');
    return wal;
}

function check_logining(item="",item2="all")
{
//    if(glob[item] != item)item2 = "all";
//    else 
//    item2 = glob[item2];
//    if(!item)item = "all";
    var url = "";
    var w = "";
//    var x = document.getElementById("auth_off");
//    var y = document.getElementById("auth_on");
    log("check_logining: item="+item+' item2='+item2);

    var wal = login_get();
    if(wal !== null &&wal.length == 42)
    {
//	if(item=="")item = "claim";
	if(item=="")item = glob["item_def"];
//	login_redir("/"+item+"/"+wal);
	login_redir("/"+item+"/"+item2+"/"+wal);
//	x.classList.remove("d-none");
//	y.classList.add("d-none");
	classList_add_remove("auth_off",0,"d-none");
	classList_add_remove("auth_on",1,"d-none");

        connect_wallet_show_hide(0);
	wallet_id_set(wal);
	networks_show(true);
    }
    else
    {
	console.log("REDIR TO ");
//	url = "/claim/all";
	url = "/"+glob["item_def"]+"/all";
	//if(glob["last_item_switch"])
	//url = "/"+glob["last_item_switch"];
	
	login_redir("/claim/all");
	login_redir(url);
//	x.classList.add("d-none");
//	y.classList.remove("d-none");

	classList_add_remove("auth_off",1,"d-none");
	classList_add_remove("auth_on",0,"d-none");
        connect_wallet_show_hide(1);
	wallet_id_set("-");
	networks_show(false);
    }
}

check_logining(glob["item"],glob["item2"]);

function login_explorer(e)
{
    var wal = login_get();
    var url = "https://polygonscan.com/address/"+wal;
    e.href = url;
    return true;
}
function logout()
{
    var x = "";
//    x = document.getElementById('close_acc');

//    console.log(web3Modal);
//console.log('AAAAAAAAAAAAAAAAAA '+Web3Modal.cacheProvider);
//console.log('bbbbbbbbbbbbbb' + WEB3_CONNECT_CACHED_PROVIDER);


//debugger;
    login_unset();
//    web3Modal.clearCachedProvider();
//    refreshState();

    connect_wallet_show_hide(1);
//    login_redir("/claim/");
//    x.click();
//    check_logining(glob["item"],glob[item2]);
    check_logining(glob["item"]);
    return false;
//    return true;
}
