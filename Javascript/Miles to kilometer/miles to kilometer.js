function SumArray(number){
    let sum=0;
    for(i=0; i<=number.lenght; i++){
    let element=number[i]
    sum=sum+i;

}
return sum;
    
}

const result = SumArray(23,24,25)
console.log(result);