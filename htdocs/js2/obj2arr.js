function obj2arr(o)
{
    var o2 = new Array();
    for (const [key, value]  of Object.entries(o))
    {
        o2[key] = value;
        //console.log(`${key}: ${value}`);
    }
    return o2;
}
