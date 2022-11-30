function connect_wallet_add_onclick()
{
    var x = '';
    var y = '';
    var l = 0;
    x = document.getElementsByClassName('wallet_connect');
    l = x.length;
    for(i = 0;i<l;i++)
    {
    y = x[i];
//    y.addEventListener("click",connect_wal);
    y.addEventListener("click",function(){return connect_wal()});
//    console.log("WALLET BUT: "+l);

    }
}
connect_wallet_add_onclick();
function connect_wal()
{
    console.log("connect_wal clicked");
    onConnect();
    return false;
}
function connect_wallet_show_hide(true_or_false)
{
    var x = '';
    var y = '';
    var l = 0;

    x = document.getElementsByClassName('wallet_connect');
    l = x.length;
    for(i = 0;i<l;i++)
    {
    y = x[i];
    if(true_or_false)
    y.classList.remove("d-none");
    else
    y.classList.add("d-none");
    }
    btn_wallet_show_hide(!true_or_false);
}
function btn_wallet_show_hide(true_or_false)
{
    var x = '';
    var y = '';
    var l = 0;

    x = document.getElementsByClassName('wallet_action');
    l = x.length;
    for(i = 0;i<l;i++)
    {
    y = x[i];
    if(true_or_false)
    y.classList.remove("d-none");
    else
    y.classList.add("d-none");
    }
}
function wallet_id_set(wal)
{
    var x = '';
    var y = '';
    var l = 0;
    var w = wal_3dot(wal);
    console.log("WALLET_id_SET: '"+w+"'");

    x = document.getElementsByClassName('wallet-id');
    l = x.length;
    for(i = 0;i<l;i++)
    {
    y = x[i];
    y.innerHTML = w;
    }
    x = document.getElementsByClassName('wallet-id-full');
    l = x.length;
    for(i = 0;i<l;i++)
    {
    y = x[i];
    y.innerHTML = wal;
    }


}
function wal_3dot(wal)
{
   var t = ''
//    var t2 = ''
//    t = selectedAccount.substring(0,10);
//    t += '...';
//    t += selectedAccount.substring(34);
//    t2 = t;

    //console.log("CCC: "+wal+" - '"+wal.length+"'");
    if(wal.length > 2)
    {
    //console.log("1!!!!!!!!!!!!!!!!!");
    t = wal.substring(0,5);
    t += '...';
    t += wal.substring(38);
    }
    //else
    //t = "...";
    
    return t;
}