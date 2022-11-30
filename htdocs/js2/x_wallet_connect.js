"use strict";

var chain_name = '';
const btn_class = "btn-success";
var chainId = 0;

/**
 * Example JavaScript code that interacts with the page and Web3 wallets
 */

 // Unpkg imports
const Web3Modal = window.Web3Modal.default;
//console.log("!!!!!!!!AAAAAAAAAAAAAAAAA "+Web3Modal);

const WalletConnectProvider = window.WalletConnectProvider.default;
//const Fortmatic = window.Fortmatic;
const evmChains = window.evmChains;

// Web3modal instance
let web3Modal

// Chosen wallet provider given by the dialog window
let provider;


// Address of the selected account
let selectedAccount;


/**
 * Setup the orchestra
 */
function init() {

  console.log("Initializing example");
  console.log("WalletConnectProvider is", WalletConnectProvider);
//  console.log("Fortmatic is", Fortmatic);
  console.log("window.web3 is", window.web3, "window.ethereum is", window.ethereum);

  // Check that the web page is run in a secure context,
  // as otherwise MetaMask won't be available
  if(location.protocol !== 'https:') {
    // https://ethereum.stackexchange.com/a/62217/620
    const alert = document.querySelector("#alert-error-https");
    alert.style.display = "block";
    document.querySelector("#btn-connect").setAttribute("disabled", "disabled")
    return;
  }

  // Tell Web3modal what providers we have available.
  // Built-in web browser provider (only one can exist as a time)
  // like MetaMask, Brave or Opera is added automatically by Web3modal
  const providerOptions = {
    walletconnect: {
      package: WalletConnectProvider,
      options: {
        // Mikko's test key - don't copy as your mileage may vary
        infuraId: "0903c0eda4b6458386b9ce8b22020a94",
            rpc: {
                1: "https://mainnet.infura.io/v3/0903c0eda4b6458386b9ce8b22020a94",
                3: "https://ropsten.infura.io/v3/0903c0eda4b6458386b9ce8b22020a94",
		56: "https://bsc-dataseed1.binance.org",
                137: "https://matic-rpc.infocoin.pro/",
            },
      }
    },
/*
    fortmatic: {
      package: Fortmatic,
      options: {
        // Mikko's TESTNET api key
        key: "pk_test_391E26A3B43A3350"
      }
    }
*/
  };

  web3Modal = new Web3Modal({
//    cacheProvider: false, // optional
    cacheProvider: true, // optional
    providerOptions, // required
    disableInjectedProvider: false, // optional. For MetaMask / Brave / Opera.
  });

  console.log("Web3Modal instance is", web3Modal);
}


/**
 * Kick in the UI action after Web3modal dialog has chosen a provider
 */
async function fetchAccountData() 
{

    var t = "";
    var x = "";
    var y = "";
  // Get a Web3 instance for the wallet
  const web3 = new Web3(provider);
    chainId = await web3.eth.getChainId();

    var this_val = '';
    var this_err = "ok";
    var network_name = "";
    var network_txt = "";
    switch(chainId+'')
    {
	case "80001":
	case "137":
	    this_val = 'matic';
	    network_name = "Polygon";

	    network_txt += "<img src=/images/polygon.svg>";
	    network_txt += "<span>" + network_name + "</span>";
	break;
	case "56":
	case "97":
	    this_val = 'bsc';
	    network_name = "BSC";


	    network_txt += "<img src='/images/bsc.svg'>";
	    network_txt += "<span>"+network_name+"</span>";
	break;
	case "1":
	case "3":
	    this_val = 'eth';
	    network_name = "Ethereum";


	    network_txt += "<img src='/images/eth.svg'>";
	    network_txt += "<span>"+network_name+"</span>";
	break;
	default:
	this_val = "";
	this_err = "err";
//	this_txt = "Unsupport";
        network_name = "Unsupported";
        network_txt = network_name;
    }
  // Get list of accounts of the connected wallet
  const accounts = await web3.eth.getAccounts();

  // MetaMask does not give you all accounts, only the selected account
  console.log("Got accounts", accounts);
  selectedAccount = accounts[0];
  login_set(glob["item"],glob["item2"],selectedAccount);

//  document.querySelector("#selected-account").textContent = selectedAccount;
//    console.log("AAA");
    var t = ''
    var t2 = ''
    if(selectedAccount.length>10)
    {
    //console.log("AAA");
    t = selectedAccount.substring(0,10);
    t += '...';
    t += selectedAccount.substring(34);
    }
    else
    t = "...";
    t2 = t;

    if(selectedAccount.length>10)
    {
    //console.log("BBB");
    t = selectedAccount.substring(0,6);
    t += '...';
    t += selectedAccount.substring(37);
    }
    else
    t = "...";
  // Go through all accounts and get their ETH balance
  const rowResolvers = accounts.map(async (address) => {
    const balance = await web3.eth.getBalance(address);
    // ethBalance is a BigNumber instance
    // https://github.com/indutny/bn.js/
    const ethBalance = web3.utils.fromWei(balance, "ether");
    const humanFriendlyBalance = parseFloat(ethBalance).toFixed(4);

  });

  // Because rendering account does its own RPC commucation
  // with Ethereum node, we do not want to display any results
  // until data for all accounts is loaded
  await Promise.all(rowResolvers);

  // Display fully loaded UI for wallet data
}



/**
 * Fetch account data for UI when
 * - User switches accounts in wallet
 * - User switches networks in wallet
 * - User connects wallet initially
 */
async function refreshAccountData() {

  // If any current data is displayed when
  // the user is switching acounts in the wallet
  // immediate hide this data
//  document.querySelector("#connected").style.display = "none";
//  document.querySelector("#prepare").style.display = "block";

  // Disable button while UI is loading.
  // fetchAccountData() will take a while as it communicates
  // with Ethereum node via JSON-RPC and loads chain data
  // over an API call.
  await fetchAccountData(provider);
//  document.querySelector("#btn-connect").setAttribute("disabled", "disabled");

//  document.querySelector("#btn-connect").removeAttribute("disabled");
}


/**
 * Connect wallet button pressed.
 */
async function onConnect() {

  console.log("Opening a dialog", web3Modal);

  try {
    provider = await web3Modal.connect();
  } catch(e) {
    console.log("Could not get a wallet connection", e);
    return;
  }
//    console.log(getProviderOptions());
    if(provider !== null)
    {
	const provider2         = new ethers.providers.Web3Provider(provider);
//	console.log('!@!@!@!@!@!@');
//	console.log(provider2);
    }

  // Subscribe to accounts change
  provider.on("accountsChanged", (accounts) => {
    fetchAccountData();
  });

  // Subscribe to chainId change
  provider.on("chainChanged", (chainId) => {
    log("CHAIN CHANGED");
    fetchAccountData();
  });

  // Subscribe to networkId change
  provider.on("networkChanged", (networkId) => {
//    log("NETWORK CHANGED");
    fetchAccountData();
  });

  await refreshAccountData();
}

/**
 * Disconnect wallet button pressed.
 */
async function onDisconnect() {

  console.log("Killing the wallet connection", provider);
//  document.querySelector("#up_wal_on").className = 'd-none';
//  document.querySelector("#up_wal_off").className = '';
//  document.querySelector("#selected-account").textContent = '';
//  document.querySelector("#network-name").textContent = '';


  // TODO: Which providers have close method?
  if(provider.close) {
    await provider.close();

    // If the cached provider is not cleared,
    // WalletConnect will default to the existing session
    // and does not allow to re-scan the QR code with a new wallet.
    // Depending on your use case you may want or want not his behavir.
    await web3Modal.clearCachedProvider();
    refreshState();
    provider = null;
    provider2 = null;
//    console.log('AAAAAAAAAAAAAAAAAA '+web3Modal.cacheProvider);    
  }

  selectedAccount = null;

//$("#popup").dialog('close');
window.parent.$.fancybox.close();

//x = document.getElementsByClassName("fancybox-close-small");
//console.log(x);
//x[0].click();



//  document.querySelector("#blk_acc").className = "d-none";
//  document.querySelector("#btn-connect").className = "btn "+btn_class;
//  document.querySelector("#btn-disconnect").className = "d-none";
//  document.querySelector("#tbl_alloc_blk").className = "tbl_alloc";
//  document.querySelector("#my_addr2").textContent = "";
//  document.querySelector(".my2_addr").textContent = "";

//  document.querySelector("#networks_select_blk").className = 'd-none';
//  document.querySelector("#up_net").className = "";;


  // Set the UI back to the initial state
//  document.querySelector("#prepare").style.display = "block";
//  document.querySelector("#connected").style.display = "none";
}


/**
 * Main entry point.
 */
window.addEventListener('load', async () => {
  init();
//  document.querySelector("#btn-connect").addEventListener("click", onConnect);
// document.querySelector("#btn-disconnect").addEventListener("click", onDisconnect);
});
