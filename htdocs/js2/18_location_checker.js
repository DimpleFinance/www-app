window.addEventListener('hashchange', function()
{
    location_get();
}
)
function location_get()
{
    var t = "";
    t = document.location.href;
    console.log('location changed! '+t);
    location_get_info();
//    debugger;
//    sale_set_val(wal);
}
location_get();
function location_get_info()
{
    var v = "";
    var p = 0;
    var t = "";
    var t2 = "";
    t = document.location.href;
    p = t.indexOf("#");
console.log("URL POS of #: "+p);
    if(p==-1)
    {
	v = glob["item_def"];
    }
    else
    {
    p++;
    v = t.substring(p);
    }

    //console.log(v);
    r = parse_slash(v);

    console.log("item: "+r["item"]);
    console.log("item2: "+r["item2"]);
    glob["item"] = r["item"]?r["item"]:'claim';
    glob["item2"] = r["item2"];
    //menu_active(r["item"]);
    blk_visible(r["item"],r["item2"]);

//console.log("R[wal]: "+r["wal"]);
    if(r["wal"] === undefined)
    {
	t2 = login_get();
	//console.log("LOGIN GET: "+t2);
	if(t2 != "")
	login_set(glob["item"],glob["item2"],t2);
    }
//console.log("R[wal]: "+r["wal"]);

    if(r["wal"] !== undefined)
    {
    //log(r["wal"]);
    if(r["wal"] != login_get() && r["wal"].length == 42)
    login_set(glob["item"],glob["item2"],r["wal"]);

//    clean_modified();
//    sale_set_val(r["wal"]);    
    }

}
function parse_slash(s)
{
    var r = new Array();
    var n = 0;
    var n2 = "";
    var p = 0;
    var p2 = 0;
    var t = "";
    var v = "";
    var f = 1;
    //log(s);
    do
    {
//    log("S: "+s);
    p = s.indexOf("/");
    p++;
//    log("P: "+p)
    t = s.substring(p);
    p2 = t.indexOf("/");
    if(p2>0)
    v = t.substring(0,p2);
    else
    {
//    v = t.substring(p);
    v = t;
    f = 0;
    }
//    log("V: "+v)


	switch(n+"")
	{
	    case "0":
		n2 = "item";
	    break;

	    case "1":
		n2 = "item2";
	    break;

	    case "2":
		n2 = "wal";
		v = v.toLowerCase();
	    break;

	    case "3":
		n2 = "net";
	    break;
	    default:
		n2 = n;
	}
//    r[n] = v;
    r[n2] = v;
    
    n++;
    s = s.substring(p+p2);
//    log("P:"+p+" "+"P2:"+p2+" V:"+v+" S:"+s);
    }
    while(p>=0 && n<20 && f);

//    console.log(r);
    
    return r;
}