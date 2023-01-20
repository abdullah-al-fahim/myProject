const products = [
    'sdjgsdyfcygsdycfg lap',
    'aschasichasidjh lap',
    'ashashasudhn mobile'
];

const searching = 'lap';
const output = [];
for( const product of products){
    if( product.toLowerCase().indexOf(searching.toLowerCase()) !=-1 )
    {
        output.push(product);
    }
}
console.log(output);
