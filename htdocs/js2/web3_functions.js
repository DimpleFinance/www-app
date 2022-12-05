async function web3_stake_allowance(amount)
{

   var contractAddr = glob["contracts"]["stake"];
   var tkn = glob["contracts"]["usdc"];
    var name = '';

    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    console.log("Contract: "+tkn);

    var wal = selectedAccount;
    if(!wal) return false;

    const cApprove = new ethers.Contract(tkn, glob["abi"], signer2);

console.log("!!!!!!!!!AMount in: '"+amount+"'");
    switch(amount+"")
    {
        case "-1":
        amount = "10000000000000000000000000000000000000000000000000";
        name = 'Approve ALL tokens';
        break;
        case "0":
        amount = 0;
        name = 'Dissapprove ALL';
        break;
        default:
        name = 'Approve '+amount+' tokens';
        amount *= 10**18;
        amount = amount.toString(16);
        amount = "0x"+amount;

    }
//console.log("AMount out: "+amount);
//    r = await cApprove.approve(contractAddr,"10000000000000000000000000000000000000000000000000");
//    txt = 'Swap to BUY '+glob["api_wallet_info"]["buy_swap"]+' DDAO';
    modal_tx_info_open(name);
    try
    {
        r = await cApprove.approve(contractAddr,amount);
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
//            t = e.data.message;
            t = e;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = t.message;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
//            if(t.substring(0,19)=="execution reverted:")
//            t = t.substring(20);
//            console.log("Metamask Error: "+t+"");
            console.log(t);
        }


}
function faucetUSDC()
{
    onConnect();
    setTimeout(web3_faucetUSDC,100);
}
function faucetWETH()
{
    onConnect();
    setTimeout(web3_faucetWETH,100);
}
function faucetWMATIC()
{
    onConnect();
    setTimeout(web3_faucetWMATIC,100);
}
async function web3_faucetUSDC()
{
//    onConnect();
    var contractAddr = '0x1BfF2DA1BCf3C2da25fB1AB98Ad94e014d8dfca4';
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    var wal = selectedAccount;
    if(!wal) return false;

    const cContract = new ethers.Contract(contractAddr, glob["abi_faucet"], signer2);
    name = 'Claim 100 USDC [DIMPLE test token]';
    modal_tx_info_open(name);
    try
    {
        r = await cContract.FaucetUSDC();
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
//            t = e.data.message;
            t = e;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = t.message;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
//            if(t.substring(0,19)=="execution reverted:")
//            t = t.substring(20);
//            console.log("Metamask Error: "+t+"");
            console.log(t);
        }

}

async function web3_faucetWETH()
{
    var contractAddr = '0x1BfF2DA1BCf3C2da25fB1AB98Ad94e014d8dfca4';
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    var wal = selectedAccount;
    if(!wal) return false;

    const cContract = new ethers.Contract(contractAddr, glob["abi_faucet"], signer2);
    name = 'Claim 0.1 WETH [DIMPLE test token]';
    modal_tx_info_open(name);
    try
    {
        r = await cContract.FaucetWETH();
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
//            t = e.data.message;
            t = e;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = t.message;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
//            if(t.substring(0,19)=="execution reverted:")
//            t = t.substring(20);
//            console.log("Metamask Error: "+t+"");
            console.log(t);
        }

}

async function web3_faucetWMATIC()
{
//    onConnect();
    var contractAddr = '0x1BfF2DA1BCf3C2da25fB1AB98Ad94e014d8dfca4';
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    var wal = selectedAccount;
    if(!wal) return false;

    const cContract = new ethers.Contract(contractAddr, glob["abi_faucet"], signer2);
    name = 'Claim 100 WMATIC [DIMPLE test token]';
    modal_tx_info_open(name);
    try
    {
        r = await cContract.FaucetWMATIC();
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
//            t = e.data.message;
            t = e;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = t.message;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
//            if(t.substring(0,19)=="execution reverted:")
//            t = t.substring(20);
//            console.log("Metamask Error: "+t+"");
            console.log(t);
        }

}
function StakeClick()
{
    onConnect();
    setTimeout(web3_stake,100);

}
function UnstakeClick()
{
    onConnect();
    setTimeout(web3_unstake,100);

}
async function web3_stake()
{
    var x = document.getElementById('stake_amount');
    var  contractAddr = glob["contracts"]["stake"];
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    var wal = selectedAccount;
    if(!wal) return false;
    const cContract = new ethers.Contract(contractAddr, glob["abi_stake"], signer2);
    var val = document.getElementById('stake_amount').value;
    name = 'Stake '+val+' USDC';
    modal_tx_info_open(name);
    try
    {
	val *= 10**6;
        r = await cContract.Stake(val);
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
//            t = e.data.message;
            t = e;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = t.message;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
//            if(t.substring(0,19)=="execution reverted:")
//            t = t.substring(20);
//            console.log("Metamask Error: "+t+"");
            console.log(t);
        }

}	
async function web3_unstake()
{
    var x = document.getElementById('stake_amount');
    var  contractAddr = glob["contracts"]["stake"];
    const provider2         = new ethers.providers.Web3Provider(provider);
    const signer2 = provider2.getSigner()
    var wal = selectedAccount;
    if(!wal) return false;
    const cContract = new ethers.Contract(contractAddr, glob["abi_stake"], signer2);
    var val = document.getElementById('unstake_amount').value;
    name = 'Unstake '+val+' USDC';
    modal_tx_info_open(name);
    try
    {
	val *= 10**6;
        r = await cContract.Unstake(val);
        if(r)
        {
            x = document.getElementById('modal_txs_info_id');
            x.innerHTML = r.hash;
            console.log(r);
            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'View in Explorer';
            x.disabled = 0;
        }
    }
    catch(e)
        {
//            t = e.data.message;
            t = e;
            x = document.getElementById('modal_txs_info_err');
            x.innerHTML = t.message;

            x = document.getElementById('modal_txs_info_btn');
            x.innerHTML = 'Transaction error';
//            if(t.substring(0,19)=="execution reverted:")
//            t = t.substring(20);
//            console.log("Metamask Error: "+t+"");
            console.log(t);
        }

}	