function getData(requestURL,func)
{
    // URL на который будем отправлять GET запрос
//    const requestURL = '/examples/ajax/01.html';
//    const requestURL = '/examples/ajax/01.html';
    const xhr = new XMLHttpRequest();
    xhr.open('GET', requestURL);
    xhr.onload = () =>
    {
      if (xhr.status !== 200)
      {
        return;
      }
//      document.querySelector('#result').innerHTML =
//      console.log(xhr.response);

        eval(func);
        //parse_data(xhr.response);
    }
    xhr.send();
}
