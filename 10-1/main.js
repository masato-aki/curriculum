let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
for (let i = 0; i < numbers.length; i++) {
    let num = numbers[i]
    function isEven() {
    console.log(num + 'は偶数です');
}
}


class Car {
    
    constructor(gas,num) {
        this.gas = gas;
        this.num = num; 
    }
}

const gasNum = new Car("油",0);

function getNumGas(){
console.log('ガソリンは${gasNum.gas}です。ナンバーは${gasNum.num}です');
}

