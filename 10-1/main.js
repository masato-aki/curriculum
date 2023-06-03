let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
for (let i = 0; i < numbers.length; i++) {
    let num = numbers[i]
    function isEven() {
        console.log(num + 'は偶数です');
        
}
}

isEven();


class Car {
    
    constructor(gas,num) {
        this.gas = gas;
        this.num = num; 
    }

getNumGas(){
    console.log(`ガソリンは${this.gas}です。ナンバーは${this.num}です`);
    }
}
let gasNum = new Car("油",0);


gasNum.getNumGas();










