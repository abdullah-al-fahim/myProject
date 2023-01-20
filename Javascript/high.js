function reversstring(str){
    var revers = "";
    for( var i = 0; i<str.length; i++){
        var char = str[i];
        revers = char + revers;
    }
    return revers;

}
var stat = "I am Abdullah al fahim";
var fainal = reversstring(stat);
// console.log(fainal);

var num=[30,45,60]
var max= num[0];
for(var i = 0; i<num.length; i++){
       element= num[i];
       if(element>max){
        max=element;
       }
}
// console.log("hihgest num", max);

var num = [ 3,4,3,4,8,9,2 ]
uniq = [];
for(var i = 0; i<num.length; i++ ) {
    var element = num[i];
    var index = uniq.indexof(element)
    if(index == -1){
        uniq.push(element);
    }
}
// console.log(uniq);

var num = new Array();

for(i=0; i<5; i++){
    num[i]=parseInt(prompt("Shahed vy please Giver your Number: " ))
}
var sum=0;
for(i=0; i<5; i++){
    sum = sum+num[i];


}
console.log("sum= " +sum);
