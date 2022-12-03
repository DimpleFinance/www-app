function getData(requestURL,func)
{
    const xhr = new XMLHttpRequest();
    xhr.open('GET', requestURL);
    xhr.onload = () =>
    {
      if (xhr.status !== 200)
      {
        return;
      }
        eval(func);
    }
    xhr.send();
}