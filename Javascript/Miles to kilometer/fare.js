function maxval(arr)
let val = arr[0,2,7,9]
for(let val of arr){
    if(val>max){
        max=val;
    }
    return max;
}

console.log(max);