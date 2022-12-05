function modal_tx_info_open(txt = '',err = '',btn='See YOUR wallet')
{
    console.log('FUNC modal_tx_info_open');
    var x;

    x = document.getElementById('modal_txs_info_ok');
    x.innerHTML = txt;

    x = document.getElementById('modal_txs_info_err');
    x.innerHTML = err;

    x = document.getElementById('modal_txs_info_id');
    x.innerHTML = '';

    x = document.getElementById('modal_txs_info_btn');
    x.innerHTML = btn;
    x.disabled = 1;

    $('#modal_tx_info').modal('show');
}

function modal_txs_info_btn_click()
{
    var explorer = '';
    var url = '';
    var x = document.getElementById('modal_txs_info_id');
    if(x.innerHTML != '')
    {
    switch(chainId)
    {
        default:
        explorer = 'https://mumbai.polygonscan.com/tx/';
    }
    url = explorer+x.innerHTML;
    window.open(url, '_blank');
    }
}
