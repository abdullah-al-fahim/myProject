function reversstring(str){
    revers = "";
    for( var i = 0; i = str.length; i++){
        var char = str[i];
        revers = char + revers;
    }
    return revers;

}
var stat = "I am Abdullah al fahim";
var fainal = reversstring(stat);
console.log(fainal);

