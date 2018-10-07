function stars3(n){
    let star = '';
    for (let i=1; i <= n; i++){
        star += '*';
        console.log(star)
    }
    
    for(let k=n-1; k >= 1; k--){
        let restar = '';
        for(let s = k; s >= 1; s--){
            restar += '*';
            console.log(restar); 
        }
    }
}

stars3(5)