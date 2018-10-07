function star(i){ 
  let newStar = '';
  for(let j= 1; j <=i; j++){
      newStar += '*'
    } 
    return newStar
  }

  function star2(n){
    for(let i= 1; i <=n; i++){
      console.log(star(i))
}  
    for(let i= n-1; i>= 1; i--){
      console.log(star(i))
    }
 }   


star2(11)