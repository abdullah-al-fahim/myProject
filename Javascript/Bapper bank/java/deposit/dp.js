function getinputvalue(BoxID){

       const inputId = document.getElementById(BoxID);
       const inputText = inputId.value;
       const inputAmount = parseFloat(inputText);
       inputId.value ='';
       return inputAmount;
}

function getplusvalue(inputField, Amount){
    const fildspace = document.getElementById(inputField);
    const fildspaceText = fildspace.innerText;
    const fildamount = parseFloat(fildspaceText);

    const finalValue = fildamount + Amount;
    return (finalValue);
}
function getminusvalue( ammount,isAdd){
    const FnlBalance = document.getElementById('balance-id');
    const FnlBalanceText = FnlBalance.innerText;
    const prsFnlBl = parseFloat(FnlBalanceText);
    if(isAdd == true){
        const Fbalan = ammount + prsFnlBl;
        FnlBalance.innerText= Fbalan;

    }
    else{
        const flBlalance = prsFnlBl - ammount ;
        FnlBalance.innerText = flBlalance;
    }

    

}

document.getElementById('Deposit-submit').addEventListener('click', function  (){
    const depositInput = getinputvalue('Deposit-amount');

    // const depositAmountText = depositInput.value;
    // const currentAmount = parseFloat(depositAmountText);

    // const depositTotal = document.getElementById('Deposit-id');
    // const depositTotalText =depositTotal.innerText;
    // const plusAmount = parseFloat(depositTotalText);

    // const newAmount = depositInput + plusAmount;
    const newAmount = getplusvalue('Depositid', depositInput);

    Depositid.innerText = newAmount;

    const dld = getminusvalue(newAmount, true);

    // const FnlBalance = document.getElementById('balance-id');
    // const FnlBalanceText = FnlBalance.innerText;
    // const prsFnlBl = parseFloat(FnlBalanceText);

    // const FinalBalance = newAmount + prsFnlBl;

    // FnlBalance.innerText= FinalBalance;

    // depositInput.value = '';
    


})

document.getElementById('withdraw-submit').addEventListener('click', function(){

    const withdraw = getinputvalue('withdraw-amount');
    // const withdrawText = withdraw.value;
    // const withdrawAmount = parseFloat(withdrawText);

    // const FainalWithdraw = document.getElementById('balance-wd');
    // const FainalWithdrawText = FainalWithdraw.innerText;
    // const FainalAmount = parseFloat(FainalWithdrawText);

    // const VeryFinalBalance = withdraw + FainalAmount;
    const VeryFinalBalance = getplusvalue('balancewd', withdraw);

    balancewd.innerText = VeryFinalBalance;

    getminusvalue(VeryFinalBalance, false);


    // const FnlBalance = document.getElementById('balance-id');
    // const FnlBalanceText = FnlBalance.innerText;
    // const prsFnlBl = parseFloat(FnlBalanceText);

    // const constantBalance = VeryFinalBalance - prsFnlBl;
    // FnlBalance.innerText = constantBalance;
   

    // withdraw.value = '';

})
