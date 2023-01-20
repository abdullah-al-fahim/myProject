// var walk = 17 ;
var animal = 0 ;
   if ( walk<=10){
    animal = walk*30

   }
   else if( walk<=20){
    var first = 10*30;
    var remain = walk-10;
    var second = remain * 100;
    animal= first + second;
   }
else{
    var first = 10 *30;
    var second = 10 *100
    var remain = walk-20;
    var thrid = remain * 200;
    animal = first + second + thrid
}
// console.log(animal)
// var walk = 17 ;
var animal = 0 ;
   if ( walk<=10){
    animal = walk*30

   }
   else if( walk<=20){
    var first = 10*30;
    var remain = walk-10;
    var second = remain * 100;
    animal= first + second;
   }
else{
    var first = 10 *30;
    var second = 10 *100
    var remain = walk-20;
    var thrid = remain * 200;
    animal = first + second + thrid
}
// console.log(animal)
var num = [ 3,4,3,4,8,9,2 ]
uniq = [];
for(var i = 0; i = num.length; i++ ) {
    var element = num[i];
    var index = uniq.indexof(element)
    if(index == -1){
        uniq.push(element);
    }
}
console.log(uniq);
