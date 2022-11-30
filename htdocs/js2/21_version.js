setInterval(get_version,10000);
function get_version()
{
    getData("/version/","check_version(xhr.response)");
}
function check_version(data)
{
    if(data != glob["site_version"])
    {
        console.log("Reload page. Version "+data);
        window.location.reload();
    }
}
