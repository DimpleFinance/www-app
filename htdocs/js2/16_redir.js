function redir(v)
{
    var t = "";
    t += "/";
    t += "#";
    t += v;
    console.log("redir: "+t);
//    debugger;
    location.href = t;
}