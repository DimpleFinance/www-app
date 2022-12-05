async function metamask_add_token(addr,symbol,decimal,img)
{
//const tokenAddress = '0xc00971105e61274c8a5cd5a88fe7e037d935b513';
//const tokenSymbol = 'HelloCoin';
//const tokenDecimals = 18;
//const tokenImage = 'https://assets.codepen.io/4625073/1.jpeg';

    name = 'Add stDIMPLE to METAMASK [DIMPLE stake token]';
    modal_tx_info_open(name);

try
{

  const wasAdded = await ethereum.request({
    method: 'wallet_watchAsset',
    params: {
      type: 'ERC20',
      options: {
        address: addr,
        symbol: symbol,
        decimals: decimal,
        image: img,
      },
    },
  });

  if (wasAdded)
  {
    console.log('Token Added');
  }
  else
  {
    console.log('Token has not been added');
  }
}
catch (error)
{
  console.log(error);
}

}
