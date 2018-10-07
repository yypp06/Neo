function reverse(str){
  let splitString = str.split('');
  let reverseStr =  splitString.reverse('');
  let joinString = reverseStr.join('');

    if ( str == joinString) {
        console.log(true)
    }else{
        console.log(false)
    }
}
reverse('111111')
reverse('lalalal')
reverse('543212345')
